<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'harga',
        'jeniskelamin',
        'foto',
        'product_1',
        'product_2',
        'product_3',
        'rating_id',
    ];

    public function rating(){
        return $this->belongsTo(Rating::class, 'rating_id', 'id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'product_1');
    }
}
