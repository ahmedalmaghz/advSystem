@extends('admin.layout.app')

@section('title')
     {{ adminTrans('bus' , 'bus') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('bus' , 'bus') , 'model' => 'bus' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection