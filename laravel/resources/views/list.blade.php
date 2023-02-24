<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ url('produtos') }}">Lista de Produtos |</a>
            <a href="{{ url('produtos/novo') }}">Cadastrar Produtos</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Produtos</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Data de Validade</th>
                            <th>Data da Compra</th>
                            <th>Quantidade</th>
                            <th>Perecível?</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($produtos as $produto)

                          <tr>
                            <td>{{$produto->id}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->preco}}</td>
                            <td>{{$produto->data_validade}}</td>
                            <td>{{$produto->data_compra}}</td>
                            <td>{{$produto->quantidade}}</td>
                            <td>{{$produto->perecivel}}</td>

                            <td>
                                <form action="/produtos/{{$produto->id}}/edit">
                                    <button class="btn btn-warning btn-lg btn-block"
                                        type="submit"> Editar
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="produtos/delete/{{$produto->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button
                                            type="submit"> Deletar
                                        </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
