<?php


namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAddRequest;
use App\Models\Product;
use App\Traits\StorageImageTrait;
use GuzzleHttp\Psr7\Message;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recusive;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductControllers extends Controller
{
    use StorageImageTrait;
    private $category;
    private $product;
    public function __construct(Category $category, Product $product){
        $this->category = $category;
        $this->product = $product;
    }
    // public function index(){
    //     $products = $this->product->latest()->paginate(5);
    //     return view('users/admin/products/listproduct', [
    //         'title' => 'DANH SÁCH SẢN PHẨM',
    //         'products' => $products
    //     ]);
    // }

    public function index(Request $request) {
        // Lấy từ khóa tìm kiếm từ yêu cầu
        $keyword = $request->input('keyword', '');
    
        // Nếu có từ khóa, tìm kiếm theo tên danh mục hoặc mô tả
        if (!empty($keyword)) {
            $products = $this->product->where('name', 'LIKE', '%' . $keyword . '%')
                                  ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                                //   ->orWhere('price', 'LIKE', '%' . $keyword . '%')
                                  ->latest()->paginate(5); // Thực hiện phân trang
        } else {
            $products = $this->product->latest()->paginate(5); // Trường hợp không có từ khóa, trả về tất cả
        }
        $title = 'DANH SÁCH SẢN PHẨM';
        // Trả về view với dữ liệu danh mục đã tìm kiếm
        return view('users/admin/products/listproduct', compact('products', 'keyword', 'title'));
    }

    public function getCategory($parent_id){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryResusive($parent_id);
        return $htmlOption;
    }

    public function create(){
        $htmlOption = $this->getCategory($parentId = " ");
        return view('users/admin/products/addproduct', [
            'title' => 'THÊM SẢN PHẨM',
            'option' => $htmlOption
        ]);
    }

    public function store(ProductAddRequest $request){
        try{
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'cate_id' => $request->category,
                'description' => $request->description,
                'price' => $request->price,
                'price_sale' => $request->price_sale,
                'quantity_sold' => $request->qty,
            ];
            $dataUploadImg = $this->storageImageTrait($request, 'img', 'product');
            if(!empty($dataUploadImg)){
                $dataProductCreate['image'] = $dataUploadImg['filedName'];
                $dataProductCreate['image_path'] = $dataUploadImg['filedPath'];
            }
            $product = $this->product->create($dataProductCreate);
            DB::commit();
            return redirect()->route('admin.product.index')->with('success', 'Sản phẩm đã được thêm thành công.');;
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '   Line: ' .$exception->getLine());
            return redirect()->route('admin.product.index')->with('error', 'Thêm sản phẩm không thành công.');
        }
    }

    public function edit($id){
       $product = $this->product->find($id);
       $htmlOption = $this->getCategory($product->cate_id);
        return view('users/admin/products/edit', [
            'title' => 'Update Sản Phẩm',
            'product' => $product,
            'option' => $htmlOption
        ]);
    }

    public function update($id, Request $request){
        try{
            DB::beginTransaction();
            $dataProductUpdate = [
                'name' => $request->name,
                'cate_id' => $request->category,
                'description' => $request->description,
                'price' => $request->price,
                'price_sale' => $request->price_sale,
                'quantity_sold' => $request->qty,
            ];
            $dataUploadImg = $this->storageImageTrait($request, 'img', 'product');
            if(!empty($dataUploadImg)){
                $dataProductUpdate['image'] = $dataUploadImg['filedName'];
                $dataProductUpdate['image_path'] = $dataUploadImg['filedPath'];
            }
            $product = $this->product->find($id)->update($dataProductUpdate);
            DB::commit();
            return redirect()->route('admin.product.index')->with('success', 'Sản phẩm đã được update thành công.');

        }catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '   Liene: ' .$exception->getLine());
        }
    }

    public function delete($id){
        try{
            $this->product->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'succes'
            ], status: 200);
        }catch (\Exception $exception){
            Log::error('Message: ' . $exception->getMessage() . '   Line: ' .$exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], status: 500);
        }
    }
}
