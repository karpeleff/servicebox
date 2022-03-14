
@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Создать новое обьявление</h2>
                            </div>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!!Form::open(['route' => 'advt.store', 'files' => true,'method'=>'POST'])!!}
                    {!!Form::text('header',null,['class' => 'form-control']);!!}
                    <br><br>
                    {!! Form::textarea('text'); !!}
                    <br><br>
                    {!!Form::text('price',null,['class' => 'form-control','placeholder' => 'цена']);!!}
                    <br><br>
                    {!!Form::select('city', ['1' => 'Рощино', '2' => 'Восток'], '1');!!}
                    <br><br>

                    {!! Form::select('category', array('Категории' => $data ), null) !!}

                    <br><br>
                    {!! Form::file('file[]', ['multiple' => true]) !!}
                    <br><br>

                    {!! Form::submit('Click Me!'); !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('storage/1646803606_product-8.jpg') }}" alt="" title="">


@endsection
