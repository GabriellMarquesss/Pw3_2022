@extends('adminh.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <form action="{{route('categorias.store')}}" method="post">
                <div class="form.group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <button class="form-control">
                    <button class="btn btn-sucess" type="submit">Gravar</button>
                    <a class="btn btn-danger" href="{{route(categorias.index)}}"
                </div>
        </div>
    </div>
