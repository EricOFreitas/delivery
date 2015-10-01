@extends('app')

@section('content')
    <div class="container">
        <h3>Clientes</h3>
        
        <p><a href="{{ route('admin.clients.create') }}" class="btn btn-default">Novo registro</a></p>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->phone}}</td>
                    <td><a href="{{ route('admin.clients.edit',['id'=>$client->id]) }}" class="btn btn-default">Editar</a></td>
                    <td><a href="{{ route('admin.clients.delete',['id'=>$client->id]) }}" class="btn btn-default">Excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        {!! $clients->render() !!}
        
    </div>

@endsection