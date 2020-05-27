@extends('admin.layout.app')

@section('title')
     {{ adminTrans('level' , 'level') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('level' , 'level') , 'model' => 'level' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection