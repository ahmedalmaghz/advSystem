@extends('admin.layout.app')

@section('title')
     {{ adminTrans('student_group' , 'student_group') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('student_group' , 'student_group') , 'model' => 'student_group' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection