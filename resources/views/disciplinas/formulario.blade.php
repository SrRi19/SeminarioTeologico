@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default panel-sis">
                    <div class="panel-heading" style="text-align: left;">Informe os dados da Disciplina
                        <a class="pull-right" href="{{ url("disciplinas") }}">Listagem Disciplinas</a>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($disciplina, ['method' => 'PATCH', 'url' => 'disciplinas/'.$disciplina->id]) !!}
                        @else
                            {!! Form::open(['url' => 'disciplinas/salvar']) !!}

                        @endif

                        {!! Form::input('text', 'descricao', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome' ])  !!}
                        @foreach($cursos as $curso)
                            {!! Form::label('curso', $curso->descricao) !!}
                            {!! Form::checkbox('curso', $curso->descricao)  !!}
                        @endforeach

                        <div class="row">
                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary margem-top']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
