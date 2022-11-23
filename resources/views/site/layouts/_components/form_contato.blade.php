{{ $slot }}

<form action="{{ route('site.contato') }}" method="POST">
    {{-- @csrf é obrigatório para um envio POST, responsável por gerar um token --}}
    @csrf
    <input type="text" placeholder="Nome" name="nome" class="{{ $class }}">
    <br>
    <input type="text" placeholder="Telefone" name="telefone" class="{{ $class }}">
    <br>
    <input type="text" placeholder="E-mail" name="email" class="{{ $class }}">
    <br>
    <select class="{{ $class }}" name="contato">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class="{{ $class }}" name="mensagem">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>

<div style="position:absolute;top:0;background:red">
    <pre>{{ print_r($errors) }}</pre>
</div>
