<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Student_group extends Model
{

    public $table = "student_groups";

   public $timestamps = false;

   protected $fillable = ['branch_id','section_id','level_id'];

   public function validation($id){
        return [
            'branch_id'=>'required',
            'section_id' => 'required',
            'level_id' => 'required'
        ];
   }

   public function updateValidation($id){
           return [
               'branch_id'=>'required',
               'section_id' => 'required',
               'level_id' => 'required'
           ];
   }



    ////////////////////////////////////////////////////////////////////////////////Relations

    public function Branch(){
        return $this->belongsTo(Branch::class);
    }

    public function Section(){
        return $this->belongsTo(Section::class);
    }

    public function Level(){
        return $this->belongsTo(Level::class);
    }

    public function Shoab(){
        return $this->belongsTo(Shoab::class);
    }

}
