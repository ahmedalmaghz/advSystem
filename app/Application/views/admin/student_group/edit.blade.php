@extends('admin.layout.app')

@section('title')
    {{ adminTrans('student_group' , 'student_group') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component('admin.layout.form' , ['title' => adminTrans('student_group' , 'student_group') , 'model' => 'student_group' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
        @include('admin.layout.messages')
        <form action="{{ concatenateLangToUrl('admin/student_group/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <label for="">{{ adminTrans('student_group' , 'branch') }}</label>
            @php $branchName = isset($item) ? $item->branch_id : null @endphp
            {!! Form::select('branch_id' , $data['branches'] , $branchName , ['class' => 'form-control'] ) !!}

            <label for="">{{ adminTrans('student_group' , 'section') }}</label>
            @php $sectionName = isset($item) ? $item->section_id : null @endphp
            {!! Form::select('section_id' , $data['sections'] , $sectionName , ['class' => 'form-control'] ) !!}

            <label for="">{{ adminTrans('student_group' , 'level') }}</label>
            @php $levelName = isset($item) ? $item->level_id : null @endphp
            {!! Form::select('level_id' , $data['levels'] , $levelName , ['class' => 'form-control'] ) !!}

           {{-- <label for="">{{ adminTrans('student_group' , 'shoab') }}</label>
            @php $shoabName = isset($item) ? $item->shoab_id : null @endphp
            {!! Form::select('shoab_id' , $data['shoabs'] , $shoabName , ['class' => 'form-control'] ) !!}
--}}

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('student_group' , 'student_group') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
