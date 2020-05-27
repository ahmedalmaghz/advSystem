<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\CoursesDataTable;
use App\Application\Model\Course;
use Yajra\Datatables\Request;
use Alert;

class CourseController extends AbstractController
{
    public function __construct(Course $model)
    {
        parent::__construct($model);
    }

    public function index(CoursesDataTable $dataTable){
        return $dataTable->render('admin.course.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.course.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/course');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.course.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/course')->with('sucess' , 'Done Delete course From system');
    }
}
