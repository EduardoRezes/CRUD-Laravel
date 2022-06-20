<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar um produto</title>
</head>
<body>
    <!-- Perceba que além de invocar a rota pelo nome, estamos separando 
         com uma vírgula e passando um array com o argumento esperado, o id. -->
    <form action="{{ route('alterar_produto',['id' => $produto->id]) }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
        <label for="">Custo</label> <br />
        <input type="text" name="custo" value="{{ $produto->custo }}"> <br />
        <label for="">Preço</label> <br />
        <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
        <label for="">Qauntidade</label> <br />
        <input type="text" name="quantidade" value="{{ $produto->quantidade }}"> <br /> <br />
        <button>Salvar</button>
    </form>
</body>
</html>