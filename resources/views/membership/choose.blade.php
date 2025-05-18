@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeIn" data-wow-delay="0.1s">
            <h2 class="display-4 fw-bold text-primary mb-3">Выберите тип членства</h2>
            <p class="lead text-muted">Присоединяйтесь к нашему профессиональному сообществу и получите доступ к эксклюзивным возможностям</p>
        </div>

        <div class="row g-4">
            <!-- Ассоциированный член -->
            <div class="col-lg-4 col-md-6">
                <div class="card membership-card h-100 border-0 shadow-sm wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-header bg-purple bg-opacity-10 text-primary py-4">
                        <h4 class="my-0 fw-normal text-center">Ассоциированный член</h4>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title pricing-card-title text-center mb-4">
                            9 500 <small class="text-muted">тг/год</small>
                        </h3>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Для специалистов из других сфер</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Для докторантов и магистрантов</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Для студентов и резидентов</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Доступ к базовым ресурсам</li>
                        </ul>
                        <div class="mt-auto text-center">
                            <a href="{{ route('membership.form', ['type' => 'basic']) }}"
                               class="btn btn-lg btn-primary rounded-pill px-4 py-2">
                                Выбрать этот план
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Полноправный менеджер -->
            <div class="col-lg-4 col-md-6">
                <div class="card membership-card h-100 border-0 shadow-sm wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card-header bg-purple bg-opacity-10 text-primary py-4">
                        <h4 class="my-0 fw-normal text-center">Полноправный менеджер</h4>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title pricing-card-title text-center mb-4">
                            25 000 <small class="text-muted">тг/год</small>
                        </h3>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Для заместителей руководителей</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Для линейных руководителей</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Для менеджеров департаментов</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Полный доступ к ресурсам</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Участие в закрытых мероприятиях</li>
                        </ul>
                        <div class="mt-auto text-center">
                            <a href="{{ route('membership.form', ['type' => 'full']) }}"
                               class="btn btn-lg btn-primary rounded-pill px-4 py-2">
                                Выбрать этот план
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ТОП менеджер -->
            <div class="col-lg-4 col-md-6">
                <div class="card membership-card h-100 border-0 shadow-sm wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card-header bg-purple bg-opacity-10 text-purple py-4">
                        <h4 class="my-0 fw-normal text-center">ТОП менеджер</h4>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title pricing-card-title text-center mb-4">
                            40 000 <small class="text-muted">тг/год</small>
                        </h3>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Для руководителей клиник</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Все преимущества полного членства</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> VIP доступ к мероприятиям</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Персональный менеджер</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Возможность влиять на решения ассоциации</li>
                        </ul>
                        <div class="mt-auto text-center">
                            <a href="{{ route('membership.form', ['type' => 'top']) }}"
                               class="btn btn-lg btn-primary rounded-pill px-4 py-2">
                                Выбрать этот план
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

