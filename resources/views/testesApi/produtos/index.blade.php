@extends('testesApi.layouts.main')

@section('titles', 'Titulo')

@section('content')

    <h1>Exibição dos produtos</h1>
    
    <table class="table table-hover">
        <thead class="table table-dark">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produtos->data as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->name }}</td>
                    <td>{{ $produto->description }}</td>
                </tr>
            @empty
                <tr>
                    <td>Nenhum produto cadastrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection