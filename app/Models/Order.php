<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'note', 'name', 'ship',
        'status',
        'quantity', 'payment',
        'price',
        'booking_date',
        'delivery_date',
    ];
    public function product()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
