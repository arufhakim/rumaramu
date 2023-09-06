<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable =['nama', 'categories_id', 'deskripsi', 'harga', 'gambar'];
    
    protected function categories(){
        return $this->belongsTo(Category::class, 'categories_id');
    }
}