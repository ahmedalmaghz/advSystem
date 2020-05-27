<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Shoab extends Model
{

  public $table = "shoabs";

  public $timestamps = false;

   protected $fillable = ['name'];

   public function validation($id){
        return [
            'name'=> 'required|unique:shoabs'
        ];
   }

   public function updateValidation($id){
           return [
               'name'=> 'required|unique:shoabs,name,'.$id
           ];
   }

}
