<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $guarded = [];
    protected $fillable = ['name', 'image', 'status'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
