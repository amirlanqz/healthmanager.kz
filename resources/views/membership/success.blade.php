@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="card-header bg-success bg-gradient py-4">
                        <div class="text-center text-white">
                            <h2 class="display-4 fw-bold mb-1 text-white">Заявка успешно отправлена!</h2>
                            <p class="fs-5 mb-0 opacity-75">Спасибо за вашу заявку</p>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4 p-md-5 text-center">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>

                        <h3 class="mb-3">Ваша заявка на вступление принята</h3>
                        <p class="lead mb-4">Мы рассмотрим вашу заявку в ближайшее время и свяжемся с вами для дальнейших шагов.</p>

                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4 gap-3">Вернуться на главную</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection