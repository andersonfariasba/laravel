@extends('master')
@section('content')

 <div class="row">
    <h3>Cadastro de Registro</h3>  
 </div>

<div class="row">
  <a href="{{action('CrudController@index')}}" class="btn btn-sm btn-primary"><strong>Listagem Registros</strong></a>
</div>

<br />

<div class="row">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
  <form class="form-horizontal" method="post" action="{{action('CrudController@store')}}">
    {{csrf_field()}}
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">Nome</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" name="titulo" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-1 control-label">Tarefa</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword3" name="texto">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
      <button type="submit" class="btn btn-sm btn-success"><strong>Cadastrar</strong></button>
    </div>
  </div>
</form>
</div>

@endsection