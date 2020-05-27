<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\SectionsDataTable;
use App\Application\Model\Section;
use Yajra\Datatables\Request;
use Alert;

class SectionController extends AbstractController
{
    public function __construct(Section $model)
    {
        parent::__construct($model);
    }

    public function index(SectionsDataTable $dataTable){
        return $dataTable->render('admin.section.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.section.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/section');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.section.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/section')->with('sucess' , 'Done Delete section From system');
    }
}
