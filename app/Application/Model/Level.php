<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    public $table = "levels";

    public $timestamps = false;

    protected $fillable = ['name'];

    public function validation($id)
    {
        return [
            'name' => 'required|unique:levels'
        ];
    }

    public function updateValidation($id)
    {
        return [
            'name' => 'required|unique:levels,name,' . $id
        ];
    }

}
