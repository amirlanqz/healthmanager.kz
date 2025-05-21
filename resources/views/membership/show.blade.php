@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <!-- Card Header with Gradient Background -->
                    <div class="card-header bg-primary bg-gradient py-4">
                        <div class="text-center text-white">
                            <h2 class="display-4 fw-bold mb-1">Форма регистрации</h2>
                            <p class="fs-5 mb-0 opacity-85">{{ $label }} — {{ $amount }} тг/год</p>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4 p-md-5 bg-light">
                        <form action="{{ route('membership.submit') }}" method="POST" enctype="multipart/form-data" class="row g-4 needs-validation" novalidate>
                            @csrf
                            <input type="hidden" name="membership_status" value="{{ $label }}">

                            <!-- Photo Upload with Preview -->
                            <div class="col-md-6">
                                <label for="thumb" class="form-label fw-semibold text-dark">Фотография <span class="text-danger">*</span></label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle border border-primary overflow-hidden" style="width: 80px; height: 80px; background-color: #f8f9fa;">
                                        <img id="thumbPreview" src="#" alt="Preview" class="img-fluid d-none" style="object-fit: cover; width: 100%; height: 100%;">
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center bg-light">
                                            <i class="bi bi-person fs-4 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <input type="file" class="form-control border-primary" name="thumb" id="thumb" accept="image/*" required onchange="previewImage(this, 'thumbPreview')">
                                        <div class="invalid-feedback">Пожалуйста, загрузите фотографию</div>
                                        <small class="text-muted">Рекомендуемый размер: 300×300 px</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="full_name" class="form-label fw-semibold text-dark">ФИО <span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" name="full_name" id="full_name" required placeholder="Иванов Иван Иванович">
                                <div class="invalid-feedback">Пожалуйста, укажите ваше полное имя</div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold text-dark">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control border-primary" name="email" id="email" required placeholder="example@mail.com">
                                <div class="invalid-feedback">Пожалуйста, введите корректный email</div>
                            </div>

                            <!-- Position -->
                            <div class="col-md-6">
                                <label for="position" class="form-label fw-semibold text-dark">Должность <span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" name="position" id="position" required placeholder="Например, Главный врач">
                                <div class="invalid-feedback">Пожалуйста, укажите вашу должность</div>
                            </div>

                            <!-- Workplace -->
                            <div class="col-md-6">
                                <label for="workplace" class="form-label fw-semibold text-dark">Место работы <span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" name="workplace" id="workplace" required placeholder="Например, Городская больница №1">
                                <div class="invalid-feedback">Пожалуйста, укажите место работы</div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-semibold text-dark">Контактный номер <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary text-white">+7</span>
                                    <input type="tel" class="form-control border-primary" name="phone" id="phone" required placeholder="7001234567" pattern="[0-9]{10}">
                                </div>
                                <div class="invalid-feedback">Пожалуйста, укажите 10-значный номер телефона</div>
                            </div>

                            <!-- Social Links -->
                            <div class="col-md-6">
                                <label for="social_links" class="form-label fw-semibold text-dark">Социальные сети</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary text-white"><i class="bi bi-instagram"></i></span>
                                    <input type="text" class="form-control border-primary" name="social_links" id="social_links" placeholder="username">
                                </div>
                                <small class="text-muted">Можно указать Instagram, Facebook или LinkedIn</small>
                            </div>

                            <!-- Birth Date -->
                            <div class="col-md-6">
                                <label for="birth_date" class="form-label fw-semibold text-dark">Дата рождения <span class="text-danger">*</span></label>
                                <input type="date" class="form-control border-primary" name="birth_date" id="birth_date" required>
                                <div class="invalid-feedback">Пожалуйста, укажите дату рождения</div>
                            </div>

                            <!-- Experience -->
                            <div class="col-md-6">
                                <label for="healthcare_experience" class="form-label fw-semibold text-dark">Стаж работы в здравоохранении</label>
                                <select class="form-select border-primary" name="healthcare_experience" id="healthcare_experience">
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
                                <label for="education" class="form-label fw-semibold text-dark">Образование <span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" name="education" id="education" required placeholder="Например, Высшее медицинское">
                                <div class="invalid-feedback">Пожалуйста, укажите ваше образование</div>
                            </div>

                            <!-- Education Documents -->
                            <div class="col-md-6">
                                <label for="education_file" class="form-label fw-semibold text-dark">Документ об образовании <span class="text-danger">*</span></label>
                                <input type="file" class="form-control border-primary" name="education_file[]" id="education_file" accept=".pdf,.jpg,.jpeg,.png" multiple required>
                                <small class="text-muted">Можно загрузить несколько файлов (PDF, JPG, PNG) до 5MB каждый</small>
                                <div class="invalid-feedback">Пожалуйста, загрузите документ об образовании</div>
                            </div>

                            <!-- Additional Documents -->
                            <div class="col-md-6">
                                <label for="additional_files" class="form-label fw-semibold text-dark">Дополнительные документы</label>
                                <input type="file" class="form-control border-primary" name="additional_files[]" id="additional_files" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                <small class="text-muted">Сертификаты, дипломы и т.д. (необязательно)</small>
                            </div>

                            <!-- Agreement -->
                            <div class="col-12 mt-4">
                                <div class="form-check">
                                    <input class="form-check-input border-primary" type="checkbox" name="accepted_rules" id="accepted_rules" value="1" required>
                                    <label class="form-check-label text-dark" for="accepted_rules">
                                        Я ознакомился с Уставом и Правилами вступления в члены Республиканского общественного объединения
                                        «Казахстанская ассоциация менеджеров здравоохранения», понимаю их содержание и принимаю их условия.
                                        Я обязуюсь соответствовать требованиям, предъявляемым члену Объединения и понимаю ответственность в рамках членства в Объединении.
                                    </label>
                                    <div class="invalid-feedback">Вы должны принять условия перед отправкой</div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 text-center mt-5">
                                <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-bold shadow-sm">
                                    <i class="bi bi-credit-card-fill me-2"></i> Перейти к оплате {{ $amount }} тг
                                </button>
                                <p class="mt-3 text-muted">После отправки формы вы будете перенаправлены на страницу оплаты</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Enhanced image preview function
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];
            const placeholder = preview.parentElement.querySelector('.bi-person');

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                    if (placeholder) placeholder.classList.add('d-none');
                }

                reader.readAsDataURL(file);
            } else {
                preview.src = "#";
                preview.classList.add('d-none');
                if (placeholder) placeholder.classList.remove('d-none');
            }
        }

        // Enhanced form validation with better UX
        (function() {
            'use strict';

            const forms = document.querySelectorAll('.needs-validation');

            // Add real-time validation on blur
            const addValidationOnBlur = (input) => {
                input.addEventListener('blur', function() {
                    this.classList.add('validated');
                    validateField(this);
                });
            };

            // Validate individual field
            const validateField = (field) => {
                if (field.classList.contains('validated')) {
                    if (field.checkValidity()) {
                        field.classList.remove('is-invalid');
                        field.classList.add('is-valid');
                    } else {
                        field.classList.remove('is-valid');
                        field.classList.add('is-invalid');
                    }
                }
            };

            Array.from(forms).forEach(function(form) {
                // Add validation to all required inputs
                const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
                inputs.forEach(input => addValidationOnBlur(input));

                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();

                        // Force validation on all fields
                        inputs.forEach(input => {
                            input.classList.add('validated');
                            validateField(input);
                        });

                        // Scroll to first invalid field
                        const firstInvalid = form.querySelector('.is-invalid');
                        if (firstInvalid) {
                            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                    }

                    form.classList.add('was-validated');
                }, false);
            });

            // Phone number formatting
            const phoneInput = document.getElementById('phone');
            if (phoneInput) {
                phoneInput.addEventListener('input', function(e) {
                    this.value = this.value.replace(/\D/g, '').substring(0, 10);
                });
            }
        })();
    </script>

    <style>
        /* Custom styles for better appearance */
        .form-control:focus, .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .is-valid {
            border-color: #198754 !important;
        }

        .is-invalid {
            border-color: #dc3545 !important;
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .btn-primary {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .input-group-text {
            transition: all 0.3s ease;
        }
    </style>
@endsection