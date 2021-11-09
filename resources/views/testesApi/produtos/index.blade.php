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

    {{-- @if($produtos->prev_page_url != '')
        <a href="{{ route('paginate', $produtos->current_page - 1) }}" ><<</a>
    @elseif ($produtos->next_page_url != '')
        <a href="{{ route('paginate', $produtos->current_page + 1) }}">>></a>
    @endif --}}

    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
              
            @if($produtos->prev_page_url != '')
                <a class="page-link" href="{{ route('paginate', $produtos->current_page - 1) }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
                </a>
            @endif
          </li>

          @foreach(range(1, $produtos->last_page) as $i)
            <li class="page-item"><a class="page-link" href="{{ $i }}">{{ $i }}</a></li>
          @endforeach
          
          
          <li class="page-item">
            @if ($produtos->next_page_url != '')
                <a class="page-link" href="{{ route('paginate', $produtos->current_page + 1) }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Próxima</span>
                </a>
            @endif
          </li>
        </ul>
      </nav>
    

@endsection