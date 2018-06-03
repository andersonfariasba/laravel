@extends('master')
@section('content')

    <div class="row">
        <h3>Cadastrar Categoria</h3>
    </div>
    <br />

    <div class="row">
        <form class="form-horizontal" method="post" action="{{action('CategoriasController@store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-sm-1">Categoria</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="descricao">
                    </div>
            </div>

            <div class="form-group">
                <div class="col-sm-6">
                    <button class="btn btn-sm btn-success">Salvar</button>
                </div>
            </div>

        </form>
    </div>


@endsection

