<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

  public $table = "Area";


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
