<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ArchivesDataTable;
use App\Application\Model\Archive;
use Yajra\Datatables\Request;
use Alert;

class ArchiveController extends AbstractController
{
    public function __construct(Archive $model)
    {
        parent::__construct($model);
    }

    public function index(ArchivesDataTable $dataTable){
        return $dataTable->render('admin.archive.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.archive.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/archive');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.archive.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/archive')->with('sucess' , 'Done Delete archive From system');
    }
}
