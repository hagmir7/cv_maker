@extends('layout.layout')


@section('content')

<div class="container-xxl mt-2">
    <div class="row">
        <div class="col-6 border">
          <div>
            <p>
                <div class="card" type="button" data-bs-toggle="collapse" data-bs-target="#info">
                    information personnel 
                </div>
              </p>
              <div class="collapse" id="info">
                <div class="card card-body">
                  
                </div>
              </div>
              <div class="card" type="button" data-bs-toggle="collapse" data-bs-target="#ex1" aria-expanded="false" aria-controls="ex1">
                  deplao
              </div>


              <div>
                <p>
                   
                </p>
                  <div class="collapse" id="ex1">
                    <div class="card card-body">
                      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                  </div>
          </div>
        </div>
        <div class="col-6"></div>
    </div>

</div>

@endsection