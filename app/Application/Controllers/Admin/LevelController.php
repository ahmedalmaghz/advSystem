<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\LevelsDataTable;
use App\Application\Model\Level;
use Yajra\Datatables\Request;
use Alert;

class LevelController extends AbstractController
{
    public function __construct(Level $model)
    {
        parent::__construct($model);
    }

    public function index(LevelsDataTable $dataTable){
        return $dataTable->render('admin.level.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.level.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/level');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.level.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/level')->with('sucess' , 'Done Delete level From system');
    }
}
