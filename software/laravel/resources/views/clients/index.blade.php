@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Clientes</h3>

        <a href="{{ route('clients.create') }}" class="btn btn-default">Novo cliente</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            
                <tr>
                    <td>id</td>
                    <td>nome</td>
                    <td>cpf</td>
                    <td>
                        <a href="{{route('clients.edit',['id'=> 1])}}" class="btn btn-default btn-sm"> <!--$client['_id']-->
                            Editar
                        </a>
                        <a href="#" class="btn btn-default btn-sm"> 
                            Excluir
                        </a>
                    </td>
                </tr>
            
            </tbody>
        </table>
    </div>

@endsection
