<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\TermssDataTable;
use App\Application\Model\Terms;
use Yajra\Datatables\Request;
use Alert;

class TermsController extends AbstractController
{
    public function __construct(Terms $model)
    {
        parent::__construct($model);
    }

    public function index(TermssDataTable $dataTable){
        return $dataTable->render('admin.terms.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.terms.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/terms');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.terms.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/terms')->with('sucess' , 'Done Delete terms From system');
    }
}
