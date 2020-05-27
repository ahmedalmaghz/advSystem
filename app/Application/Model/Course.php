<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

  public $table = "courses";

  public $timestamps=false;

  protected $fillable = ['name'];

   public function validation($id){
        return [
            'name'=> 'required|unique:courses'
        ];
   }

   public function updateValidation($id){
           return [
               'name'=> 'required|unique:courses,name,'.$id
           ];
   }

}
