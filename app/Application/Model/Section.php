<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

  public $table = "sections";

  public $timestamps = false;

   protected $fillable = ['name'];

   public function validation($id){
        return [
            'name'=> 'required|unique:sections'
        ];
   }

   public function updateValidation($id){
           return [
               'name'=> 'required|unique:sections,name,'.$id
           ];
   }

}
