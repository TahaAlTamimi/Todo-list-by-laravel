@extends('layouts.app')

@section('content')
{{--    @include('navbar')--}}
<h1>create Task</h1>
<form method="POST" action="/Task/create">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail1">task</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="task" name="task">
{{--        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="task" name="iscom">--}}
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
