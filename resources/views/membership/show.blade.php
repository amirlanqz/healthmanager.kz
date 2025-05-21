@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <!-- Card Header with Gradient Background -->
                    <div class="card-header bg-primary bg-gradient py-4">
                        <div class="text-center text-white">
                            <h2 class="display-4 fw-bold mb-1 text-white">Форма регистрации</h2>
                            <p class="fs-5 mb-0 opacity-75">{{ $label }} — {{ $amount }} тг/год</p>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('membership.submit') }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                            @csrf
                            <input type="hidden" name="membership_status" value="{{ $label }}">

                            <!-- Photo Upload with Preview -->
                            <div class="col-md-6">
                                <label for="thumb" class="form-label fw-semibold">Фотография <span class="text-danger">*</span></label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle border overflow-hidden" style="width: 60px; height: 60px; background-color: #f0f2f5;">
                                        <img id="thumbPreview" src="#" alt="Preview" class="img-fluid d-none" style="object-fit: cover; width: 100%; height: 100%;">
                                    </div>
                                    <div class="flex-grow-1">
                                        <input type="file" class="form-control" name="thumb" id="thumb" accept="image/*" required onchange="previewImage(this, 'thumbPreview')">
                                        <div class="invalid-feedback">Пожалуйста, загрузите фотографию</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="full_name" class="form-label fw-semibold">ФИО <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="full_name" id="full_name" required>
                                <div class="invalid-feedback">Пожалуйста, укажите ваше полное имя</div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" required>
                                <div class="invalid-feedback">Пожалуйста, введите корректный email</div>
                            </div>

                            <!-- Position -->
                            <div class="col-md-6">
                                <label for="position" class="form-label fw-semibold">Должность <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="position" id="position" required>
                                <div class="invalid-feedback">Пожалуйста, укажите вашу должность</div>
                            </div>

                            <!-- Workplace -->
                            <div class="col-md-6">
                                <label for="workplace" class="form-label fw-semibold">Место работы <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="workplace" id="workplace" required>
                                <div class="invalid-feedback">Пожалуйста, укажите место работы</div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-semibold">Контактный номер <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">+7</span>
                                    <input type="tel" class="form-control" name="phone" id="phone" required>
                                </div>
                                <div class="invalid-feedback">Пожалуйста, укажите контактный номер</div>
                            </div>

                            <!-- Social Links -->
                            <div class="col-md-6">
                                <label for="social_links" class="form-label fw-semibold">Социальные сети</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                    <input type="text" class="form-control" name="social_links" id="social_links">
                                </div>
                            </div>

                            <!-- Birth Date -->
                            <div class="col-md-6">
                                <label for="birth_date" class="form-label fw-semibold">Дата рождения <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="birth_date" id="birth_date" required>
                                <div class="invalid-feedback">Пожалуйста, укажите дату рождения</div>
                            </div>

                            <!-- Experience -->
                            <div class="col-md-6">
                                <label for="healthcare_experience" class="form-label fw-semibold">Стаж работы в здравоохранении</label>
                                <select class="form-select" name="healthcare_experience" id="healthcare_experience">
                                    <option value="" selected disabled>Выберите стаж</option>
                                    <option value="Менее 1 года">Менее 1 года</option>
                                    <option value="1-3 года">1-3 года</option>
                                    <option value="3-5 лет">3-5 лет</option>
                                    <option value="5-10 лет">5-10 лет</option>
                                    <option value="Более 10 лет">Более 10 лет</option>
                                </select>
                            </div>

                            <!-- Education -->
                            <div class="col-md-6">
                                <label for="education" class="form-label fw-semibold">Образование <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="education" id="education" required>
                                <div class="invalid-feedback">Пожалуйста, укажите ваше образование</div>
                            </div>

                            <!-- Education Documents -->
                            <div class="col-md-6">
                                <label for="education_file" class="form-label fw-semibold">Документ об образовании <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="education_file[]" id="education_file" accept=".pdf,image/*" multiple required>
                                <small class="text-muted">Можно загрузить несколько файлов (PDF, JPG, PNG)</small>
                                <div class="invalid-feedback">Пожалуйста, загрузите документ об образовании</div>
                            </div>

                            <!-- Agreement -->
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="accepted_rules" id="accepted_rules" value="1" required>
                                    <label class="form-check-label" for="accepted_rules">
                                        Я ознакомился с Уставом и Правилами вступления в члены Республиканского общественного объединения
                                        «Казахстанская ассоциация менеджеров здравоохранения», понимаю их содержание и принимаю их условия.
                                        Я обязуюсь соответствовать требованиям, предъявляемым члену Объединения и понимаю ответственность в рамках членства в Объединении.
                                    </label>
                                    <div class="invalid-feedback">Вы должны принять условия перед отправкой</div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 text-center mt-7">
                                <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-bold shadow-sm">
                                    <span class="fw-bold text-white">{{ $amount }} тг</span> <br> <i class="bi bi-credit-card me-2"></i> Перейти к оплате
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Image preview function
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                }

                reader.readAsDataURL(file);
            }
        }

        // Form validation
        (function() {
            'use strict';

            const forms = document.querySelectorAll('.needs-validation');

            Array.from(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
@endsection
