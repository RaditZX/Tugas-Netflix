@extends('layouts.main')
@section('container')
<br><br><br>
<form action="{{ url('film')}}" method="post">

@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">FilmName</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Genre</label>
    <input type="text" class="form-control" name="genre" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="text" class="form-control" name="image" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="deskripsi" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>