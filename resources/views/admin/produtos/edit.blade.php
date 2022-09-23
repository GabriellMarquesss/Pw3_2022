@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <form action="{{route('produtos.update', $produto)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <div class="col col=6">
                        <label for="estoque">Estoque:</label>
                        <input type="number" name="valor" id="valor" class="form-control" required value="{{$produto->nome}}">
                    </div>
                    <div class="row">


                    </div>
                    <label for="categoria">Categoria</label>
                    <input type="text" id="nome" class="form-control" required>
                    <option value="">Selecione uma categoria</option>
                    @foreach($subcategoria as $categoria)
                        <option value="{{$subcategoria->id}}">{{$subcategoria->nome}}</option>
                        @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Gravar</button>
                    <a class="btn btn-danger" href="{{route('produtos.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection



