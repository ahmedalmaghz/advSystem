@extends('admin.layout.app')

@section('title')
     {{ adminTrans('branch' , 'branch') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('branch' , 'branch') , 'model' => 'branch' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection