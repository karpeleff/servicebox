@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Панель управления') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы вошли') }}
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/advt/create') }}"> {{ __('создать обьявление') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}"> {{ __('на главную') }}</a>
                            </li>
                        </ul>

                        @role('Admin')
                        I am a admin!
                        @else
                            I am not a admin...
                            @endrole

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
