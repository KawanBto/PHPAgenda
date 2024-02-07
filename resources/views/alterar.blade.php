@extends('padrao')
@section('content')

<div class="container">
    <form class="row g-3" method="post" action="{{route('alterarBanco-contato',$contatos->id)}}">>
    @method('put')
    @csrf
        <div class="col-md-8">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" value="{{$contatos->nomeContato}}" name =nomeContato id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" class="form-control" value="{{$contatos->foneContato}}" name =foneContato id="inputFone">
        </div>

        <div class="col-md-8">
            <label for="inputFone" class="form-label">Email</label>
            <input type="text" class="form-control" value="{{$contatos->emailContato}}" name =emailContato id="inputEmail">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>

@endsection@extends('padrao')
@section('content')

<div class="container">
    <form class="row g-3" method="post" action="{{route('alterarBanco-contato',$contatos->id)}}">>
    @method('put')
    @csrf
        <div class="col-md-8">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" value="{{$contatos->nomeContato}}" name =nomeContato id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" class="form-control" value="{{$contatos->foneContato}}" name =foneContato id="inputFone">
        </div>

        <div class="col-md-8">
            <label for="inputFone" class="form-label">Email</label>
            <input type="text" class="form-control" value="{{$contatos->emailContato}}" name =emailContato id="inputEmail">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>

@endsection