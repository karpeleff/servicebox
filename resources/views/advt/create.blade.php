
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

<form action="/advt" method="post" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <input type="file" multiple name="file[]">
    <button type="submit">Загрузить</button>

</form>


                </div>
            </div>
        </div>
    </div>



@endsection
