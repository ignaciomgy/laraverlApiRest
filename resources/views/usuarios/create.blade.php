@extends('layouts.master')
@section('content')


    <h2>Add a game</h2>
 
    <form method="post" action="/api/usuarios" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Nombre</label>
            <div class="col-sm-9">
                <input name="nombre" type="text" class="form-control" id="titleid" placeholder="Game Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input name="mail" type="text" class="form-control" id="publisherid"
                       placeholder="Correo Electronico">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Cargar Usuario</button>
            </div>
        </div>
    </form>
 
@endsection