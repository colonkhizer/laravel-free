@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-3">
        <img 
        src="{{ $user->profile->profileImage() }}" 
        class="rounded-circle p-5 w-100"  
        alt="">
        </div>
        <div class="col-9 pt-5">
            
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-centre pb-3">
                    <div class="h4">{{ $user->username }}</div>
                <follow-button user-id="{{ $user->id }}"></follow-button>
                </div>

            @can('update' , $user->profile)
            <a href="/p/create">Add New Post</a>
            @endcan
            </div>
            @can('update' , $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
            <div class="pr-3"><strong>{{ $user->posts->count() }}</strong> posts</div>
            <div class="pr-3"><strong>23k</strong> followers</div>
            <div class="pr-3"><strong>212</strong> following</div>
            </div>
            <div class="pt-2"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}"><img src="/storage./{{ $post->image }}" 
                class="w-100"></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
