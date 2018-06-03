<!-- index.blade.php -->
@extends('master')
@section('content')
  
    <div class="row">
    <h3>Listagem de Registro</h3>  
    </div>
      
      <div class="row">
        <br />
      
        <form action="{{action('CrudController@index')}}" method="GET"  class="form-inline" role="search">                 
          
          <div class="form-group">
          <label for="exampleInputEmail2">ID</label>
          <input type="text" name="id"  class="form-control input-sm">
          </div>
          
          <button type="submit" class="btn btn-sm btn-primary"><strong>Pesquisar</strong></button>
        </form>
          
      </div>

      <br />

      <div class="row">  
        <a href="{{action('CrudController@create')}}" class="btn btn-success btn-sm"><strong>Incluir</strong></a>
     </div>

       
     <div class="row">     
      <table class="table table-striped" width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>TAREFA</th>
          <th align="rigth" colspan="3">AÇÕES</th>
        </tr>
      </thead>
      <tbody>
        @foreach($crud as $post)
        <tr>
          <td>{{$post['id']}}</td>
          <td>{{$post['titulo']}}</td>
          <td>{{$post['texto']}}</td>
          <td><a href="{{action('CrudController@edit', $post['id'])}}" class="btn btn-sm btn-primary"><strong>Editar</strong></a></td>
          <td>
              <form action="{{action('CrudController@destroy', $post['id'])}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-sm btn-danger" type="submit"><strong>Excluir</strong></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $crud->links() }}
    </div>
 
@endsection