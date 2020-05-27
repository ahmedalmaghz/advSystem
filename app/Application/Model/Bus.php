<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{

  public $table = "Bus";


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
