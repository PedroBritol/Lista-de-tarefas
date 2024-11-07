@extends('app')

@section('titulo', 'Pagina inicial')


@section('conteudo')

<h1 class="mt-5">Lista De tarefas</h1>
<table class="table table-borderless table-hover">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Custo</th>
        <th scope="col">Data</th>
        <th scope="col" class="acoes">Ações</th>
        </tr>
    </thead>
    <tbody id="lista" ondrop="drop(event)" ondragover="allowDrop(event)">
        @forelse ($tarefas as $tarefa)
            <tr id="c-{{ $tarefa->id }}" class="{{ ($tarefa->custo) >= 1000 ? 'table-warning' : null}}" ondragstart="drag(event)" draggable="true">
                <th scope="row">{{ $tarefa->id }}</th>
                <td id="nomeIndex">{{ $tarefa->nome }}</td>
                <td >R${{ $tarefa->custo }}</td>
                <td>{{ $tarefa->data }}</td>
                <td class="acoesIcons">

                    <i data-bs-toggle="modal" data-bs-target="#edit-{{ $tarefa->id }}" class="icone fa-regular fa-pen-to-square " style="cursor:pointer; color:green"></i>
                    @include('update')

                    <i data-bs-toggle="modal" data-bs-target="#delete-{{ $tarefa->id }}" class="icone fa-solid fa-trash" style="cursor: pointer; color:red" ></i>
                    @include('delete')

                </td>
            </tr>
        @empty
            <tr>
                <th scope="row">1</th>
                <td>Nenhum registro cadastrado</td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
    </table>

    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#create">
    Inserir tarefa
    </button>

    @include('create')



@endsection


