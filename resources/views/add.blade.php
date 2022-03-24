@extends('layouts.main')
@section('container')
<br><br><br><br><br><br>
@foreach ($films as $film)
@endforeach
@if ($film->user_id!= auth()->id())
<h1>error</h1>
@else

<form action="{{ url('film')}}" method="post" enctype="multipart/form-data">

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
  
  <div class="mb-3">
    <label for="image" class="form-label">Post Image</label>
    <img id="output"src="#"  width="10%" />
    <input class="form-control" type="file" id="image" name="image"  accept="image/*" onchange="loadFile(event)" >
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
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>


