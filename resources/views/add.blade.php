@extends('layouts.main')
@section('container')
<br><br><br><br><br><br>
@foreach ($films as $film)
@endforeach
@if ($film->user_id!= auth()->id())
<h1>error</h1>
@else

<form action="{{ url('film')}}" method="post">

@csrf
<div class="form-check">
  <div class="form-group">
    <label for="exampleInputEmail1">FilmName</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Genre</label>
    <input type="text" class="form-control" name="genre" id="exampleInputPassword1">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="text" class="form-control" name="image" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">video</label>
    <input type="text" class="form-control" name="video" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="deskripsi" id="exampleInputPassword1">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  @endif

</form>


