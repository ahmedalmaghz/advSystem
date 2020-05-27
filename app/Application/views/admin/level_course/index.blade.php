@extends('admin.layout.app')

@section('title')
     {{ adminTrans('level_course' , 'level_course') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('level_course' , 'level_course') , 'model' => 'level_course' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection