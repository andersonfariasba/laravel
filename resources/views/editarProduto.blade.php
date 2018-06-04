@extends('master')
@section('content')

    <div class="row">
        <h3>Editar Produto</h3>
    </div>

    <div class="row">
        <form class="form-horizontal" method="post" action="{{action('ProdutosController@update',$id_produto)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />

            <div class="form-group">
                <label class="col-sm-1">Categoria</label>
                <div class="col-sm-6">
                    <select name="id_categoria" class="form-control">
                        <option value="">Selecione...</option>
                            @foreach($categorias as $objCategoria)
                                <option value="{{$objCategoria->id_categoria}}" {{ $produtos->id_categoria == $objCategoria->id_categoria ? 'selected="selected"' : '' }} >{{$objCategoria->descricao}}</option>
                            @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1">Produto</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="descricao" value="{{$produtos->descricao}}" />    
                    </div>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-sm btn-success">Editar</button>
            </div>


        </form>
    </div>

@endsection