@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
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
@endsection
