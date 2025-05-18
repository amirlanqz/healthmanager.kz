@extends('layouts.default')


@section('content')

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
                                <img src="{{ asset($manager->thumb) }}" alt="{{ $manager->full_name }}"
                                     class="rounded-circle border border-white" style="width: 150px; height: 150px; object-fit: cover;">
                            </div>
                            <h5 class="text-white">{{ $manager->full_name }}</h5>
                            <p class="mb-3">{{ $manager->membership_status }}</p>
                            <div class="team-social d-flex justify-content-center gap-2 mt-auto">
                                <a class="btn btn-square btn-outline-light" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-light" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-light" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
