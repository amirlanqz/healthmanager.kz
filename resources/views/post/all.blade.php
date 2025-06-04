@extends('layouts.default')

@section('content')
    <div class="container py-4">
        <h1 class="text-center mb-4 fw-bold">Все посты</h1>
        <div class="row g-4">
            @forelse ($posts as $post)
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card shadow-sm rounded border-primary" style="border-width: 5px;">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                @if ($post->category)
                                    <span class="badge bg-primary me-2 px-2 py-1">{{ $post->category->name }}</span>
                                @endif
                                <small class="text-muted me-2" style="font-size: 0.85rem;">
                                    <i class="far fa-calendar-alt me-1"></i>
                                    {{ $post->created_at->format('d.m.Y') }}
                                </small>
                                <small class="text-muted" style="font-size: 0.85rem;">
                                    <i class="far fa-eye me-1"></i>
                                    {{ $post->views ?? 0 }}
                                </small>
                            </div>

                            <h2 class="mb-2">
                                <a href="{{ route('posts.single', $post->slug) }}"
                                   class="text-dark text-decoration-none" style="font-size: 1.25rem;">{{ $post->title }}</a>
                            </h2>

                            <div class="card-text mb-3" style="font-size: 0.9rem; line-height: 1.4;">
                                {!! Str::limit(strip_tags($post->content), 150, '...') !!}
                            </div>

                            <div class="d-flex align-items-center">
                                <a href="{{ route('posts.single', $post->slug) }}"
                                   class="btn btn-primary rounded-pill px-3 py-1" style="font-size: 0.85rem;">
                                    Читать далее <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center py-3">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        Постов пока нет. Зайдите позже!
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection