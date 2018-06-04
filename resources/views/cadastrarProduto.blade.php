@extends('master')
@section('content')

    <div class="row">
        <h3>Cadastrar Produto</h3>
    </div>

    <div class="row">
        <form class="form-horizontal" method="post" action="{{action('ProdutosController@store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-sm-1">Categoria</label>
                    <div class="col-sm-4">
                        <select class="form-control input-sm" name="id_categoria">
                            <option value="">Selecione...</option>
                            @foreach($categorias as $objCategoria)
                                <option value="{{$objCategoria->id_categoria}}">{{$objCategoria->descricao}}</option>
                            @endforeach
                        </select>
                    </div> 
            </div>

            <div class="form-group">
                <label class="col-sm-1">Produto</label>
                <div class="col-sm-4">
                    <input type="text" name="descricao" class="form-control input-sm">
                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-sm btn-success">Salvar</button>
                </div>
            </div>
            

        </form>
    </div>

@endsection