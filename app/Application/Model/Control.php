<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{

  public $table = "Control";


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
