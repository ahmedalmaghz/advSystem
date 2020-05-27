<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\AreasDataTable;
use App\Application\Model\Area;
use Yajra\Datatables\Request;
use Alert;

class AreaController extends AbstractController
{
    public function __construct(Area $model)
    {
        parent::__construct($model);
    }

    public function index(AreasDataTable $dataTable){
        return $dataTable->render('admin.area.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.area.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/area');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.area.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/area')->with('sucess' , 'Done Delete area From system');
    }
}
