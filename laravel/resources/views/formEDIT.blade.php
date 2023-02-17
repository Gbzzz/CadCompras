<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ url('produtos/novo') }}">Produtos</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                            <form action="update" method="POST">
                            @method('PUT')
                            @csrf
                              <div class="form-group">
                                <label>Nome Produto</label>
                                <input name="descricao" type="text" class="form-control" value="{{ $produtos->descricao }}" id="box">
                              </div>
                              <br>
                              <div>
                                <label>Preço</label>
                                <input name="preco" class="form-control" value="{{ $produtos->preco }}" id="box">
                              </div>
                              <br>
                              <div>
                                <label>Data de Validade</label>
                                <input name="data_validade" type="date" class="form-control" value="{{ $produtos->data_validade }}" id="box">
                              </div>
                              <br>
                              <div>
                                <label>Data da Compra</label>
                                <input name="data_compra" type="datetime-local" class="form-control" value="{{ $produtos->data_compra }}" id="box">
                              </div>
                              <br>
                              <div>
                                <label>Quantidade</label>
                                <input name="quantidade" type="number" class="form-control" value="{{ $produtos->quantidade }}" id="box">
                              </div>
                              <br>
                              <div>
                                <label>Perecível?</label>
                                <input name="perecivel" type="text" class="form-control" value="{{ $produtos->perecivel }}" id="box">
                              </div>
                              <br>
                                <button type="submit" class="btn btn-primary">Atualizar >>></button>
                            </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
