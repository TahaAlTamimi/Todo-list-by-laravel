@extends('layouts.app')

@section('content')
<h1>Edit Section</h1>
<form method="POST" action="/Task/{{$task->id}}">
    {{method_field('PATCH')}}
    {{csrf_field()}}
    <div class="form-group">
{{--        <label for="exampleInputEmail1">edit task</label>--}}
        <div class="input-group-prepend">
            <span class="input-group-text">Your Task</span>
        </div>
        <input value="{{$task->task}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="task" name="task">
{{--        <input value="{{$task->isComplated}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="task" name="iscom">--}}


                <select name="isComplated" style="width:302px;height:42px;">
                    @if($task['isComplated']===0)
                    <option class="bg-danger text-white" style="width:302px;height:42px;" value="0" selected> not complated</option>
                    <option value="1"  style="width:302px;height:42px;"  class="bg-success text-white"> complated</option>
                    @else
                        <option class="bg-danger text-white" value="0" style="width:302px;height:42px;"> not complated</option>
                        <option value="1"  class="bg-success text-white" style="width:302px;height:42px;" selected> complated</option>
                    @endif
                </select>


    </div>

    <button type="submit" class="btn btn-primary">update</button>

@endsection
