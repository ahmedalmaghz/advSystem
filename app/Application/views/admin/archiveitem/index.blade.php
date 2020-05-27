@extends('admin.layout.app')

@section('title')
     {{ adminTrans('archiveitem' , 'archiveitem') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('content')
    @include('admin.layout.table' , ['title' => adminTrans('archiveitem' , 'archiveitem') , 'model' => 'archiveitem' , 'table' => $dataTable->table() ])
@endsection

@section('script')
    {!! $dataTable->scripts() !!}
@endsection