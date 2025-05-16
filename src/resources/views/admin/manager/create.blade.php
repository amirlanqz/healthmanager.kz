@extends('admin.layouts.default')

@section('title', 'New Manager')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">New Manager</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('manager.index') }}">Managers</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Manager</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Create New Manager</div>
                        </div>
                        <form action="{{ route('manager.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!-- Image -->
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

                                <!-- Full name -->
                                <div class="row mb-3">
                                    <label for="full_name" class="col-sm-2 col-form-label required">ФИО</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="full_name" class="form-control" id="full_name" value="{{ old('full_name') }}">
                                    </div>
                                </div>

                                <!-- Membership Status -->
                                <div class="row mb-3">
                                    <label for="membership_status" class="col-sm-2 col-form-label required">Membership Status</label>
                                    <div class="col-sm-10">
                                        <select name="membership_status" class="form-control" id="membership_status">
                                            <option value="Ассоциированный член" {{ old('membership_status') == 'Ассоциированный член' ? 'selected' : '' }}>Ассоциированный член</option>
                                            <option value="Полноправный менеджер" {{ old('membership_status') == 'Полноправный менеджер' ? 'selected' : '' }}>Полноправный менеджер</option>
                                            <option value="ТОП менеджер" {{ old('membership_status') == 'ТОП менеджер' ? 'selected' : '' }}>ТОП менеджер</option>
                                        </select>
                                        @error('membership_status')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                                    </div>
                                </div>

                                <!-- Position -->
                                <div class="row mb-3">
                                    <label for="position" class="col-sm-2 col-form-label">Должность</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="position" class="form-control" id="position" value="{{ old('position') }}">
                                    </div>
                                </div>

                                <!-- Workplace -->
                                <div class="row mb-3">
                                    <label for="workplace" class="col-sm-2 col-form-label">Место работы</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="workplace" class="form-control" id="workplace" value="{{ old('workplace') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label">Контактный номер</label>
                                    <div class="col-sm-10">
                                        <input type="tel" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="social_links" class="col-sm-2 col-form-label">Социальные сети</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="social_links" class="form-control" id="social_links" value="{{ old('social_links') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="birth_date" class="col-sm-2 col-form-label">Дата рождения </label>
                                    <div class="col-sm-10">
                                        <input type="date" name="birth_date" class="form-control" id="birth_date" value="{{ old('birth_date') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="healthcare_experience" class="col-sm-2 col-form-label">Стаж работы в здравоохранении</label>
                                    <select class="form-select" name="healthcare_experience" id="healthcare_experience">
                                        <option value="" selected disabled>Выберите стаж</option>
                                        <option value="Менее 1 года">Менее 1 года</option>
                                        <option value="1-3 года">1-3 года</option>
                                        <option value="3-5 лет">3-5 лет</option>
                                        <option value="5-10 лет">5-10 лет</option>
                                        <option value="Более 10 лет">Более 10 лет</option>
                                    </select>
                                </div>

                                <div class="row mb-3">
                                    <input class="form-check-input" type="checkbox" name="accepted_rules" id="accepted_rules" value="1" required>
                                    <label class="form-check-label" for="accepted_rules">
                                        Я ознакомился с Уставом и Правилами вступления в члены Республиканского общественного объединения
                                        «Казахстанская ассоциация менеджеров здравоохранения», понимаю их содержание и принимаю их условия.
                                        Я обязуюсь соответствовать требованиям, предъявляемым члену Объединения и понимаю ответственность в рамках членства в Объединении.
                                    </label>
                                    <div class="invalid-feedback">Вы должны принять условия перед отправкой</div>
                                </div>


                                <!-- Education -->
                                <div class="row mb-3">
                                    <label for="education" class="col-sm-2 col-form-label">Образование</label>
                                    <div class="col-sm-10">
                                        <textarea name="education" class="form-control" id="education" rows="4" placeholder="Describe education (e.g., Bachelor, MSU, 2010)">{{ old('education') }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="education_file" class="col-sm-2 col-form-label">Документ об образовании</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="education_file[]" class="form-control" id="education_file" accept=".pdf,image/*" multiple>
                                        <small class="form-text text-muted">Upload diplomas (PDF or images). You can select multiple files.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
