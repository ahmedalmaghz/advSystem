<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{

  public $table = "Grade";


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
