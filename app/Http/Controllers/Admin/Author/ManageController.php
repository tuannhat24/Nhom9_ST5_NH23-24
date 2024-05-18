<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Product;
use App\Models\Category;

class ManageController extends Controller
{
    public function index()
    {   $totalProducts = Product::count();
        return view('users/admin/home', [
            't' => $totalProducts
        ]);
    }

    public function statistics()
    {
        // Tổng số sản phẩm
        $totalProducts = Product::count();

        //Tổng số danh mục
        $totalCategories = Category::count();


        // Tổng số lượng sản phẩm đã bán
        $totalQuantitySold = Product::sum('quantity_sold');

        // Sản phẩm yêu thích nhất
        $mostFavoritedProduct = Product::orderBy('favorite_count', 'desc')->first();

        // Danh mục có nhiều sản phẩm nhất
        $categoryWithMostProducts = Category::withCount('products')
            ->
            orderBy('products_count', 'desc')
            ->
            first();

            return response()->json([
                'totalProducts' => $totalProducts,
                'totalCategories' => $totalCategories,
                'totalQuantitySold' => $totalQuantitySold,
                'mostFavoritedProduct' => $mostFavoritedProduct,
                'categoryWithMostProducts' => $categoryWithMostProducts
            ]);
    }
}
