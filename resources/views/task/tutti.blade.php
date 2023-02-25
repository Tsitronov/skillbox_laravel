@extends('layouts.layoute')


@section('content')
<a href="/task/create">create</a>

@foreach($task as $t)
	<li> {{$t->nome . ' - ' . $t->title. ' - ' . $t->body}}  <a href="/task/{{$t->id}}">cambiare </a> </li>
	<p  style="border-bottom:blue solid 1px;">  </p>
	
@endforeach


@endsection
