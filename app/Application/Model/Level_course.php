<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Level_course extends Model
{

  public $table = "level_courses";

   public $timestamps = false;

   protected $fillable = ['course_id','level_id','order','is_sum','is_out','is_grade'];

   public function validation($id){
        return [

        ];
   }

   public function updateValidation($id){
           return [
              // 'name'=> 'required|unique:level_courses,name,'.$id
                 'course_id' => 'required:level_courses,course_id,'.$id
           ];
   }


   ////////////////////////////////////////////////////////////////////////////////Relations
       public function Level(){
           return $this->belongsTo(Level::class);
       }

       public function Course(){
            return $this->belongsTo(Course::class);
        }





    protected $casts = [
        'is_sum' => 'boolean',
        'is_out' => 'boolean',
        'is_grade' => 'boolean',
    ];

    public function getIsSumAttribute($value)
    {
        if($value==true)
            return   $value='CHECKED';
        else
            return   $value='';

    }


    public function getIsOutAttribute($value)
    {
        if($value==true)
             return   $value='CHECKED';
        else
            return   $value='';

    }
    public function getIsGradeAttribute($value)
    {
        if($value==true)
            return  $value='CHECKED';
        else
            return   $value='';
    }


    public function setIsSumAttribute($value)
    {
        switch ($value) {
            case true:
                $this->attributes['is_sum'] = 1;
                break;
            case false:
                $this->attributes['is_sum'] = 0;
                break;
        }
    }

    public function setIsOutAttribute($value)
    {
        if($value=='on')
            $this->attributes['is_out']=1;
        if($value=='off')
            $this->attributes['is_out']=0;
    }
    public function setIsGradeAttribute($value)
    {
        if($value=='on')
            $this->attributes['is_grade']=1;
        if($value=='off')
            $this->attributes['is_grade']=0;
    }



}
