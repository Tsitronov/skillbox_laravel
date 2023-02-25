@php
    $tags = $tags ?? collect();
@endphp

@if($tags->isNotEmpty())
@foreach($tags as $tag)
    <a href="/task/tags/{{$tag->getRouteKey()}}" class="red">{{$tag->name}}</a>  
@endforeach
@endif