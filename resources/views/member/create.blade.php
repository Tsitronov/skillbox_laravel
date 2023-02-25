@extends('layouts.layoute')

@section('content')
    Created problem

@include('layouts.errors')

<form method="POST" action="/member">
    @csrf
    <input type="text" name="nome" placeholder="nome" />

    <input type="text" name="reparto" placeholder="Reparto - varalo" />

    <input type="text" name="panolini" value="Panolini - m" />

    <input type="text" name="dentiera" value="Sensa dentiera" />

    <input type="text" name="dieta" value="Dieta libera" />

    <input type="text" name="cintura" value="Sensa cintura" />

    <input type="text" name="malatia" value="Malatia: " />

    <div>
        <textarea style="width:80vw; height: auto" type="text" name="altro">che piace:</textarea> 
    </div>

    <input type="submit" value="create"/>
</form>

@endsection