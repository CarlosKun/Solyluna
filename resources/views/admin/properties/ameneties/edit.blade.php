@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">AMENETIES</a>
@endsection

@section('add')
    <div class="row">

        <div class="row">
            <div class="col s9">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test1">Add Menu</a></li>
                    <li class="tab col s3"><a  href="#test2">Add Drinks</a></li>
                    <li class="tab col s3 "><a href="#test3">Add Activities</a></li>

                </ul>
            </div>

            <div id="test1" class="col l12">
                <div class="col s12 m4 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/chef.jpg') }}" height="180px">
                            <span class="card-title">MENU DEL RESORTS</span>
                        </div>
                        <div class="card-content">
                            <div class="card-action">
                                <a href="admin.ameneties.edit" class="right-align">Add Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="form-group col l6">
                    {!! Form::open(['route' => 'admin.ameneties.update', 'method' => 'PUT', 'files' => 'true', 'class' => 'col s12' ]) !!}
                    {!! Form::hidden('property_id', $properties,  ['class' => 'form-control']) !!}
                    {!! Form::hidden('labelmenu', 'menu',  ['class' => 'form-control']) !!}
                    {!! Form::file('menu', ['class' => 'form-control']) !!}
                    <br>
                    <br>

                    <center> <button type="submit" class="btn waves-effect waves-light">Add</button></center>

                    {!! Form::close() !!}
                    <br>
                </div>
                <br>



            </div>

            <div id="test2" class="col s12"><div class="col s12 m4 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/drinks.jpg') }}" height="180px">
                            <span class="card-title">BEBIDAS DEL RESORTS</span>
                        </div>
                        <div class="card-content">

                            <div class="card-action">
                                <a href="admin.ameneties.edit" class="right-align">Add BEBIDAS</a>
                            </div>
                        </div>
                    </div>

                </div>


                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="form-group col l6">
                    {!! Form::open(['route' => 'admin.ameneties.update', 'method' => 'PUT', 'files' => 'true', 'class' => 'col s12' ]) !!}
                    {!! Form::hidden('property_id', $properties,  ['class' => 'form-control']) !!}
                    {!! Form::hidden('labeldrinks', 'drinks',  ['class' => 'form-control']) !!}
                    {!! Form::file('drinks', ['class' => 'form-control']) !!}
                    <br>
                    <br>

                    <center> <button type="submit" class="btn waves-effect waves-light">Add</button></center>

                    {!! Form::close() !!}
                    <br>
                </div>
                <br>



            </div>
                <br>

            </div>
            <div id="test3" class="col s12"> <div class="col s12 m4 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('images/actividades.jpg') }}" height="180px">
                            <span class="card-title">ACTIVIDADES DEL RESORTS</span>
                        </div>
                        <div class="card-content">

                            <div class="card-action">
                                <a href="admin.ameneties.edit" class="right-align">Add Actividades</a>
                            </div>
                        </div>
                    </div>

                </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="form-group col l6">
                    {!! Form::open(['route' => 'admin.ameneties.update', 'method' => 'PUT', 'files' => 'true', 'class' => 'col s12' ]) !!}
                    {!! Form::hidden('property_id', $properties,  ['class' => 'form-control']) !!}
                    {!! Form::hidden('labelactivities', 'activities',  ['class' => 'form-control']) !!}
                    {!! Form::file('activities', ['class' => 'form-control']) !!}
                    <br>
                    <br>

                    <center> <button type="submit" class="btn waves-effect waves-light">Add</button></center>

                    {!! Form::close() !!}
                    <br>
                </div>
                <br>



            </div>
                <br>
            </div>

        </div>

    </div>

@endsection