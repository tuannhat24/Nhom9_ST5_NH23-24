<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
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

        // Truy vấn giỏ hàng
        $carts = Cart::all();

        // Truy vấn danh mục
        $categories = Category::all();

        if ($currentPage >= $totalPages) {
            $currentPage = $totalPages;
        }

        // Lấy giá trị của selectedCategory từ URL
        $selectedCategory = request()->input('category');

        // Truy vấn dữ liệu sản phẩm từ database và sắp xếp theo giá mặc định (id)
        $products = Product::with(['sizes', 'colors'])->orderBy('id')->paginate($perPage);

        // Nếu có yêu cầu sắp xếp theo giá từ thấp đến cao
        if (request()->has('sort') && request()->input('sort') == 'price_asc') {
            $products = Product::orderBy('price_sale')->paginate($perPage);
        }

        // Nếu có yêu cầu sắp xếp theo giá từ cao đến thấp
        if (request()->has('sort') && request()->input('sort') == 'price_desc') {
            $products = Product::orderByDesc('price_sale')->paginate($perPage);
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

        $currentUser = Auth::user();
        $carts = Cart::all();
        $categories = Category::all();

        $products = Product::where('name', 'LIKE BINARY', "%$query%")
            ->orWhere('description', 'LIKE BINARY', "%$query%");

        // Áp dụng sắp xếp theo giá nếu được yêu cầu
        if ($request->has('sort')) {
            if ($request->input('sort') == 'price_asc') {
                $products = $products->orderBy('price_sale');
            } elseif ($request->input('sort') == 'price_desc') {
                $products = $products->orderByDesc('price_sale');
            }
        }

        $products = $products->paginate($perPage);


        return view('search_results', compact(
            'title',
            'products',
            'query',
            'currentUser',
            'totalPages',
            'currentPage',
            'carts',
            'categories',
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

        $currentUser = Auth::user();
        $carts = Cart::all();
        $categories = Category::all();

        // Áp dụng sắp xếp theo giá nếu được yêu cầu
        if ($request->has('sort')) {
            if ($request->input('sort') == 'price_asc') {
                $productsQuery->orderBy('price_sale');
            } elseif ($request->input('sort') == 'price_desc') {
                $productsQuery->orderByDesc('price_sale');
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

        $currentUser = Auth::user();
        $carts = Cart::all();

        if ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

        $products = Product::with(['sizes', 'colors'])->orderBy('id')->paginate($perPage);

        return view('all', compact('title', 'products', 'carts', 'currentUser', 'totalPages', 'currentPage'));
    }
}
