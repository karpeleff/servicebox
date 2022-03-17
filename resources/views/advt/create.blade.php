
@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <!-- если успех -->
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>

                                @endif
                                <h2>Создать новое обьявление</h2>
                            </div>
                            <br>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>


                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Обнаружены проблемы со вводом!<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @php
                        $city = [
                         'Новопокровка'  =>    'Новопокровка',
                         'Рощино'        =>  'Рощино',
                         'Богуславец'    =>   'Богуславец',
                         'Вострецово'    =>     'Вострецово',
                         'Восток'        =>    'Восток',
                         'Новокрещенка'  =>    'Новокрещенка',
                         'Мельничное'    =>    'Мельничное',
                         'Лукьяновка'    =>    'Лукьяновка',
                         'Гончаровка'    =>   'Гончаровка',
                                ];
                    @endphp

                    {!!Form::open(['route' => 'advt.store', 'files' => true,'method'=>'POST'])!!}
                    {!!Form::text('header',null,['class' => 'form-control','placeholder' => 'заголовок']);!!}
                    <br><br>
                    {!! Form::textarea('text'); !!}
                    <br><br>
                    {!!Form::text('price',null,['class' => 'form-control','placeholder' => 'цена']);!!}
                    <br><br>
                    {!!Form::select('city', ['поселок'=> $city], '1');!!}
                    <br><br>

                    {!! Form::select('category', array('Категории' => $data ), null) !!}

                    <br><br>
                    {!! Form::file('file[]', ['multiple' => true]) !!}
                    <br><br>

                    {!! Form::submit('сохранить!'); !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
