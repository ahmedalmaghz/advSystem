@extends('admin.layout.app')

@section('title')
     {{ adminTrans('archive' , 'archive') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('archive' , 'archive') , 'model' => 'archive' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection