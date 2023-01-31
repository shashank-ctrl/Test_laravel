<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;
    

    protected $fillable = ['project_name','category_selection' ,'platform_selection','pro_img'];



    public function addProduct($input)
    {
     
        return static::create(array_only($input,$this->fillable));
    }


    public function findProduct($id)
    {
        return static::where('id',$id)->first();
    }

    
    public function updateProduct($id, $input)
    {
        return static::where('id',$id)->update(array_only($input,$this->fillable));
    }


    public function deleteProduct($id)
    {
        return static::where('id',$id)->delete();
    }


    public function getProductUsingSlug($slug)
    {
        return static::where('slug',$slug)->first();
    }



    
}



