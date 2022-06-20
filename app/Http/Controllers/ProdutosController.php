<?php

namespace App\Http\Controllers;

/**
 * Essa classe Request administra e armazena as requisições HTTP básicas, ou seja, 
 * todo formulário enviado deve passar por essa classe, a princípio (em um outro artigo nos aprofundaremos mais neste assunto).
 */

use App\Models\Produto;
use Illuminate\Http\Request;

/**
 * Controler de Produtos
 * @Autor: Eduardo Rezes 
 */
class ProdutosController extends Controller
{
    /**
     * Method Cread
     */
    public function create(){
        /**
         * Perceba que eu não usou a barra (/) para dizer que estou em um subdiretório, 
         * no lugar dela usamos o ponto. 
         * Outro fato que merece atenção é que não precisamos informar a extensão .blade.php pois o Laravel,
         * por padrão, já busca arquivos desse tipo.
         */
        return view('create');
    }

    public function store(Request $request) {
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return "Produto cadastrado com sucesso!";
    }

    public function show($id) {
        /**Perceba que a função show() tem o argumento $id, que será obtido através da nossa rota recém criada. 
         * Com esse id em mãos conseguimos usar uma outra função da model que é a findOrFail(), que recebe o id 
         * como argumento e o usa para tentar encontrar o registro na tabela, e caso não encontre, exibe uma erro. 
         * Com nosso produto devidamente encontrado, o resgatamos na variável $produto, e em seguida retornamos uma view, 
         * só que dessa vez com um array contendo o produto encontrado. 
         * */ 
        $produto = Produto::findOrFail($id);
        return view('show', ['produto' => $produto]);
    }

    public function edit($id) {
        $produto = Produto::findOrFail($id);
        return view('edit', ['produto' => $produto]);
    }

    public function update($id, Request $request) {
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Produto alterado com sucesso!";
    }

    public function delete($id) {
        $produto = Produto::findOrFail($id);
        return view('delete', ['produto' => $produto]);
    }

    public function destroy($id) {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return "Produto excluído com sucesso!";
    }
}
