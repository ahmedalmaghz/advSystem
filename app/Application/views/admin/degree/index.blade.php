@extends('admin.layout.app')

@section('title')
     {{ adminTrans('degree' , 'degree') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('degree' , 'degree') , 'model' => 'degree' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection