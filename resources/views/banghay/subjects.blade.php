@extends('layouts.layout')

@section('content')

<div class="card-container text-center">

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
  
  <div class="card-item">
    <a href="{{url('/banghay/gradeone')}}" type="button">
      <img src="img/G1.png" alt="">
      <p class="fw-bolder"><span class="code">&lt;</span>
        Grade 1
        <span class="code">&#47;&gt;</span>
      </p>
    </a>
  </div>
  <div class="card-item">
    <a href="{{url('/banghay/gradetwo')}}" type="button">
      <img src="img/G2.jpg" alt="">
      <p class="fw-bolder"><span class="code">&lt;</span>
        Grade 2
        <span class="code">&#47;&gt;</span>
      </p>
    </a>
  </div>
  <div class="card-item">
    <a href="{{url('/banghay/gradethree')}}" type="button">
      <img src="img/G3.jpg" alt="">
      <p class="fw-bolder"><span class="code">&lt;</span>
        Grade 3
        <span class="code">&#47;&gt;</span>
      </p>
    </a>
  </div>

  <div class="card-item">
    <a href="{{url('/banghay/gradefour')}}" type="button">
      <img src="img/G4.jpg" alt="">
      <p class="fw-bolder"><span class="code">&lt;</span>
        Grade 4
        <span class="code">&#47;&gt;</span>
      </p>
    </a>
  </div>
  <div class="card-item">
    <a href="{{url('/banghay/gradefive')}}" type="button">
      <img src="img/G5.jpg" alt="">
      <p class="fw-bolder"><span class="code">&lt;</span>
        Grade 5
        <span class="code">&#47;&gt;</span>
      </p>
    </a>
  </div>
  <div class="card-item">
    <a href="{{url('/banghay/gradesix')}}" type="button">
      <img src="img/G6.jpg" alt="">
      <p class="fw-bolder"><span class="code">&lt;</span>
        Grade 6
        <span class="code">&#47;&gt;</span>
      </p>
    </a>
  </div>
</div>
<div class="share-container">
  <button type="button" name="share-button" id="share-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Share your work</button>
</div>


<!----------------------------------------Pop Up Upload----------------------------------->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Share Your Lesson Plan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <form action="{{url('uploadfile')}}" method="post" enctype="multipart/form-data">
          @csrf
          <fieldset>
            <label for="subject">Select the subject:</label>
            <select title="subject" name="subject" id="subject" class="subject-select form-control">
              <option selected value="Math">
                Math
              </option>
              <option value="English">
                English
              </option>
              <option value="Science">
                Science
              </option>
              <option value="MAPEH">
                MAPEH
              </option>
              <option value="Araling Panlipunan">
                Araling Panlipunan
              </option>
              <option value="ESP">
                ESP
              </option>
              <option value="TLE">
                TLE
              </option>
              <option value="Computer">
                Computer
              </option>
              <option value="Music">
                Music
              </option>
              <option value="Arts">
                Arts
              </option>
              <option value="Physical Education">
                Physical Education
              </option>
              <option value="Health">
                Health
              </option>

            </select>

            <label for="gradelevel">Select the grade level:</label>
            <select name="gradelevel" title="gradelevel" id="gradelevel" class="gradelevel-select form-control">
              <option selected value="Grade 1">
                Grade 1
              </option>
              <option value="Grade 2">
                Grade 2
              </option>
              <option value="Grade 3">
                Grade 3
              </option>
              <option value="Grade 4">
                Grade 4
              </option>
              <option value="Grade 5">
                Grade 5
              </option>
              <option value="Grade 6">
                Grade 6
              </option>
            </select>

          </fieldset>

          <fieldset>
            <label for="name">Write the title:</label>
            <input type="text" name="name" id="name" placeholder="A Detailed Lesson Plan In Math 4" class="form-control @error('name') is-invalid @enderror"/>
            @error('name')
            <div class="invalid-feedback">{{ $message }} </div>
            @enderror
            <label for="file">Choose a pdf file:</label>
            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
            @error('file')
            <div class="invalid-feedback">{{ $message }} </div>
            @enderror
            <input type="submit" value="Upload" id="upload" class="upload">
          </fieldset>

        </form>

      </div>
    </div>
  </div>
</div>
@endsection
