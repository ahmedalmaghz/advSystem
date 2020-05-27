<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{

  public $table = "Archive";


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
