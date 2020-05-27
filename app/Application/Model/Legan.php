<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Legan extends Model
{

  public $table = "Legan";


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
