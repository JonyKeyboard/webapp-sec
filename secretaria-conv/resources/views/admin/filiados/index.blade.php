@extends('layout')

@section('cabecalho')

<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active">Obreiros</li>
    <a class="ml-auto mr-0 ml-auto mr-0" href="{{ route('form_criar_filiado') }}">Novo obreiro</a>
</ol>

@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif

@endsection
<!---------------------------LISTAGEM--------------------------------->
@section('conteudo')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Filiado</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Aniversário</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Filiado</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Aniversário</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($filiados as $filiado)
                        <tr>
                            <td>{{ $filiado->nome }}</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>{{ date('d/m/Y', strtotime($filiado->nascimento)) }}</td>
                            <td>
                                <div class="d-flex">
                                    {{-- <form method="GET" action="/filiados/{{$filiado->id}}">
                                        @csrf --}}
                                    <a href="/filiados/{{ $filiado->id }}/editar">
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </a>
                                    {{-- </form> --}}
                                    <form method="POST" action="/filiados/{{$filiado->id}}" onsubmit="return confirm('Deseja excluir o obreiro {{ addslashes($filiado->nome)}}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger ml-2">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
