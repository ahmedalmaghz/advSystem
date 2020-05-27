@extends('admin.layout.app')

@section('title')
     {{ adminTrans('section' , 'section') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('section' , 'section') , 'model' => 'section' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection