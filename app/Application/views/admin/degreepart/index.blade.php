@extends('admin.layout.app')

@section('title')
     {{ adminTrans('degreepart' , 'degreepart') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('degreepart' , 'degreepart') , 'model' => 'degreepart' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection