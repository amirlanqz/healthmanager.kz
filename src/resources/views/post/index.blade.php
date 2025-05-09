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
                <a href="{{ route('posts.index') }}" class="btn btn-outline-primary rounded-pill py-3 px-5">
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
            <div class="row g-0 mx-lg-0">
                <div
                        class="col-lg-6 feature-text py-5 wow fadeIn"
                        data-wow-delay="0.1s"
                >
                    <div class="p-lg-5 ps-lg-0">
                        <p
                                class="d-inline-block border rounded-pill text-light py-1 px-4"
                        >
                            Features
                        </p>
                        <h1 class="text-white mb-4">Наша деятельность</h1>
                        <p class="text-white mb-4 pb-2">
                            Резолюция круглого стола по обсуждению вопросов сертификации менеджеров здравоохранения
                        </p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div
                                            class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px"
                                    >
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Experience</p>
                                        <h5 class="text-white mb-0">Doctors</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div
                                            class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px"
                                    >
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Quality</p>
                                        <h5 class="text-white mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div
                                            class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px"
                                    >
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Positive</p>
                                        <h5 class="text-white mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div
                                            class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px"
                                    >
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">24 Hours</p>
                                        <h5 class="text-white mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                alt=""
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
            <div
                    class="text-center mx-auto mb-5 wow fadeInUp"
                    data-wow-delay="0.1s"
                    style="max-width: 600px"
            >
                <a class="d-inline-block border rounded-pill py-1 px-4" type="button">Вступить</a>
                <h1>Наши менеджеры</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/front/img/team-1.jpg')}}" alt="" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Doctor Name</h5>
                            <p class="text-primary">Department</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-facebook-f"></i
                                    ></a>
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-twitter"></i
                                    ></a>
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-instagram"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/front/img/team-2.jpg')}}" alt="" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Doctor Name</h5>
                            <p class="text-primary">Department</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-facebook-f"></i
                                    ></a>
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-twitter"></i
                                    ></a>
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-instagram"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/front/img/team-3.jpg')}}" alt="" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Doctor Name</h5>
                            <p class="text-primary">Department</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-facebook-f"></i
                                    ></a>
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-twitter"></i
                                    ></a>
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-instagram"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/front/img/team-4.jpg')}}" alt="" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Doctor Name</h5>
                            <p class="text-primary">Department</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-facebook-f"></i
                                    ></a>
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-twitter"></i
                                    ></a>
                                <a class="btn btn-square" href=""
                                ><i class="fab fa-instagram"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
