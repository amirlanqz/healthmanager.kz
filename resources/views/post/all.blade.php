@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5 fw-bold">Все посты</h1>
        <div class="row g-5">
            @forelse ($posts as $post)
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card border-0 shadow-sm mb-4 overflow-hidden">
                        <div class="row g-0">
{{--                            <div class="col-lg-5">--}}
{{--                                <div class="h-100 d-flex align-items-center">--}}
{{--                                    @if ($post->thumb)--}}
{{--                                        <img src="{{ asset($post->thumb) }}"--}}
{{--                                             class="img-fluid w-100 rounded"--}}
{{--                                             alt="{{ $post->title }}"--}}
{{--                                             style="min-height: 200px; object-fit: cover; object-position: center center;">--}}
{{--                                    @else--}}
{{--                                        <div class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-10 text-muted" style="min-height: 200px;">--}}
{{--                                            <i class="bi bi-image fs-1"></i>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-lg-7">
                                <div class="card-body p-3 p-lg-4">
                                    <div class="d-flex align-items-center mb-2">
                                        @if ($post->category)
                                            <span class="badge bg-primary me-2">{{ $post->category->name }}</span>
                                        @endif
                                        <small class="text-muted me-2">
                                            <i class="far fa-calendar-alt me-1"></i>
                                            {{ $post->created_at->format('d.m.Y') }}
                                        </small>
                                        <small class="text-muted">
                                            <i class="far fa-eye me-1"></i>
                                            {{ $post->views ?? 0 }}
                                        </small>
                                    </div>

                                    <h2 class="mb-2">
                                        <a href="{{ route('posts.single', $post->slug) }}"
                                           class="text-dark text-decoration-none h5">{{ $post->title }}</a>
                                    </h2>

                                    <div class="card-text mb-3 fs-6">
                                        {!! Str::limit(strip_tags($post->content), 200, '...') !!}
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('posts.single', $post->slug) }}"
                                           class="btn btn-primary rounded-pill px-3 py-1">
                                            Читать далее <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                        <div class="ms-auto">
                                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle me-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle me-1">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center py-4">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        Постов пока нет. Зайдите позже!
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
```