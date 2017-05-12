@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default panel-sis">
                    <div class="panel-heading" style="text-align: left;">
                        <a class="pull-right" href="{{ url("turmas") }}">Listagem Turmas</a>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        {{--@if(Request::is('*/editar'))--}}
                        {{--{!! Form::model($aluno, ['method' => 'PATCH', 'url' => 'alunos/'.$aluno->id]) !!}--}}
                        {{--@else--}}
                        {!! Form::open(['url' => 'turmas/salvar']) !!}
                        {{--@endif--}}

                        {!! Form::input('text', 'codigo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Código' ])  !!}

                        <div class="row">
                            {!! Form::label('turno','Qual o turno?') !!}
                        </div>

                        {!! Form::label('turno', 'Manhã') !!}
                        {!! Form::radio('turno', 'manha')  !!}

                        {!! Form::label('turno', 'Tarde') !!}
                        {!! Form::radio('turno', 'tarde')  !!}

                        {!! Form::label('turno', 'Noite') !!}
                        {!! Form::radio('turno', 'noite')  !!}


                        <div class="row">
                            {!! Form::label('curso_id','Qual o curso?') !!}
                        </div>
                        @foreach($cursos as $curso)
                            {!! Form::label('curso_id', $curso->nome) !!}
                            {!! Form::radio('curso_id', $curso->id)  !!}
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