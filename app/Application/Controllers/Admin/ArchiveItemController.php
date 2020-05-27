<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ArchiveItemsDataTable;
use App\Application\Model\ArchiveItem;
use Yajra\Datatables\Request;
use Alert;

class ArchiveItemController extends AbstractController
{
    public function __construct(ArchiveItem $model)
    {
        parent::__construct($model);
    }

    public function index(ArchiveItemsDataTable $dataTable){
        return $dataTable->render('admin.archiveitem.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.archiveitem.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/archiveitem');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.archiveitem.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/archiveitem')->with('sucess' , 'Done Delete archiveitem From system');
    }
}
