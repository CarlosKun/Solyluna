@extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>CONTACT US</h5>
          </span></center>
          
        </div>
      </div>
    </div>

@stop
@section('form_residencias')


<div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
         <div class="row">
          <div class="card-panel col s12 m12 l9 ">
          <div class="divider"></div>
  <div class="section">
      <blockquote class="grey-text text-darken-4"><h4>Have living related questions?</h4></blockquote><div class="col s12 m5">
        <div class="card-panel white">
         <img src="images/ancianotelefono.jpg" class="responsive-img" width="100%" alt="">
        </div>
      </div>
    <p class="grey-text text-darken-2 " align="justify">At Sol y Luna Exclusive Health Resorts, our goal is to provide a secured and caring environment with a professional trained staff to meet the needs of our residents and their families.
    <br> 
    <br> 
    Please, contact us for information at:  01 800 036 2768 
    <br>
    <br> 
    If you would like to have additional information or questions regarding our services or availability, please use the following Contact Form and you will be contacted by one of ours Health Care Advisors.</p>
        
  </div>
  </div>
  </div>
<div class="divider col s12 m8 l9 "></div>
<!--Section-->
  <div class="section ">

   
 
<!-- Formulario de contact US-->
 
    <div class="row card-panel hoverable col s12 m9 l9">
      <form action="col s12 m9 l9" >
        <div class="row ">

          <div class="input-field col s6 m6 l6">
            <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">First Name</label>
          </div>
          <div class="input-field col s6   m6 l6">
            <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12 input-field">
            <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="validate">
                <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">call</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Telephone</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
          <select>
            <option value="" disabled selected>State</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label for="icon_prefix">Choose State</label>
          </div>
          <div class="input-field col s6 m6 l6">
          <select>
            <option value="" disabled selected>City</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label for="icon_prefix">Choose City</label>
          </div>
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">location_on</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">ZIP Code</label>
          </div>
        </div>
       
   
   
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                <label for="icon_prefix2">Message</label>
          </div>
        </div>
        <div class="row">
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
        </div>
      </form>   

  </div>
  <!--Fin del frm Contat US-->
    </div>
  <!-- Page Layout here -->

  </div>
 
      </div>

    </div>


@stop


@section('piedepagina')
@stop