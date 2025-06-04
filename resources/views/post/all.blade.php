@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5 fw-bold">Все посты</h1>
        <div class="row g-4">
            @forelse ($posts as $post)
                <div class="col-lg-6 col-md-6">
                    <div class="card h-100 shadow-sm border-0 overflow-hidden">
                        <!-- Обертка для изображения с фиксированным соотношением сторон -->
                        <div class="ratio ratio-16x9 bg-light">
                            @if ($post->thumb)
                                <img src="{{ asset($post->thumb) }}"
                                     class="card-img-top object-fit-cover"
                                     alt="{{ $post->title }}"
                                     style="object-position: center center;">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-10 text-muted">
                                    <i class="bi bi-image fs-1"></i>
                                </div>
                            @endif
                        </div>

                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                @if ($post->category)
                                    <span class="badge bg-primary mb-2">{{ $post->category->name }}</span>
                                @endif
                                <h2 class="card-title h4 mb-3">{{ $post->title }}</h2>
                                <p class="card-text text-muted mb-3">{!! Str::limit(strip_tags($post->content), 120) !!}</p>
                            </div>

                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="bi bi-calendar me-1"></i>
                                    {{ $post->created_at->format('d.m.Y') }}
                                </small>
                                <a href="{{ route('posts.single', $post->slug) }}" class="btn btn-sm btn-outline-primary">
                                    Читать <i class="bi bi-arrow-right ms-1"></i>
                                </a>
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

        <!-- Пагинация -->
        @if($posts->hasPages())
            <div class="mt-5">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
@endsection

@push('styles')
    <style>
        /* Кастомные стили для карточек */
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border-radius: 0.5rem;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .object-fit-cover {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@endpush