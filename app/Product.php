<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = ['id', 'cate_id', 'name', 'slug', 'price', 'content', 'discount', 'content', 'image', 'title', 'meta_desc', 'meta_key'];
    
    public function cate() {
        return $this->belongsTo('App\Cate');
    }
    
}
