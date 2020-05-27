<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

  public $table = "Student";


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
