@extends('admin.layout.app')

@section('title')
    {{ adminTrans('shoab' , 'shoab') }} {{ adminTrans('home' , 'view') }}
@endsection

@section('content')
    @component('admin.layout.form' , ['title' => adminTrans('shoab' , 'shoab') , 'model' => 'shoab' , 'action' => adminTrans('home' , 'view')  ])

        <table class="table table-bordered table-responsive table-striped">
            @php
                $fields = rename_keys(
                     removeFromArray($data['fields'] , ['id']) ,
                     ['UserName']
                );
            @endphp
                 @foreach($fields as $key =>  $field)
                        <tr>
                            <th>{{ $key }}</th>
                            @php $type =  getFileType($field , $item[$field]) @endphp
                            @if($type == 'File')
                                <td> <a href="{{ url(env('UPLOAD_PATH').'/'.$item[$field]) }}">{{ $item[$field] }}</a></td>
                            @elseif($type == 'Image')
                                <td> <img src="{{ url(env('UPLOAD_PATH').'/'.$item[$field]) }}" /></td>
                            @else
                                 <td>{!!  nl2br($item[$field])  !!}</td>
                            @endif
                        </tr>
                    @endforeach
        </table>

        @include('admin.shoab.buttons.delete' , ['id' => $item->id])
        @include('admin.shoab.buttons.edit' , ['id' => $item->id])

    @endcomponent
@endsection
