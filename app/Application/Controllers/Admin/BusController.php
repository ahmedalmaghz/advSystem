<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\BussDataTable;
use App\Application\Model\Bus;
use Yajra\Datatables\Request;
use Alert;

class BusController extends AbstractController
{
    public function __construct(Bus $model)
    {
        parent::__construct($model);
    }

    public function index(BussDataTable $dataTable){
        return $dataTable->render('admin.bus.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.bus.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/bus');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.bus.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/bus')->with('sucess' , 'Done Delete bus From system');
    }
}
