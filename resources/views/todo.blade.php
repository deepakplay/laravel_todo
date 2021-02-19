@extends('layout.app')

@section('title')
Todo - {{$todo->name}}
@endsection

@section('style')
.todo_container{
    width:300px;
    background-color:#F0F0F0;
    padding:20px 15px 80px;
    border-radius:8px;
    display:flex;
    margin-top:20px;
    flex-direction:column;
    position:relative;
    box-shadow:0 0 10px rgba(0,0,0,.3);
}

.todo_container .todo_head{
	font-size:1.4rem;
    margin-bottom:10px;
}

.btn-grp{
    position:absolute;
    right:10px;
    bottom:10px;
    
}

.btn-grp{
    display:flex;
}

.btn{
    display:inline-block;
    padding:8px 10px;
    color:#FFF;
    margin-left:3px !important;
    font-size:.8rem;
    font-weight:500;
}

.edit{
    background-color:#444;
    border-radius:4px;
}

.edit:hover{
    background-color:#666;
    transition:all .2s ease;
    color:#fff;
}

.delete{
    background-color:#F00;
    border-radius:4px;
}

.delete:hover{
    background-color:#F66;
    transition:all .2s ease;
    color:#fff;
}

@endsection

@section('content')
    <div class="content">
        <div class="todo_container">
        	<h4 class="todo_head">{{$todo->name}}</h4>
        	<div class="todo_content">{{$todo->description}}</div>
            <div class="btn-grp">
                <a class="btn edit" href="{{route('edit', $todo->id)}}">Edit</a>
                <a class="btn delete" href="{{route('delete', $todo->id)}}">Delete</a>
            </div>
        </div>
    </div>
@endsection