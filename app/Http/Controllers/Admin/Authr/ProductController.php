<?php

namespace App\Http\Controllers\admin\Authr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recusive;

class ProductController extends Controller
{
    private $category;

    public function __construct(Category $category){
        $this->category = $category;
    }
    public function index(){
        return view('users/admin/products/listproduct', [
            'title' => 'DANH SÁCH SẢN PHẨM'
        ]);
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
}
