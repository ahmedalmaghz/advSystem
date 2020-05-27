<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{

  public $table = "Terms";


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
