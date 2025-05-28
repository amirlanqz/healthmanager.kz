@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="card-header bg-primary bg-gradient py-4">
                        <div class="text-center text-white">
                            <h2 class="display-4 fw-bold mb-1 text-white">Заявка успешно отправлена!</h2>
                            <p class="fs-5 mb-0 opacity-75">Спасибо за вашу заявку</p>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4 p-md-5 text-center">
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