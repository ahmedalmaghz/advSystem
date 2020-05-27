<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\StudentParentsDataTable;
use App\Application\Model\StudentParent;
use Yajra\Datatables\Request;
use Alert;

class StudentParentController extends AbstractController
{
    public function __construct(StudentParent $model)
    {
        parent::__construct($model);
    }

    public function index(StudentParentsDataTable $dataTable){
        return $dataTable->render('admin.studentparent.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.studentparent.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/studentparent');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.studentparent.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/studentparent')->with('sucess' , 'Done Delete studentparent From system');
    }
}
