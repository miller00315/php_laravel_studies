{{ $slot }}

<form action={{route('site.contact-us')}} method="post" >
    @csrf
    <input name="name" type="text" placeholder="Nome" class="{{$formClass}}">
    <br/>
    <input name="phone" type="text" placeholder="Telefone" class="{{$formClass}}">
    <br/>
    <input name="email" type="text" placeholder="E-mail" class="{{$formClass}}">
    <br/>
    <select name="reason" class="{{$formClass}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="doubt">Dúvida</option>
        <option value="praise">Elogio</option>
        <option value="complaint">Reclamação</option>
    </select>
    <br/>
    <textarea name="message" class="{{$formClass}}">Preencha aqui a sua mensagem</textarea>
    <br/>
    <button class="{{$formClass}}">ENVIAR</button>
</form>
