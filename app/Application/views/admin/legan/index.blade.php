@extends('admin.layout.app')

@section('title')
     {{ adminTrans('legan' , 'legan') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('legan' , 'legan') , 'model' => 'legan' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection