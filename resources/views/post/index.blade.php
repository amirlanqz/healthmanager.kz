@extends('layouts.default')


@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
                <h1 class="mb-4">Последние публикации</h1>
            </div>

            <div class="row g-5">
                @foreach($posts as $post)
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-sm mb-5 overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    <div class="h-100 d-flex align-items-center">
                                        <img src="{{ asset($post->thumb) }}" class="img-fluid w-100" alt="{{ $post->title }}" style="min-height: 300px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-4 p-lg-5">
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="badge bg-primary me-3">{{ $post->category->title }}</span>
                                            <small class="text-muted me-3"><i class="far fa-calendar-alt me-1"></i> {{ $post->created_at->format('d.m.Y') }}</small>
                                            <small class="text-muted"><i class="far fa-eye me-1"></i> {{ $post->views }}</small>
                                        </div>

                                        <h2 class="mb-3">
                                            <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class="text-dark text-decoration-none">{{ $post->title }}</a>
                                        </h2>

                                        <div class="card-text mb-4 fs-5">
                                            {!! Str::limit(strip_tags($post->content), 250, '...') !!}
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class="btn btn-primary rounded-pill px-4 py-2">
                                                Читать далее <i class="fas fa-arrow-right ms-2"></i>
                                            </a>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle me-1"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle me-1"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-4 wow fadeInUp" data-wow-delay="0.5s">
                <a href="{{ route('posts.all') }}" class="btn btn-outline-primary rounded-pill py-3 px-5">
                    Все статьи <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->

    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0" style="min-height: 400px;">
                <div
                        class="col-lg-6 feature-text d-flex align-items-center h-100 wow fadeIn"
                        data-wow-delay="0.1s"
                >
                    <div class="p-lg-5 ps-lg-0">
                        <h1 class="text-white mb-4">Наша деятельность</h1>
                        <p class="text-white mb-4">
                            Казахстанская ассоциация менеджеров здравоохранения занимается развитием системы управления здравоохранением,
                            повышением квалификации специалистов, сертификацией кадров и внедрением международных стандартов
                            в медицинские учреждения Республики Казахстан.
                        </p>
                        <p class="text-white mb-0">
                            Мы объединяем профессионалов в сфере медицины, образования и управления, чтобы совместно формировать
                            эффективную и устойчивую систему здравоохранения.
                        </p>
                    </div>
                </div>
                <div
                        class="col-lg-6 pe-lg-0 wow fadeIn"
                        data-wow-delay="0.5s"
                        style="min-height: 400px"
                >
                    <div class="position-relative h-100">
                        <img
                                class="position-absolute img-fluid w-100 h-100"
                                src="{{ asset('assets/front/img/feature.jpg')}}"
                                style="object-fit: cover"
                                alt="Фото деятельности"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Feature End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <a
                    class="d-inline-block border bg-primary text-white rounded-pill py-2 px-5 fw-semibold transition-transform"
                    href="{{ route('membership.store') }}"
                    role="button"
                    style="font-size: 1.25rem; /* чуть больше текста */"
                    onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.3)';"
                    onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';"
                >
                    Стать членом организации
                </a>
            </div>

            <div class="row g-4">
                @foreach($managers as $manager)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden h-100 d-flex flex-column bg-primary p-4 text-center text-white shadow">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="{{ $manager->thumb }}" alt="{{ $manager->full_name }}"
                                     class="rounded-circle border border-white" style="width: 150px; height: 150px; object-fit: cover;">
                            </div>
                            <h5 class="text-white">{{ $manager->full_name }}</h5>
                            <p class="mb-3">{{ $manager->membership_status }}</p>
                            <div class="team-social d-flex justify-content-center gap-2 mt-auto">
                                <a class="btn btn-square btn-outline-light" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-light" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-light" href="https://www.instagram.com/{{ $manager->social_links }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




@endsection
