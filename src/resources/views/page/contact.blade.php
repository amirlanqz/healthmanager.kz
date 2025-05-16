@extends('layouts.default')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white fs-4 fw-semibold">
                        <i class="bi bi-envelope-fill me-2"></i>Связаться с нами
                    </div>

                    <div class="card-body p-4">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.send') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label text-dark">Имя</label>
                                <input type="text" name="name" class="form-control form-control text-dark" id="name" placeholder="Ваше имя">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label text-dark">Email</label>
                                <input type="email" name="email" class="form-control text-dark" id="email" placeholder="example@email.com">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label text-dark">Номер телефона</label>
                                <input type="text" name="phone" class="form-control text-dark" id="phone" placeholder="+7 (___) ___-__-__">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label text-dark">Сообщение</label>
                                <textarea name="message" class="form-control text-dark" id="message" rows="5" placeholder="Ваше сообщение..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-send me-1 "></i> Отправить сообщение
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
