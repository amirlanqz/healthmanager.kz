@extends('layouts.default')


@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">{{ $post->title }}</h1>
                <p class="mb-4">{!! $post->content !!} </p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-3">
                            <img src="{{ asset($post->thumb) }}" class="img-fluid w-100" alt="{{ $post->title }}" style="min-height: 300px; object-fit: cover; border-radius: 25px;">
                        </div>
            </div>
        </div>
    </div>
</div>

@endsection
