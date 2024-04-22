<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recusive;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category){
        $this->category = $category;
    }

    public function create(){
        $htmlOption = $this->getCategory($parentId = " ");
        return view('users/admin/categories/addcategory', [
            'title' => 'ADD CATEGORY',
            'option' => $htmlOption
        ]);
    }

    public function index(){
        $categories = $this->category->latest()->paginate(5);
        return view('users/admin/categories/listcategory', [
            'title' => 'List Category',
            'categories' => $categories
        ]);
    }

    public function store(Request $request){
        $this->category->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'description' => $request->description,
            'slug' => $request->name,
        ]);

        return redirect()->route('admin.category.index');
    }
    
    public function getCategory($parent_id){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryResusive($parent_id);
        return $htmlOption;
    }
    public function edit($id){
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('users/admin/categories/edit', [
            'title' => 'Edit category',
            'category' => $category,
            'option' => $htmlOption
        ]);
    }

    public function update($id, Request $request){
        $this->category->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'description' => $request->description,
            'slug' => $request->name,
        ]);
        return redirect()->route('admin.category.index');
    }
    public function delete($id){
        $this->category->find($id)->delete();
        return redirect()->route('admin.category.index');
    }
}
