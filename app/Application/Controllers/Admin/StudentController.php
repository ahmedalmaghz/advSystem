<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\StudentsDataTable;
use App\Application\Model\Student;
use Yajra\Datatables\Request;
use Alert;

class StudentController extends AbstractController
{
    public function __construct(Student $model)
    {
        parent::__construct($model);
    }

    public function index(StudentsDataTable $dataTable){
        return $dataTable->render('admin.student.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.student.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/student');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.student.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/student')->with('sucess' , 'Done Delete student From system');
    }
}
