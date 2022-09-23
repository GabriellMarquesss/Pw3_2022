@extends('admin.main')
@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col col-1"><b>Nome:</b></div>
            <div class="col col-11">{{$produto->nome}}</div>
        </div>
        <div class="row">
            <div class="col col-1"><b>Categoria:</b></div>
            <div class="col col-11">{{$produto->subcategoria->nome}}</div>
        </div>
        <div class="row">
            <div class="col col-2 pt-2">
                <a href="{{route('produtos.index')}}" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </div>
@endsection
