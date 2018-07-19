@extends('layout')

@section('content')
<div class="row">
        <div class="col-lg-12">
            <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="post">
                {{ csrf_field() }} <!-- view page souce and see the magic -->
                <input type="text" class="form-control input-lg" placeholder="Create a new todo" value="{{ $todo->todo }}" name="todo">
                
            </form>    
        </div>
    </div>

    <hr>        

@stop