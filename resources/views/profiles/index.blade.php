@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" alt="" class="rounded-circle d-block w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between">
                <div class="d-flex ">
                    <h1>{{ $user->name }}</h1>
                    <follow-button user-id="{{ $user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-3"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-3"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-3"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div> <!-- row -->
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" alt="" class="d-block w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
