<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';
    protected $fillable = ['name' , 'slug' , 'description' , 'status' , 'popular' ,'image', 'meta_title' , 'meta_keywords' , 'meta_descrip'];

    public function product(){
        return $this->hasMany(Product::class , 'cate_id' , 'id');
    }


}
