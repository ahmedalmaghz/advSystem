<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class DegreePart extends Model
{

  public $table = "DegreePart";


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
