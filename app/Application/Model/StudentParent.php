<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{

  public $table = "StudentParent";


   protected $fillable = [

   ];

   public function validation($id){
        return [
        ];
   }

   public function updateValidation($id){
           return [

           ];
   }

}
