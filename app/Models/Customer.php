<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
    ];

    // Quan hệ với bảng Cart
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function user()
{
    return $this->hasOne(User::class);
}

}