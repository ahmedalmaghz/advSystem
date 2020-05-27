<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\BranchsDataTable;
use App\Application\Model\Branch;
use Yajra\Datatables\Request;
use Alert;

class BranchController extends AbstractController
{
    public function __construct(Branch $model)
    {
        parent::__construct($model);
    }

    public function index(BranchsDataTable $dataTable){
        return $dataTable->render('admin.branch.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.branch.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/branch');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.branch.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/branch')->with('sucess' , 'Done Delete branch From system');
    }
}
