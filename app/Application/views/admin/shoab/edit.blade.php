@extends('admin.layout.app')

@section('title')
    {{ adminTrans('shoab' , 'shoab') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component('admin.layout.form' , ['title' => adminTrans('shoab' , 'shoab') , 'model' => 'shoab' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
        @include('admin.layout.messages')
        <form action="{{ concatenateLangToUrl('admin/shoab/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {!! extractFiled('name' , isset($item->name) ? $item->name : null,'text','shoabs') !!}

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('shoab' , 'shoab') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
