@extends('site.master.layout')

@section('content')


<div class="mt-4 p-3 bg-light text-black rounded text-center">
    <div class="container">
        <h1>Contato</h1>
        <p>Nossa equipe esta sempre a disposiçao para lhe ajudar!</p>

        <hr class="lead"></hr>
    </div>
</div>

<div class="container py-3">
    <div class="row">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nós nunca compartilhamos suas informaçoes pessoais, fique tranquilo.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Confirmo minhas informaçoes</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
@endsection