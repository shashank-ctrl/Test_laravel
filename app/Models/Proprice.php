<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Proprice extends Model
{
    use HasFactory;
    

    protected $fillable = ['part_type','part_description' ,'product_info','color','quantity','part_number','single_product','bulk_product'];



    public function addProprice($input)
    {
     
        return static::create(array_only($input,$this->fillable));
    }


    public function findProprice($id)
    {
        return static::where('id',$id)->first();
    }

    
    public function updateProprice($id, $input)
    {
        return static::where('id',$id)->update(array_only($input,$this->fillable));
    }


    public function deleteProprice($id)
    {
        return static::where('id',$id)->delete();
    }


    public function getPropriceUsingSlug($slug)
    {
        return static::where('slug',$slug)->first();
    }



    
}



