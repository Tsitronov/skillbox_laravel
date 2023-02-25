@extends('layouts.layoute')
<div>
@include('task.tags', ['tags'=>$task->tags])
</div>

@section('content')
    Cambiare problem

@include('layouts.errors')

<form method="POST" action="/task/{{$task->id}}">
    @csrf
    @method('PATCH')
    
    <input type="text" name="nome" value="{{old('nome', $task->nome)}}" />

     <input type="text" name="title" value="{{old('title', $task->title)}}"/>
   
    <div>
        <textarea style="width:80vw; height: auto" type="text" name="body"> {{old('body',$task->body)}} </textarea>
    </div>

    <input type="text" name="tags" value="{{old('tags', $task->tags->pluck('name')->implode(','))}}"/>

    <input type="submit" value="Update"/>
</form>

@if($task->steps->isNotEmpty())
@foreach($task->steps as $step)
    <label class="{{$step->completed ? 'textUnderline' : ''}}"> {{$step->description}} </label>
    <form method="POST" action="/completed-steps/{{$step->id}}">
        @if($step->completed)
            @method('DELETE')
        @endif
        @csrf

        <input type="checkbox" 
        name="completed" 
        onclick="this.form.submit()" 
        {{$step->completed ? 'checked' : ''}}/>
    </form>
    
@endforeach

@endif

<form method="POST" action="/task/{{$task->id}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete"/>
</form>

@endsection