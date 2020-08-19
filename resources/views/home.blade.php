@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <my-painel titulo="{{ __('Dashboard') }}">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in!') }}

                <div class="row">
                    <div class="col-md-4">
                        <my-painel titulo="Painel 1">Teste de conteúdo</my-painel>
                    </div>
                    <div class="col-md-4">
                        <my-painel titulo="Painel 2">Teste de conteúdo</my-painel>
                    </div>
                    <div class="col-md-4">
                        <my-painel titulo="Painel 3">Teste de conteúdo</my-painel>
                    </div>
                </div>
            </my-painel>

        </div>
    </div>
</div>
@endsection
