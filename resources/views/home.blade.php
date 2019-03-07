@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <iframe class='sproutvideo-player'
                                    src='https://videos.sproutvideo.com/embed/e89ddcb41a18e0c960/1cc4a11be5e8b95d'
                                    width='630' height='354' frameborder='0' allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
