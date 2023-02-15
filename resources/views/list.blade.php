<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ url('produtos') }}">Lista de Produtos |</a>
            <a href="{{ url('produtos/novo') }}">Cadastrar Produto</a>
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
                            <th scope="col">#</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Data de Validade</th>
                            <th scope="col">Data da Compra</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Perecível?</th>
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
                                <a href="/produtos/{{$produto->id}}/edit" class="btn btn-info">Editar
                            </td>
                            <td>
                                {{-- <form action="produtos/delete/{{$produto->id}}" method="POST">
                                @csrf
                                @method('delete') --}}
                                <a href="/produtos/delete/{{$produto->id}}" class="btn btn-danger">Deletar
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
