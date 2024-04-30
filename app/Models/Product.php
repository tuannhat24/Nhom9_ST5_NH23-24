<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Category::class, 'cate_id');
    }
}
