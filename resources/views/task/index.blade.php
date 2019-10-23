@extends('layouts.app')

@section('content')
    {{--   @include('.layouts.navbar')--}}
    <h1>Your Tasks</h1>


@if(count($tasks)>0)
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th scope="col">Is Complate</th>
            <th scope="col">Created At</th>
        </tr>
        </thead>
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <th scope="row"></th>--}}
{{--            <td>Mark</td>--}}
{{--            <td>Otto</td>--}}
{{--            <td>@mdo</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}

        <?php  $i=0?>
@foreach($tasks as $task)


            <tbody>
<tr >
    <th scope="row">  <?php  echo $i=$i+1; ?></th>

    <td>{{$task->task}}</td>
    <td>
        @if($task['isComplated']===0)
            <h5 class="p-2 mb-2 bg-danger text-white">not Compated</h5>
        @else
            <h5 class="p-2 mb-2 bg-success text-white">complated</h5>
        @endif
    </td>

    <td>
        <p>written on {{$task->created_at}}</p>
    </td>

    <td>
        <form METHOD="post"   action="/Task/{{$task->id}}">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button class="btn btn-danger">delete</button>
        </form>
    </td>
    <td>
        <form action="/Task/{{$task->id}}/edit" method="get">
            <button class="btn btn-info" >edit</button>
        </form>

    </td>
</tr>
            </tbody>



{{--        {{$task->isComplated}}--}}








</div>
@endforeach
    @else

<h1 class="p-3 mb-2 bg-success text-white">Great Job </h1>
            <form action="/Task/create" > <button class="btn btn-primary">  Make New Task</button> </form>
    @endif


@endsection
