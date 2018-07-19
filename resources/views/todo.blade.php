@extends('layout')

@section('content')

    <div class="row">
        <div class="input">
            <form action="/create/todo" method="post">
                {{ csrf_field() }} <!-- view page souce and see the magic -->
                <input type="text" class="form-control input-lg" placeholder="Create a new todo" name="todo">
                
            </form>    
        </div>
    </div>

    <hr>        
    
    <div class="list">
        @foreach($todosMonkeyFace as $todo)
        <div class="container">
            <div class="todos">
                @if(!$todo->completed)
                <span class="todo">{{ $todo->todo }}</span>
                @else
                <span style= "text-decoration:line-through;">{{ $todo->todo }}</span>
                @endif
            </div>

            <div class="buttons">   
                <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger"> x </a> <!-- first p is the name of the route, second is what p we are passing through, in this case the id. -->
                <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs"> Update </a>
                @if(!$todo->completed)
                <a href="{{ route('todo.completed', ['id' => $todo->id ]) }}" class="btn btn-xs btn-success"> Mark as completed </a>
                @else
                <span class="text-success">Completed!</span>       
                @endif    
           
            </div>
               
         </div> 

        @endforeach
    </div>    
      

@stop   

