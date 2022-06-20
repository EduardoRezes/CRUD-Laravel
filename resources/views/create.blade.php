<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo produto</title>
</head>
<body>
    <!-- Aqui temos o mustaches, que se trata de um codigo PHP e os arquivos blade.php entende 
         que é um codigo PHP dentro de um HTML -->
    <form action="{{ route('registrar_produto') }}" method="post">
        <!-- Para impedir que sejam enviadas informações de outros lugares que não sejam a nossa 
        aplicação o Laravel, por padrão, verifica se o formulário enviado possui um token único e 
        temporário. Para gerar esse token basta adicionar, entre as tags de formulários, o 
        componente @csrf. Mais uma vez estamos trabalhando com a magia dos arquivos blade, 
        que nos permite invocar componentes e escrever códigos PHP utilizando o @. -->
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome"> <br />
        <label for="">Custo</label> <br />
        <input type="text" name="custo"> <br />
        <label for="">Preço</label> <br />
        <input type="text" name="preco"> <br />
        <label for="">Qauntidade</label> <br />
        <input type="text" name="quantidade"> <br /> <br />
        <button>Salvar</button>
    </form>
</body>
</html>