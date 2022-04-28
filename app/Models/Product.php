<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'img', 'category_id'];
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getArticulAttribute(){
        return 'art.#'.$this->attributes['id'];
    }



    public function getImgAttribute(){
        return 'https://images.pexels.com/photos/1704488/pexels-photo-1704488.jpeg?cs=srgb&dl=pexels-suliman-sallehi-1704488.jpg&fm=jpg';
    }

    public function setNewPriceAttribute($value){
        $this->price = 1111;
        //$this->attributes['price'] = (int) ($value*100);
    }
}
