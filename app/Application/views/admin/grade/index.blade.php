@extends('admin.layout.app')

@section('title')
     {{ adminTrans('grade' , 'grade') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('grade' , 'grade') , 'model' => 'grade' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection