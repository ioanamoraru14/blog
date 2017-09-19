@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->title }}
                        <span class="pull-right">{{ $post->created_at }}</span>
                    </div>

                    <div class="panel-body">
                        <img src="{{ $post->thumbnail }}">
                        <br>
                        {{ $post->content }}
                    </div>
                </div>
            @endforeach

            <div class="text-center">{{ $posts->links() }}</div>

        </div>
    </div>
</div>
@endsection
