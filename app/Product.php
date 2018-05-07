<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['title', 'slug', 'image', 'imagemedium', 'imagethumb', 'hotelinfo', 'roominfo', 'location', 'category', 'price', 'description', 'user_id', 'workflow_id', 'lat', 'lng', 'created_at', 'updated_at'];


    public function cat()
    {
        return $this->belongsTo('App\Category', 'category');
    }

    public function images()
    {
        return $this->belongsTo('App\Sliders', 'id', 'product_id');
    }

}
