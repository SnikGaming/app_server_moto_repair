<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $guarded = [];
    protected $fillable = ['name', 'image', 'description', 'number', 'price', 'like', 'status'];
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
