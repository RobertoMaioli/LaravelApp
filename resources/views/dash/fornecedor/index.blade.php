<h1>Fornecedor</h1>

{{-- Variáveis do tipo array vindas do controller, não finalizar com ; 

    @dd($fornecedores)

--}}

{{-- Criação de IF/Else

    @if(count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3>Existem alguns fornecedores</h3>
    @elseif(count($fornecedores) > 10)
        <h3>Existem vários fornecedores</h3>
    @else
        <h3>Ainda não existem fornecedores</h3>
    @endif 

--}}

@isset($fornecedores)
    
    @foreach ( $fornecedores as $indice => $fornecedor )
        ID: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] ?? 'Dado não preenchido' }} {{-- Se o valor for null ou não estiver definida (isset) --}}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }}
        <hr>

        @if ($loop->last)
            Registros: {{ $loop->count }}
        @endif

    @endforeach
    
    <br>

@endisset

{{-- Uso de @unless que executa se o retorno for false  --}}
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless




