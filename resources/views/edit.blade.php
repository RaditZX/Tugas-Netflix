@extends('layouts.main')
@section('container')
<br><br><br>
@foreach ($films as $film)

@if ($film->user_id!= auth()->id())
<h1>Error</h1>
@else
<form action="{{ url('film',$film->id)}}" method="POST">
@csrf
@method("PUT")

<div class="form-check">
  <div class="form-group">
    <label for="exampleInputEmail1">FilmName</label>
    <input type="text" class="form-control" name="name" value="{{ $film->Name }}"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Genre</label>
    <input type="text" class="form-control" name="genre"  value="{{ $film->genre }}"id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="text" class="form-control" name="image" value="{{ $film->image }}" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">video</label>
    <input type="text" class="form-control" name="video" value="{{ $film->video }}" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="deskripsi" value="{{ $film->deskripsi }}" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 
  
  
</form>
@endif
@endforeach