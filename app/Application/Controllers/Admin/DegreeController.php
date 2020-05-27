<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\DegreesDataTable;
use App\Application\Model\Degree;
use Yajra\Datatables\Request;
use Alert;

class DegreeController extends AbstractController
{
    public function __construct(Degree $model)
    {
        parent::__construct($model);
    }

    public function index(DegreesDataTable $dataTable){
        return $dataTable->render('admin.degree.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.degree.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/degree');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.degree.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/degree')->with('sucess' , 'Done Delete degree From system');
    }
}
