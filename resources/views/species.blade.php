@extends('layout')

@section('content')
<h1>{{$heading}}</h1>

@unless(count($species) == 0)
@foreach($species as $specie)
    <h2><a href="/species/{{$specie['id']}}">{{$specie['name']}}</a></h2>
    <p>{{$specie['description']}}</p>
@endforeach

@else
<p>No species found</p>
@endunless

@endsection