<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{

  public $table = "Degree";


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
