@extends('admin.layout.app')

@section('title')
     {{ adminTrans('shoab' , 'shoab') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('shoab' , 'shoab') , 'model' => 'shoab' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection