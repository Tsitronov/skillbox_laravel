@if($errors->count())
    @foreach($errors->all() as $error)
        <li> {{$error}} </li>
    @endforeach    
@endif