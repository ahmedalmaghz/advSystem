<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ShoabsDataTable;
use App\Application\Model\Shoab;
use Yajra\Datatables\Request;
use Alert;

class ShoabController extends AbstractController
{
    public function __construct(Shoab $model)
    {
        parent::__construct($model);
    }

    public function index(ShoabsDataTable $dataTable){
        return $dataTable->render('admin.shoab.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.shoab.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/shoab');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.shoab.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/shoab')->with('sucess' , 'Done Delete shoab From system');
    }
}
