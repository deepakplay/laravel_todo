@extends('layout.app')

@section('title')
Todo - Deepak
@endsection


@section('style')
.content{
    width:400px; 
}

ul{
    list-style:none;
    background-color:#EFEFEF;
    padding:20px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,.3);
}

.lists li{
    text-align:left;
    border-bottom:1px solid #CCC;
    display:flex;
    justify-content:space-between;
    padding:8px;
    border-radius:5px;
}


.lists li:last-child{
    border-bottom: none;
}

.lists a{
    border-radius:4px;
    margin-left:0px !important;
}

.lists a:hover{
    background-color:#BBB;
    color:#000;
    transition:all .15s ease;
    font-weight:400;
}

.success{
    display:inline-block;
    background-color:#c4fdc4;
    margin-bottom:10px;
    border-radius:5px;
    border:1px solid #3cbb3c;
    padding:8px 15px;
    color: #007300;
}
.todo_complete{
    display:inline-block !important;
}

.todo_view, .todo_complete{
    display:inline-block;
    padding:5px;
    font-size:.8rem;
    color:#FFF; 
}

.todo_view{
    background-color:#3939ff;    
}

.todo_complete{
    background-color:#00bd00;
}
.list_completed{
    background-color:#CFC;
}
@endsection

@section('content')

    <div class="content">
        @if(session()->has('success'))
            <span class="success">{{session()->get('success')}}</span>
        @endif
        <ul class="lists">
            @foreach($todos as $todo)
                <li class="@if($todo->completed) list_completed @endif">
                    {{$todo->name}}
                    <span class="btn-group">
                        <a href="todo/{{$todo->id}}" class="todo_view"  target="__blank ">View</a>
                        @if(!$todo->completed)
                            <a href="complete/{{$todo->id}}" class="todo_complete" target="__blank ">Done</a>
                        @endif
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection