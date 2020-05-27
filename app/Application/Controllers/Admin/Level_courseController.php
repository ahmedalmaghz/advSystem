<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\Level_coursesDataTable;
use App\Application\Model\Course;
use App\Application\Model\Level;
use App\Application\Model\Level_course;
use Yajra\Datatables\Request;
use Alert;

class Level_courseController extends AbstractController
{
    public function __construct(Level_course $model)
    {
        parent::__construct($model);
    }

    public function index(Level_coursesDataTable $dataTable){
        return $dataTable->render('admin.level_course.index');
    }

    public function show($id = null){
        $levels=transformSelect(Level::pluck('name','id')->all());
        $courses=transformSelect(Course::pluck('name','id')->all());
        return $this->createOrEdit('admin.level_course.edit' , $id,['levels'=>$levels,'courses'=>$courses]);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/level_course');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.level_course.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/level_course')->with('sucess' , 'Done Delete level_course From system');
    }
}
