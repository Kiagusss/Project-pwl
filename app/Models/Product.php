<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type_id',
        'foto'
    ];

    public function type(){
        return $this->belongsTo(Type::class, 'type_id');
    }
}
