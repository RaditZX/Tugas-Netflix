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
<h1 style="color:white; font-weight:bold; font-size:50px; ">{{ $film->Name }}</h1>
<iframe  style="width: 80%; height: 100%; margin:auto; display:block;" src="{{ $film->video }}" frameborder="0" allowfullscreen></iframe>
<h1 style="text-align:justify; padding-left:200px; padding-right:200px; padding-bottom:50px;" >{{ $film->deskripsi }}</h1>
@else
<h1 style="color:white; font-weight:bold; font-size:50px; ">{{ $film->Name }}</h1>
<iframe  style="width: 80%; height: 100%; margin:auto; display:block;" src="{{ $film->video }}" frameborder="0" allowfullscreen></iframe>
<h1 style="text-align:justify; padding-left:200px; padding-right:200px; padding-bottom:50px;" >{{ $film->deskripsi }}</h1>
<a href="/edit/{{ ($film->id) }}" style="margin-left:190px;" class="btn btn-info btn-blue">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </a>

   <a href="/delete/{{ ($film->id) }}" class="btn btn-info btn-danger">
          <span class="glyphicon glyphicon-trash " ></span> Delete
        </a>
   

@endif


@endforeach
            
