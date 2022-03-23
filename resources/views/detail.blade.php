@extends('layouts.main')
@section('container')
<br><br><br><br>
<style>
    h1{
        text-align: center;

    }
    img{
        display: block;
    margin-left: auto;
    margin-right: auto;
}
    
</style>
@foreach ($films as $film)
@if ($film->user_id!= auth()->id())
<h1 style="color:white; font-weight: bold; font-size:80px;">{{ $film->Name }}</h1>

<iframe  style="width: 80%; height: 100%; margin:auto; display:block;" src="{{ $film->video }}" frameborder="0" allowfullscreen></iframe>
<p>{{ $film->deskripsi }}</p>
@else
<h1 style="color:white;  font-weight: bold; font-size:80px;">{{ $film->Name }}</h1>
<iframe  style="width: 80%; height: 100%; margin:auto; display:block;" src="{{ $film->video }}" frameborder="0" allowfullscreen></iframe>
<p style="text-align: center">{{ $film->deskripsi }}</p>
<a href="/edit/{{ ($film->id) }}" style="margin-left:190px" class="btn btn-info btn-blue">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </a>

   <a href="/delete/{{ ($film->id) }}" class="btn btn-info btn-danger">
          <span class="glyphicon glyphicon-trash " ></span> Delete
        </a>
<!-- <a href="/edit/{{ ($film->id) }}">Edit</a>
<a href="/delete/{{ ($film->id) }}">Delete</a> -->

@endif


@endforeach
            
