<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ControlsDataTable;
use App\Application\Model\Control;
use Yajra\Datatables\Request;
use Alert;

class ControlController extends AbstractController
{
    public function __construct(Control $model)
    {
        parent::__construct($model);
    }

    public function index(ControlsDataTable $dataTable){
        return $dataTable->render('admin.control.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.control.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/control');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.control.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/control')->with('sucess' , 'Done Delete control From system');
    }
}
