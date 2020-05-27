@extends('admin.layout.app')

@section('title')
     {{ adminTrans('area' , 'area') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('area' , 'area') , 'model' => 'area' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection