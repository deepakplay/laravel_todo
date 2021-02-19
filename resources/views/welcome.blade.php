@extends('layout.app')

@section('title')
Todo - Deepak
@endsection


@section('style')
    .content{
        width:400px; 
    }

    .lists{
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
        color:#FFF !important; 
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

    .pagination{
        display:flex;
        flex-direction:row;
        justify-content:center;
        margin-top:10px;
    }

    .pagination li{
        margin:0 4px;
        padding:0px;
        overflow:hidden;
        border:none;
    }

    .pagination li a, .pagination li.active{
        padding:0px;
        border:1px solid #ccc;
        padding:5px 10px;
    }

    .pagination li.disabled{
        display:none;
    }

    .pagination li.active{
        background-color:#317aff;
        color:#FFF;
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
                        <a href="{{route('get', $todo->id)}}" class="todo_view">View</a>
                        @if(!$todo->completed)
                            <a href="{{route('complete', $todo->id)}}" class="todo_complete">Done</a>
                        @endif
                    </span>
                </li>
            @endforeach
            <span>{{$todos->onEachSide(0)->links()}}</span>
        </ul>        
    </div>
@endsection