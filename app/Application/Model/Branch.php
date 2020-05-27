<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

  public $table = "branches";

  public $timestamps=false;

  protected $fillable = ['name'];

   public function validation($id){
        return [
            'name'=> 'required|unique:branches'
        ];
   }

   public function updateValidation($id){
           return [
               'name'=> 'required|unique:branches,name,'.$id
           ];
   }

}
