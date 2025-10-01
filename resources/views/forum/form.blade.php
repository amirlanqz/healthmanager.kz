@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <h2 class="text-center mb-4">Приглашаем на форум</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <p class="text-center">
                    Приглашаем вас принять участие в нашем форуме. 
                    Оставьте заявку — мы свяжемся с вами.
                </p>

                <form action="{{ route('forum.apply') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">Ф.И.О</label>
                        <input type="text" class="form-control" id="name" name="name" required
                               style="color: #000; background-color: #fff;">
                        @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="contact" class="form-label">Телефон</label>
                        <input type="text" class="form-control" id="contact" name="contact" required
                               style="color: #000; background-color: #fff;">
                        @error('contact')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="job" class="form-label">Место работы</label>
                        <input type="text" class="form-control" id="job" name="job" required
                               style="color: #000; background-color: #fff;">
                        @error('job')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <button type="submit" class="btn btn-primary">Оставить заявку</button>
                        <a href="{{ asset('file/forum.pdf') }}" class="btn btn-success" download>
                            📄 Скачать инструкцию
                        </a>
                    </div>
                </form>

                <!-- Дополнительный контент -->
                <div class="mt-5">
                    <h3 class="text-center mb-3">О форуме</h3>
                    <p>
                        🎓 V Республиканский форум руководителей здравоохранения <br>
                        📅 10–11 октября 2025 года <br>
                        📍 Astana IT University, г. Астана, проспект Мангилик Ел, С1
                    </p>
                    <p>
                        Казахстанская ассоциация менеджеров здравоохранения приглашает университеты 
                        принять участие в Ярмарке-выставке обучающих программ MBA в сфере здравоохранения 
                        — впервые в рамках форума!
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Подключение маски для телефона --}}
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#contact').mask('+7 (700) 000-00-00');
        });
    </script>
    @endpush
@endsection
