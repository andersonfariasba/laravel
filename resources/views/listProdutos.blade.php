@extends('master')
@section('content')

    <div class="row">
        <h3>Listar Produtos</h3>
    </div>

    <div class="row">
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>CATEGORIA</td>
                <td>PRODUTO</td>
            </tr>
        @foreach($produtos as $post)
            <tr>
                <td>{{$post->id_produto}}</td>
                <td>{{$post->categorias->descricao}}</td>
                <td>{{$post->descricao}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    

@endsection