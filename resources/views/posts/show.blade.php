@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
        <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
         <div>
             <div class="d-flex align-items-centre">
                 <div class="pr-3">
                    <img style="max-width: 100px" src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100">
                 </div>
                 <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{ $post->user->profile->id}}">
                            <span class="text-dark">{{ $post->user->username }} .
                            </span>
                        </a>
                    </div>
                </div>
                <a href="#" class="pl-3">Follow</a>
            </div>
            <hr>
            <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->profile->id}}"><span class="text-dark">{{ $post->user->username }}</span></a></span></p>
         </div>
        </div>
    </div>
</div>
@endsection
