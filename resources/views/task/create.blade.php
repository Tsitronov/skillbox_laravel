@extends('layouts.layoute')

@section('content')
    Created problem

@include('layouts.errors')

<form method="POST" action="/task">
    @csrf
    <input type="text" name="nome" placeholder="nome di problema"/>

     <input type="text" name="title" placeholder="title"/>
     
    <div>
        <textarea style="width:80vw; height: auto" type="text" name="body">  </textarea> 
    </div>

    <input type="submit" value="create"/>
</form>

@endsection