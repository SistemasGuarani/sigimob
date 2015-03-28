{{-- AÇÃO NOVO
  ==================================================
  Esta parcial cria um btn que insere .
  Parametros:
    $url : endereço url
  ==================================================
  Exemplo de uso

    Na na sua view {minha_via}.blade.php dei um include na parcial

    @include('_parciais.acao-novo', ['url' => URL::action('MeuController@create')])

  ==================================================
--}}
<a class="btn btn-success" title='Clique para Criar um novo registro' href="">
  <i class="fa fa-plus"></i> Novo
</a>