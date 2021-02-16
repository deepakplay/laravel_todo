@extends('layout.app')

@section('title')
    Create Todo - Deepak
@endsection

@section('style')
    .todo_container{
        max-width:300px;
        background-color:#F0F0F0;
        padding:0px 20px 20px;
        border-radius:8px;
        display:flex;
        margin-top:20px;
        flex-direction:column;
        box-shadow:0 0 10px rgba(0,0,0,.3);
    }

    .todo_container .todo_head{
    	font-size:1.4rem;
    }

    .todo_container>*{
        margin-top:20px;
    }

    .todo_container input, .todo_container textarea{
        padding:8px;
        border:1px solid #AAA;
        font-size:1rem !important;
        border-radius:3px;
        color:#444;
    }

    .todo_container input[type="submit"]{
        margin:20px auto 0;
        background-color:#fff;
    }

    .todo_container input[type="submit"]:hover{
        background-color:#444;
        transition:all .2s ease;
        color:#fff;
    }

    .errorList{
        margin-top:0px; 
    }

    .errorList li{
        color:#F33;
        margin:5px 0;
        padding:5px 0;
        border:1px solid #F66;
        border-radius:4px;
        font-weight:400;
        background-color:#FEE;
    }

    .error{
        border:1px solid #F66 !important;
        box-shadow: 0 0 5px #F66;
    }
}
@endsection

@section('content')
    <div class="content">
            <form method="POST" action="/store" class="todo_container">
                <div class="todo_head">
                    Todo Create                
                </div>
                @if($errors->any())
                    <ul class="errorList">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                @csrf
                <input type="text" name="name" placeholder="Enter the name" class="@error('name') error @enderror"> 
                <textarea rows="4" cols="40" name="description" placeholder="Enter the description" class="@error('description') error @enderror"></textarea>
                <input type="submit" value="Create">
            </form>
    </div>
@endsection