@extends('admin.layout.app')

@section('title')
     {{ adminTrans('student' , 'student') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('student' , 'student') , 'model' => 'student' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection