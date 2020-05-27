@extends('admin.layout.app')

@section('title')
     {{ adminTrans('terms' , 'terms') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('terms' , 'terms') , 'model' => 'terms' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection