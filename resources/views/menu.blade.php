<!-- Single button -->
<div class="row">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Cadastro <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="{{action('CategoriasController@index')}}">Categorias</a></li>
    <li><a href="{{action('CrudController@index')}}">Tarefas</a></li>
    <li><a href="{{action('ProdutosController@index')}}">Produtos</a></li>
   </ul>
</div>
</div>