@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <div class="d-flex align-items-center">
                    <img src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle d-block w-100 mr-3"
                        style="max-width: 50px;">
                    <a href="/profile/{{$post->user->id}}" class="font-weight-bold">{{ $post->user->username }}</a><a
                        href="#" class="pl-2">Follow</a>
                </div>
                <p>{{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
</div>
@endsection
