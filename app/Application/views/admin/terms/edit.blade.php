@extends('admin.layout.app')

@section('title')
    {{ adminTrans('terms' , 'terms') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component('admin.layout.form' , ['title' => adminTrans('terms' , 'terms') , 'model' => 'terms' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
        @include('admin.layout.messages')
        <form action="{{ concatenateLangToUrl('admin/terms/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {!! extractFiled('name' , isset($item->name) ? $item->name : null) !!}

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('terms' , 'terms') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
