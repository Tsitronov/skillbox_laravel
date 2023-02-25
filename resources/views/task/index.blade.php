@extends('layouts.layoute')
<div>
@include('task.tags', ['tags'=>$task->tags])
</div>

@section('content')

<div class="red">{{$task->nome}}</div>
<div class="blue">{{$task->title}}</div>


<div class="red">{{$task->body}} </div>

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

<form method="POST" action="/task/{{$task->id}}/steps">
    @csrf
    <input type="text" value="{{old('description')}}" name="description">
    <button type="submit"> addStep </button>
</form>

@include('layouts.errors')

<a href="/task">return</a>
<a href="/task/{{$task->id}}/edit">edit</a>
@endsection
