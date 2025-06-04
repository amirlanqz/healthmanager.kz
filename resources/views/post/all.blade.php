@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5 fw-bold">Все посты</h1>
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card h-100">
                        @if ($post->thumb)
                            <img src="{{ asset($post->thumb) }}" class="card-img-top" alt="{{ $post->title }}" style="object-fit: cover; height: 200px;">
                        @else
                            <img src="https://via.placeholder.com/600x200?text=Нет+изображения" class="card-img-top" alt="Placeholder" style="object-fit: cover; height: 200px;">
                        @endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            @if ($post->category)
                                <span class="badge bg-primary mb-2">{{ $post->category->name }}</span>
                            @endif
                            <p class="card-text">{!! Str::limit(strip_tags($post->content), 150) !!}</p>
                            <p class="text-muted small">Опубликовано: {{ $post->created_at->format('d.m.Y') }}</p>
                            <a href="{{ route('posts.single', $post->slug) }}" class="btn btn-primary">Читать далее</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Постов пока нет.</p>
                </div>
            @endforelse
        </div> <!-- Закрывающий тег для .row -->
    </div> <!-- Закрывающий тег для .container -->
@endsection