@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Card for the form -->
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <!-- Header -->
                        <div class="text-center mb-5">
                            <h2 class="display-5 fw-bold text-primary mb-3">Форма регистрации</h2>
                            <p class="lead text-muted">Заполните данные для регистрации: <strong>{{ $label }}</strong> — {{ $amount }} тг/год</p>
                        </div>

                        <!-- Form -->
                        <form action="{{ route('membership.submit') }}" method="POST" enctype="multipart/form-data" class="row g-4">
                            @csrf

                            <input type="hidden" name="membership_status" value="{{ $label }}">

                            <!-- Avatar Upload -->
                            <div class="col-md-6">
                                <label for="thumb" class="form-label fw-semibold">Фотография (аватар)</label>
                                <input type="file" class="form-control form-control-lg rounded-3" name="thumb" id="thumb" required>
                            </div>

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="full_name" class="form-label fw-semibold">ФИО</label>
                                <input type="text" class="form-control form-control-lg rounded-3" name="full_name" id="full_name" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control form-control-lg rounded-3" name="email" id="email" required>
                            </div>

                            <!-- Position -->
                            <div class="col-md-6">
                                <label for="position" class="form-label fw-semibold">Должность</label>
                                <input type="text" class="form-control form-control-lg rounded-3" name="position" id="position" required>
                            </div>

                            <!-- Workplace -->
                            <div class="col-md-6">
                                <label for="workplace" class="form-label fw-semibold">Место работы</label>
                                <input type="text" class="form-control form-control-lg rounded-3" name="workplace" id="workplace" required>
                            </div>

                            <!-- Education -->
                            <div class="col-md-6">
                                <label for="education" class="form-label fw-semibold">Образование</label>
                                <input type="text" class="form-control form-control-lg rounded-3" name="education" id="education" required>
                            </div>

                            <!-- Education Document -->
                            <div class="col-md-6">
                                <label for="education_file" class="form-label fw-semibold">Документ об образовании</label>
                                <input type="file" class="form-control form-control-lg rounded-3" name="education_file" id="education_file" required>
                            </div>

                            <!-- Submission Section -->
                            <div class="col-12 text-center mt-5">
                                <p class="h5 mb-4">Сумма к оплате: <strong>{{ $amount }} тг</strong></p>
                                <button type="submit" class="btn btn-lg btn-success rounded-pill px-5 py-3 fw-semibold transition-all hover-scale">
                                    Перейти к оплате
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS for enhanced styling -->
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }
        .form-control {
            border: 1px solid #ced4da;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
            transform: scale(1.05);
        }
        .rounded-4 {
            border-radius: 1rem !important;
        }
        .transition-all {
            transition: all 0.3s ease;
        }
        .hover-scale {
            transition: transform 0.2s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
