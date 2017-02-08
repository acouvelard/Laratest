@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if(Auth::check())
                  {{ Form::open(['url' => 'form']) }}
                    {{ Form::label('name','Votre nom: ')}}
                    {{ Form::text('name')}}
                    <br/>
                    {{ Form::label('content', 'Message : ')}}
                    {{ Form::textarea('content')}}
                    <br/>
                    {{ Form::submit('Ajouter')}}
                  {{ Form::close()}}
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
