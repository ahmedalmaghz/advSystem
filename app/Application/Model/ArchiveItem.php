<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class ArchiveItem extends Model
{

  public $table = "ArchiveItem";


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
