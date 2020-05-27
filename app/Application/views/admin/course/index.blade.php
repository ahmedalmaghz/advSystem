@extends('admin.layout.app')

@section('title')
     {{ adminTrans('course' , 'course') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('course' , 'course') , 'model' => 'course' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection