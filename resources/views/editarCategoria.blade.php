@extends('master')
@section('content')

<div class="row">
    <h3>Editar Categoria</h3>
</div>

<div class="row">
   <form class="form-horizontal" method="post" action="{{action('CategoriasController@update',$id_categoria)}}">
       {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH" />
       <div class="form-group">
           <label class="col-sm-1">Descrição</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="descricao" value="{{$categoria->descricao}}" />
                </div>
       </div>

       <div class="form-group">
           <button type="submit" class="btn btn-sm btn-success">Salvar</button>
       </div>

   </form>

</div>

@endsection