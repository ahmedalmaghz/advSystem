<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\LegansDataTable;
use App\Application\Model\Legan;
use Yajra\Datatables\Request;
use Alert;

class LeganController extends AbstractController
{
    public function __construct(Legan $model)
    {
        parent::__construct($model);
    }

    public function index(LegansDataTable $dataTable){
        return $dataTable->render('admin.legan.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.legan.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/legan');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.legan.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/legan')->with('sucess' , 'Done Delete legan From system');
    }
}
