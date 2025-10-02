@extends('layouts.default')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4 fw-bold text-primary">
                        📢 Приглашаем на форум
                    </h2>

                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <p class="text-center mb-5 text-muted">
                        Мы рады пригласить вас принять участие в нашем форуме.<br>
                        Оставьте заявку — и мы свяжемся с вами.
                    </p>

                    <form action="{{ route('forum.apply') }}" method="POST">
                        @csrf

                        <!-- ФИО -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">Ф.И.О *</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                            @error('name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Телефон -->
                        <div class="mb-4">
                            <label for="contact" class="form-label fw-semibold">Телефон *</label>
                            <input type="text" class="form-control form-control-lg" id="contact" name="contact" required>
                            @error('contact')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Место работы -->
                        <div class="mb-4">
                            <label for="job" class="form-label fw-semibold">Место работы *</label>
                            <input type="text" class="form-control form-control-lg" id="job" name="job" required>
                            @error('job')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Членство -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold d-block">
                                Являетесь ли Вы членом РОО <br>
                                «Казахстанская Ассоциация менеджеров здравоохранения»? *
                            </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="member_yes" name="is_member" value="Да" required>
                                <label class="form-check-label" for="member_yes">Да</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="member_no" name="is_member" value="Нет" required>
                                <label class="form-check-label" for="member_no">Нет</label>
                            </div>
                            @error('is_member')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <!-- Если "Нет", то блок вступления -->
                       <div class="mb-4" id="join_kamz_block">
                            <label class="form-label fw-semibold d-block">
                                Если нет, готовы ли Вы вступить в КАМЗ?
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="join_yes" name="join_kamz" value="Да">
                                <label class="form-check-label" for="join_yes">
                                    Да <br>
                                    <small>
                                        <a href="{{ route('membership.store') }}" target="_blank">Вступить в сообщество</a>
                                    </small>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="join_no" name="join_kamz" value="Нет, нужен разовый билет">
                                <label class="form-check-label" for="join_no">
                                    Нет, нужен разовый билет <br>
                                    <small>
                                        Разовый билет можно приобрести на 
                                        <a href="https://ticketon.kz/astana/event/pyatyy-respublikanskiy-forum-zdravookhraneniya-kostanay" target="_blank">Ticketon</a>.
                                    </small>
                                </label>
                            </div>
                        </div>


                        

                        <!-- Кнопки -->
                        <div class="d-flex justify-content-between align-items-center mt-5">
                            <button type="submit" class="btn btn-lg btn-primary px-4 rounded-3 shadow-sm">
                                🚀 Оставить заявку
                            </button>
                            <a href="{{ asset('file/forum.pdf') }}" class="btn btn-lg btn-success px-4 rounded-3 shadow-sm" download>
                                📄 Программа форума
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Дополнительный контент -->
          <!-- Модальное окно "О форуме" -->
            <div class="modal fade" id="forumInfoModal" tabindex="-1" aria-labelledby="forumInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded-4 shadow-lg">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-secondary" id="forumInfoModalLabel">ℹ️ О форуме</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-2">🎓 V Республиканский форум руководителей здравоохранения</p>
                    <p class="mb-2">📅 10–11 октября 2025 года</p>
                    <p class="mb-2">📍 Astana IT University, г. Астана, проспект Мангилик Ел, С1</p>
                    <p class="mb-2">✅ Для членов Ассоциации участие бесплатное.</p>
                    <p class="mb-2">💳 Для остальных разовый билет стоит <strong>40 000 тг</strong>.</p>
                    <p class="fw-semibold text-success">
                        ⚡ При регистрации вы автоматически становитесь членом Ассоциации, 
                        а в стоимость билета входит годовое членство.
                    </p>
                    <p class="mt-3 text-center fw-bold text-dark">
                        Присоединяйтесь к ключевому событию года в сфере управления здравоохранением!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <a href="{{ route('forum.form') }}" class="btn btn-primary" data-bs-dismiss="modal">🚀 Оставить заявку</a>
                </div>
                </div>
            </div>
            </div>

{{-- Скрипт автопоказа --}}
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var forumModal = new bootstrap.Modal(document.getElementById('forumInfoModal'));
        forumModal.show();
    });
</script>
@endpush
@endsection