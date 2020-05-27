@extends('admin.layout.app')

@section('title')
     {{ adminTrans('studentparent' , 'studentparent') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('studentparent' , 'studentparent') , 'model' => 'studentparent' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection