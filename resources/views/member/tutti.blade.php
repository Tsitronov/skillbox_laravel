@extends('layouts/layoute')

@section('content')
<a href="/member/create">create </a>
<a href="/varalo">varalo </a>
<a href="/mongrando">mongrando </a>

@foreach($member as $t)
	<li> <b class="green"> {{$t->nome}}</b>{{' . ' . $t->reparto . ' . ' . $t->panolini . ' . ' . $t->dentiera . ' . ' . $t->dieta . ' . ' . $t->cintura . ' . ' . $t->malatia . ' . ' . $t->altro}}  <a href="/member/{{$t->nome}}">cambiare </a> <a href="/memberdestroy/{{$t->id}}">destroy </a> </li> 
	<p  style="border-bottom:blue solid 1px;">  </p>
	
@endforeach

@endsection
