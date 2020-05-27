<?php

namespace App\Application\Controllers\Admin;

use App\Application\Controllers\AbstractController;
use App\Application\DataTables\DegreePartsDataTable;
use App\Application\Model\DegreePart;
use Yajra\Datatables\Request;
use Alert;

class DegreePartController extends AbstractController
{
    public function __construct(DegreePart $model)
    {
        parent::__construct($model);
    }

    public function index(DegreePartsDataTable $dataTable){
        return $dataTable->render('admin.degreepart.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.degreepart.edit' , $id);
    }

    public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/degreepart');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.degreepart.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/degreepart')->with('sucess' , 'Done Delete degreepart From system');
    }
}
