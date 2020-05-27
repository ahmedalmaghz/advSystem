@extends('admin.layout.app')

@section('title')
     {{ adminTrans('control' , 'control') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('control' , 'control') , 'model' => 'control' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection