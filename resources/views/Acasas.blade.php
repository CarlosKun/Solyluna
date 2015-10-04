@extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>ASSISTING LIVING</h5>
          </span></center>
          
        </div>
      </div>
    </div>

@stop
@section('form_residencias')

  <!--Aqui va el contenido de la pagina-->

 <div class="row">


     @foreach($properties as $property)
         @if($property->service_id == 2)
        <div class="col s12 m12 l3">
            <div class="card small hoverable">
              <div class="card-image"  alt="">
                  <a href="casaconchaschinas" class="brand-logo"> <img src="{{ asset('uploads') }}/{{ $property->image }}" height="180px"></a>
                  <a href="casaconchaschinas" class="brand-logo"><span class="card-title ">{{ $property->name }}</span></a>
              </div>
              <div class="card-content">
                  <a href="casaconchaschinas" class="brand-logo">  <p class="grey-text text-darken-2">{{ $property->description }}  </p></a>
<<<<<<< HEAD
              </div>

              <div class="card-action">
                <a href="{{route ('vistas.vistapropiedades',$property->property_id)}}">See more...</a>
              </div>
            </div>
          </div>
         @endif
     @endforeach


=======
              </div>
              <div class="card-action">
                <a href="casa">See more...</a>
              </div>
            </div>
          </div>
         @endif
     @endforeach


>>>>>>> origin/master
  

 </div>




@stop


@section('piepagina')
@stop