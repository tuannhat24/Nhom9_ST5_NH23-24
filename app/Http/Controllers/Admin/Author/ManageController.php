<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Components\Recusive;

class ManageController extends Controller
{
    public function index(){
        return view('users/admin/home-category');
    }
}
