@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                @foreach($episodes as $episode)
                    <div class="col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1>{{ $episode->title }}</h1>
                            </div>
                            <div class="panel-body">
                                <audio controls preload="none" style="width:100%;">
                                    <source src="{{ $episode->file }}" type="audio/mp4"/>
                                </audio>
                                <a class="btn btn-default" rel="download" href="{{ $episode->file }}">Herunterladen</a>
                                <a class="btn btn-danger" href="{{ $episode->url }}">YouTube</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row">
                    {{ $episodes->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection