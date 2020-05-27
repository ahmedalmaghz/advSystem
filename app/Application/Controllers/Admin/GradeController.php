<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\GradesDataTable;
use App\Application\Model\Grade;
use Yajra\Datatables\Request;
use Alert;

class GradeController extends AbstractController
{
    public function __construct(Grade $model)
    {
        parent::__construct($model);
    }

    public function index(GradesDataTable $dataTable){
        return $dataTable->render('admin.grade.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.grade.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/grade');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.grade.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/grade')->with('sucess' , 'Done Delete grade From system');
    }
}
