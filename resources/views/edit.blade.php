@extends('master')

@section('content')

  <div class="row">
    <h3>Editar Registro</h3>  
 </div>

 <div class="row">
  <a href="{{action('CrudController@index')}}" class="btn btn-sm btn-primary"><strong>Listagem Registros</strong></a>
   <a href="{{action('CrudController@create')}}" class="btn btn-sm btn-success"><strong>Novo Registro</strong></a>
</div>

<br />

  <div class="row">
 
  <form class="form-horizontal" method="post" action="{{action('CrudController@update', $id)}}">
    {{csrf_field()}}
     <input name="_method" type="hidden" value="PATCH">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">Nome</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" name="titulo" value="{{$crud->titulo}}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-1 control-label">Tarefa</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword3" name="texto" value="{{$crud->texto}}">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
      <button type="submit" class="btn btn-sm btn-success"><strong>Editar</strong></button>
    </div>
  </div>
</form>
</div>
@endsection