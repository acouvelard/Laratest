@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <hr/>
                    Liste du guestbook :
                    <ul>
                      @foreach ($guestbooks as $guestbook)
                        <li>{{ $guestbook->name }} : {{ $guestbook->content }}</li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!--
@if (! empty($guestbooks))
  @foreach ($guestbooks as $guestbook)
    {{ $guestbook->name }} <span> :
    {{ $guestbook->content }}
    </span>
    <br/>
  @endforeach
@elseif (! empty($guestbook))
  {{ $guestbook->name }} <span> :
  {{ $guestbook->content }}
  </span>
@else
  Aucun message affiché
@endif
-->
