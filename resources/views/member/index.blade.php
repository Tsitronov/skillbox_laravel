@extends('layouts.layoute')

@section('content')

<div class="red">{{$member->nome}}</div>
<div class="blue">{{$member->reparto}}</div>
<div class="red">{{$member->panolini}}</div>
<div class="red">{{$member->dentiera}}</div>
<div class="red">{{$member->dieta}}</div>
<div class="red">{{$member->cintura}}</div>
<div class="red">{{$member->malatia}}</div>
<div class="red">{{$member->altro}}</div>

<a href="/member">return</a>

@include('layouts.errors')

<form method="POST" action="/member/{{$member->id}}">
    @csrf
    <input type="text" name="nome" value="{{$member->nome}}" />

    <input type="text" name="reparto" value="{{$member->reparto}}" />

    <input type="text" name="panolini" value="{{$member->panolini}}" />

    <input type="text" name="dentiera" value="{{$member->dentiera}}" />

    <input type="text" name="dieta" value="{{$member->dieta}}" />

    <input type="text" name="cintura" value="{{$member->cintura}}" />

    <input type="text" name="malatia" value="{{$member->malatia}}" />

    <div>
        <textarea style="width:80vw; height: auto" type="text" name="altro"> {{$member->altro}} </textarea> 
    </div>


    <input type="submit" value="update" />
</form>

@endsection
