@extends('admin.layout.app')

@section('title')
    {{ adminTrans('level_course' , 'level_course') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component('admin.layout.form' , ['title' => adminTrans('level_course' , 'level_course') , 'model' => 'level_course' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
        @include('admin.layout.messages')
        <form action="{{ concatenateLangToUrl('admin/level_course/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <label for="">{{ adminTrans('level_course' , 'level') }}</label>
            @php $levelName = isset($item) ? $item->level_id : null @endphp
            {!! Form::select('level_id' , $data['levels'] , $levelName , ['class' => 'form-control'] ) !!}

            <label for="">{{ adminTrans('level_course' , 'course') }}</label>
            @php $courseName = isset($item) ? $item->course_id : null @endphp
            {!! Form::select('course_id' , $data['courses'] , $courseName , ['class' => 'form-control'] ) !!}

            <label for="">{{ adminTrans('level_course' , 'order') }}</label>
            {{--{!! extractFiled('order' , isset($item->order) ? $item->order : null,'text','level_course') !!}--}}
            @php $orderNo = isset($item) ? $item->order : 1 @endphp
            {!! Form::number('order' , $orderNo , ['class' => 'form-control'] ) !!}

              <br>
            <div class="form-group">

            <label class="checkbox-inline">
                @php $isSum = isset($item) ? $item->is_sum : null @endphp
                <input type="checkbox"  name="is_sum" {{$isSum}} >{{ adminTrans('level_course' , 'is_sum') }}
            </label>
            </div>
            <div class="form-group">
            <label class="checkbox-inline">
                @php $isOut = isset($item) ? $item->is_out : null @endphp
                <input type="checkbox" name="is_out" {{$isOut}}>{{ adminTrans('level_course' , 'is_out') }}
            </label>
            </div>
            <div class="form-group">
            <label class="checkbox-inline">
                @php $isGrade = isset($item) ? $item->is_grade : null @endphp
                <input type="checkbox"  name="is_grade" {{$isGrade}}>{{ adminTrans('level_course' , 'is_grade') }}
            </label>
            </div>





            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('level_course' , 'level_course') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection

@section('script')
    <script type="application/javascript">
      $("[name='is_sum']").bootstrapSwitch();
      $("[name='is_out']").bootstrapSwitch();
      $("[name='is_grade']").bootstrapSwitch();
    </script>

    @stop
