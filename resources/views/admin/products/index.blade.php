@extends('app')

@section('content')
    <div class="container">
        <h3>Categorias</h3>
        
        <p><a href="{{ route('admin.products.create') }}" class="btn btn-default">Novo registro</a></p>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>    
                    <td>{{$product->name}}</td>
                    <td><a href="{{ route('admin.products.edit',['id'=>$product->id]) }}" class="btn btn-default">Editar</a></td>
                    <td><a href="{{ route('admin.products.delete',['id'=>$product->id]) }}" class="btn btn-default">Excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        {!! $products->render() !!}
        
    </div>

@endsection