@extends('master')

@section('content')

    <div class="row">
        <h3>Listagem de Categorias</h3>
    </div>

    <div class="row">
        <a href="{{action('CategoriasController@create')}}" class="btn btn-sm btn-success">Incluir</a>
    </div>

    <br />
       
    <div class="row">
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>CATEGORIA</td>
                <td colspan="2">OPERAÇÕES</td>
            </tr>
            @foreach($categorias as $post)
            <tr>
                <td>{{$post['id_categoria']}}</td>
                <td>{{$post['descricao']}}</td>
                <td><a href="{{action('CategoriasController@edit',$post['id_categoria'])}}" class="btn btn-sm btn-info">Editar</a></td>
                <td>
                    <form action="{{action('CategoriasController@destroy',$post['id_categoria'])}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>

@endsection