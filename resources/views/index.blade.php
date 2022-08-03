@extends('layout.layout')


@section('content')
<div class="d-flex justify-content-center align-items-center" >
  <div style="width: 300px">
    <div id="cvThemes" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="{{ URL("imgs/cv1.png") }}" width="300" class="d-block w-100 img-fluid rounded mx-auto " alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="{{ URL("imgs/cv2.PNG") }}" class="d-block w-100 img-fluid rounded mx-auto " alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ URL("imgs/cv3.PNG") }}" class="d-block w-100 img-fluid rounded mx-auto " alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#cvThemes" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
        <span class="">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#cvThemes" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="false"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
<div class=" d-flex justify-content-center align-items-center mt-2">
  <div class="btn btn-primary">
    <a class="text-white " href="{{ route('cv') }}">Créez votre CV</a> 
  </div>
</div>
<div class=" d-flex justify-content-center align-items-center mt-2">
  <h1>Créez votre CV professionnel</h1>
</div>
<div class=" d-flex justify-content-center align-items-center mt-3">
  <h6 class="h6" style="width: 50%">Remplissez le formulaire, choisissez un modèle et téléchargez votre CV en quelques minutes.</h6>
</div>
@endsection