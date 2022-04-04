@extends('layouts.service')
@section('content')

    @php
        // dd($data);
          $img =  json_decode($data->img);
    @endphp

    <section class="module-medium" id="demos">
        <div class="container">
            <div class="row multi-columns-row">
                @foreach()
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="index_mp_fullscreen_video_background.html">
                        <div class="content-box-image"><img src="{{asset("storage/".$i)}}" alt=""/></div>
                        <h3 class="content-box-title font-serif">Main Demo</h3></a></div>
                @endforeach


            </div>
        </div>
    </section>



@endsection
