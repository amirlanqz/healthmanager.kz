@extends('admin.layouts.default')

@section('title', 'Managers')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Managers</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="{{ route('manager.create') }}" class="btn btn-primary">Add manager</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle">
                                    <thead>
                                    <tr>
                                        <th>Фото</th>
                                        <th>ФИО</th>
                                        <th>Подписка</th>
                                        <th>email</th>
                                        <th>Должность</th>
                                        <th>Место работы</th>
                                        <th>Контактный номер</th>
                                        <th>Соц сети</th>
                                        <th>Дата рождения</th>
                                        <th>Стаж работы</th>
                                        <th>Образование</th>
                                        <th>Документы</th>
                                        <th>Ознакомление</th>
                                        <th>Дата вступления</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($managers as $manager)
                                        <tr>
                                            <td>
                                                @if ($manager->thumb)
                                                    <img src="{{ asset($manager->thumb) }}" alt="{{ $manager->full_name }}" style="max-width: 100px;">
                                                @else
                                                    <img src="{{ asset('no-image.png') }}" alt="No image" style="max-width: 100px;">
                                                @endif
                                            </td>
                                            <td>{{ $manager->full_name }}</td>
                                            <td>{{ $manager->membership_status }}</td>
                                            <td>{{ $manager->email }}</td>
                                            <td>{{ $manager->position }}</td>
                                            <td>{{ $manager->workplace }}</td>
                                            <td>{{ $manager->phone }}</td>
                                            <td>{{ $manager->social_links }}</td>
                                            <td>{{ $manager->birth_date }}</td>
                                            <td>{{ $manager->healthcare_experience }}</td>
                                            <td>{{ $manager->education }}</td>
                                            <td>
                                                @if ($manager->education_file)
                                                    @php
                                                        $files = json_decode($manager->education_file, true);
                                                    @endphp
                                                    @foreach ($files as $file)
                                                        @if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                                                            <img src="{{ asset($file) }}" alt="Diploma" style="max-width: 100px; margin-bottom: 10px;">
                                                        @else
                                                            <a href="{{ asset($file) }}" target="_blank">View {{ pathinfo($file, PATHINFO_BASENAME) }}</a>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <img src="{{ asset('no-image.png') }}" alt="No file" style="max-width: 100px;">
                                                @endif
                                            </td>
                                            <td>{{ $manager->accepted_rules }}</td>
                                            <td>{{ $manager->created_at }}</td>
                                            <td class="d-flex gap-2">
                                                <a href="{{ route('manager.edit', ['manager' => $manager->id]) }}" class="btn btn-info"><i class="bi bi-pencil"></i></a>
                                                <form action="{{ route('manager.destroy', ['manager' => $manager->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" onclick="return confirm('Confirm action')"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="d-flex justify-content-center">
                                {{ $managers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
