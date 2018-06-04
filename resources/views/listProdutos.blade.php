@extends('master')
@section('content')

    <div class="row">
        <h3>Listar Produtos</h3>
    </div>

    <div class="row">
        <a href="{{action('ProdutosController@create')}}" class="btn btn-sm btn-success">Incluir</a>
    </div>
    <br />

    <div class="row">
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>PRODUTO</td>
                <td>CATEGORIA</td>
                <td>OPERAÇÕES</td>
            </tr>
        @foreach($produtos as $post)
            <tr>
                <td>{{$post->id_produto}}</td>
                 <td>{{$post->descricao}}</td>
                <td>{{$post->categorias->descricao}}</td>
                <td><a href="{{action('ProdutosController@edit',$post->id_produto)}}" class="btn btn-sm btn-primary">Editar</a></td>
            </tr>
        @endforeach
        </table>
    </div>
    

@endsection