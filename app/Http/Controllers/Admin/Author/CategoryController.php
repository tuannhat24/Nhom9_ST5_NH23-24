<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recusive;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->latest()->paginate(10);
        return view('users/admin/categories/listcategory', [
            'title' => 'DANH SÁCH CÁC DANH MỤC',
            'categories' => $categories,
        ]);
    }

    public function getCategory($parent_id)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryResusive($parent_id);
        return $htmlOption;
    }


    public function create()
    {
        $htmlOption = $this->getCategory($parentId = " ");
        return view('users/admin/categories/addcategory', [
            'title' => 'THÊM DANH MỤC',
            'option' => $htmlOption
        ]);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataCategoryCreate = [
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'description' => $request->description,
                'slug' => $request->name,
            ];
            $category = $this->category->create($dataCategoryCreate);
            DB::commit();
            return redirect()->route('admin.category.index')->with('success', 'Danh mục đã được thêm thành công.');

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '   Line: ' . $exception->getLine());
        }
    }


    public function edit($id)
    {
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('users/admin/categories/edit', [
            'title' => 'Update Danh Mục',
            'category' => $category,
            'option' => $htmlOption
        ]);
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $dataCategoryCreate = [
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'description' => $request->description,
            ];
            $category = $this->category->find($id)->update($dataCategoryCreate);
            DB::commit();
            return redirect()->route('admin.category.index')->with('success', 'Danh mục đã được update thành công.');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '   Liene: ' . $exception->getLine());
        }
    }
    public function delete($id)
    {
        try{
            $this->category->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'succes'
            ], status: 200);
        }catch (\Exception $exception){
            Log::error('Message: ' . $exception->getMessage() . '   Liene: ' .$exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], status: 500);
        }
    }
}
