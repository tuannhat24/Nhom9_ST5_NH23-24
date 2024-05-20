<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class ManageController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
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

    public function user()
    {
        $user = Auth::user();
        $user->load('customer');
        return view('users/admin/profile', compact('user'));
    }

    public function updateInformation(Request $request)
    {
        try {
            $user = Auth::user(); // Lấy người dùng hiện tại đã đăng nhập

            // Xác thực dữ liệu đầu vào
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'phone' => 'required|numeric',
                'address' => 'required|string',
                'password' => 'nullable|string|min:8|confirmed',
            ]);

            // Cập nhật thông tin người dùng
            $userData = [
                'name' => $request->name,
                'email' => $request->email,
                // 'phone' => $request->phone,
                // 'address' => $request->address,
            ];
            $user->customer->phone = $request->phone;
            $user->customer->address = $request->address;
            if ($request->filled('password')) {
                $userData['password'] = Hash::make($request->password);
            }
            $user->update($userData);
            $user->customer->save();
            return redirect()->route('admin.profile')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '   Line: ' .$exception->getLine());
            return redirect()->route('admin.profile')->with('error', 'update không thành công.');
        }
    }
}
