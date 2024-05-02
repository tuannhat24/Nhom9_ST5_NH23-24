<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        $perPage = 20;

        $totalProducts = Product::count();
        $totalPages = ceil($totalProducts / $perPage);

        $currentPage = request()->input('page', 1);
        if ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

        $currentUser = Auth::user();
        $carts = Cart::all();
        $categories = Category::all();

        $products = Product::with(['sizes', 'colors'])->orderBy('id')->paginate($perPage);

        if (request()->has('sort')) {
            $sortType = request()->input('sort');
            if ($sortType == 'price_asc') {
                $products = Product::with(['sizes', 'colors'])->orderBy('price_sale')->paginate($perPage);
            } elseif ($sortType == 'price_desc') {
                $products = Product::with(['sizes', 'colors'])->orderByDesc('price_sale')->paginate($perPage);
            }
        }

        return view('product', compact('products', 'carts', 'currentUser', 'categories', 'totalPages', 'currentPage'));
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
            ->orWhere('description', 'LIKE BINARY', "%$query%")
            ->paginate($perPage);

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
