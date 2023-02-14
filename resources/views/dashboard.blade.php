<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
        <center>Você está logado!</center>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <center>
                    <p>
                        <a href="{{ url('produtos') }}">Lista de Produtos | </a>
                        <a href="{{ url('produtos/novo') }}">Cadastrar Produto</a>
                    </p>
                </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
