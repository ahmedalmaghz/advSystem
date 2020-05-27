<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\Student_groupsDataTable;
use App\Application\Model\Branch;
use App\Application\Model\Level;
use App\Application\Model\Section;
use App\Application\Model\Shoab;
use App\Application\Model\Student_group;
use Yajra\Datatables\Request;
use Alert;

class Student_groupController extends AbstractController
{
    public function __construct(Student_group $model)
    {
        parent::__construct($model);
    }

    public function index(Student_groupsDataTable $dataTable){
        return $dataTable->render('admin.student_group.index');
    }

    public function show($id = null){
        $branch=transformSelect(Branch::pluck('name','id')->all());
        $section=transformSelect(Section::pluck('name','id')->all());
        $level=transformSelect(Level::pluck('name','id')->all());
        $shoab=transformSelect(Shoab::pluck('name','id')->all());
        return $this->createOrEdit('admin.student_group.edit' , $id,['branches'=>$branch,'sections'=>$section,'levels'=>$level,'shoabs'=>$shoab]);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/student_group');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.student_group.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/student_group')->with('sucess' , 'Done Delete student_group From system');
    }
}
