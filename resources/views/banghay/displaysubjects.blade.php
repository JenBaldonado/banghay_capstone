@extends('layouts.reg')

@section('content')


<div class="modal-body text-center">

  @if($message = Session::get('success'))
  <div class="container mx-3">
    <div class="alert alert-success">{{$message}}</div>
  </div>
  @else
  @error('file')
  <div class="container mx-3">
    <div class="alert alert-danger">{{ $message }}</div>
  </div>
  @enderror
  @error('name')
  <div class="container mx-3">
    <div class="alert alert-danger">{{ $message }}</div>
  </div>
  @enderror
  @endif
  <form class="container" action="{{url('image')}}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="file">Choose an image file:</label>
    <input type="file" name="file" class="upload-file form-control @error('file') is-invalid @enderror">
    @error('file')
    <div class="invalid-feedback">{{ $message }} </div>
    @enderror
    <input type="submit" value="Upload" id="upload" class="upload">

    </fieldset>

  </form>

  @endsection