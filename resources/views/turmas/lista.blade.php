@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default panel-sis">
                    <div class="panel-heading" style="text-align: left;">Turmas
                        <a class="pull-right" href="{{ url('turmas/novo') }}">Nova Turma</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <thead>
                            <td>Turma</td>
                            <td>Curso</td>
                            <td>Opções</td>

                            </thead>
                            <tbody>

                            @foreach($turmas as $turma)
                                <tr>
                                    <td>{{$turma->codigo}}</td>
                                    <td>{{$turma}}</td>
                                    <td>
                                        <a href=""
                                           class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => '/turmas/'.$turma->id, 'style' => 'display: inline;']) !!}
                                        <button type="submit" onClick="return confirm('Deseja deletar o registro?')"
                                                href=""
                                                class="btn btn-default btn-sm">Excluir
                                        </button>
                                        {!! Form::close()    !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection