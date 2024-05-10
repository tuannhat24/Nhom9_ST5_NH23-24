<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        // Dữ liệu phân trang
        $perPage = 20;

        $totalProducts = Product::count();

        $totalPages = ceil($totalProducts / $perPage);

        $currentPage = request()->input('page', 1);

        // Truy vấn thông tin của người dùng hiện tại
        $currentUser = auth()->user();

        // Truy vấn giỏ hàng của người dùng hiện tại
        $carts = Cart::where('customer_id', $currentUser->customer_id)->get();

        // Truy vấn danh mục
        $categories = Category::all();

        if ($currentPage >= $totalPages) {
            $currentPage = $totalPages;
        }

        // Lấy giá trị của selectedCategory từ URL
        $selectedCategory = request()->input('category');

        // Truy vấn dữ liệu sản phẩm từ database và sắp xếp theo giá mặc định (id)
        $products = Product::orderBy('id')->paginate($perPage);

        // Nếu có yêu cầu sắp xếp theo giá từ thấp đến cao
        if (request()->has('sort') && request()->input('sort') == 'price_asc') {
            $products = Product::orderBy('percent_discount')->paginate($perPage);
        }

        // Nếu có yêu cầu sắp xếp theo giá từ cao đến thấp
        if (request()->has('sort') && request()->input('sort') == 'price_desc') {
            $products = Product::orderByDesc('percent_discount')->paginate($perPage);
        }

        return view('product', [
            'title' => 'Trang sản phẩm',
            'products' => $products,
            'carts' => $carts,
            'currentUser' => $currentUser,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
        ]);
    }

    public function search(Request $request)
    {
        $title = "Kết quả tìm kiếm";
        $query = $request->input('query');
        $perPage = 20;

        $totalProducts = Product::where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->count();
        $totalPages = ceil($totalProducts / $perPage);
        $currentPage = $request->input('page', 1);
        if ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

         // Truy vấn thông tin của người dùng hiện tại
         $currentUser = auth()->user();

         // Truy vấn giỏ hàng của người dùng hiện tại
         $carts = Cart::where('customer_id', $currentUser->customer_id)->get();

         // Truy vấn danh mục
         $categories = Category::all();

        $products = Product::where('name', 'LIKE BINARY', "%$query%")
            ->orWhere('description', 'LIKE BINARY', "%$query%");

        // Áp dụng sắp xếp theo giá nếu được yêu cầu
        if ($request->has('sort')) {
            if ($request->input('sort') == 'price_asc') {
                $products = $products->orderBy('percent_discount');
            } elseif ($request->input('sort') == 'price_desc') {
                $products = $products->orderByDesc('percent_discount');
            }
        }

        $products = $products->paginate($perPage);

        // Xử lí lịch sử tìm kiếm
        if (request()->isMethod('get') && request()->has('query')) {
            $query = request()->input('query');

            // Lấy lịch sử tìm kiếm từ session, hoặc khởi tạo nếu chưa tồn tại
            $searchHistory = session('search_history', []);

            // Kiểm tra xem từ khóa đã tồn tại trong lịch sử tìm kiếm chưa
            if (!in_array($query, $searchHistory)) {
                // Thêm từ khóa tìm kiếm mới vào đầu mảng lịch sử
                array_unshift($searchHistory, $query);

                // Giới hạn số lượng mục trong lịch sử tìm kiếm
                if (count($searchHistory) > 5) {
                    array_pop($searchHistory);
                }
            }

            session(['search_history' => $searchHistory]);
        }


        return view('search_results', compact(
            'title',
            'products',
            'query',
            'currentUser',
            'totalPages',
            'currentPage',
            'carts',
            'categories',
            // 'searchHistory',
        ));
    }

    public function productsByCategory(Category $category, Request $request)
    {
        $title = "Sản phẩm thuộc danh mục: " . $category->name;
        $perPage = 20;

        // Lấy danh sách sản phẩm thuộc danh mục và phân trang
        $productsQuery = $category->products();

        $totalProducts = $category->products()->count();
        $totalPages = ceil($totalProducts / $perPage);
        $currentPage = request()->input('page', 1);

        if ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

         // Truy vấn thông tin của người dùng hiện tại
         $currentUser = auth()->user();

         // Truy vấn giỏ hàng của người dùng hiện tại
         $carts = Cart::where('customer_id', $currentUser->customer_id)->get();

         // Truy vấn danh mục
         $categories = Category::all();

        // Áp dụng sắp xếp theo giá nếu được yêu cầu
        if ($request->has('sort')) {
            if ($request->input('sort') == 'price_asc') {
                $productsQuery->orderBy('percent_discount');
            } elseif ($request->input('sort') == 'price_desc') {
                $productsQuery->orderByDesc('percent_discount');
            }
        }

        $products = $productsQuery->paginate($perPage);

        // Truyền biến selectedCategory vào view
        $selectedCategory = $category->id;


        return view('product', compact(
            'title',
            'products',
            'category',
            'currentUser',
            'totalPages',
            'currentPage',
            'carts',
            'categories',
            'selectedCategory'
        ));
    }



    public function allProducts()
    {
        $title = "Tất cả sản phẩm";
        $perPage = 30;
        $totalProducts = Product::count();
        $totalPages = ceil($totalProducts / $perPage);
        $currentPage = request()->input('page', 1);

         // Truy vấn thông tin của người dùng hiện tại
         $currentUser = auth()->user();

         // Truy vấn giỏ hàng của người dùng hiện tại
         $carts = Cart::where('customer_id', $currentUser->customer_id)->get();

        if ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

        $products = Product::orderBy('id')->paginate($perPage);

        return view('all', compact('title', 'products', 'carts', 'currentUser', 'totalPages', 'currentPage'));
    }
}
