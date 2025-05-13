@extends('admin.layouts.default')

@section('title', 'Categories')

@section('content')
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Categories</h3>
                    </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-end">
                                                <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    Dashboard
                                                </li>
                                            </ol>
                                        </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->
        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row"> <!--begin::Col-->
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="{{ route('manager.create') }}" class="btn btn-primary">Add manager</a>
                            </div> <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th style="width: 150px">Image</th>
                                        <th style="width: 150px">Full name</th>
                                        <th style="width: 150px">membership_status</th>
                                        <th style="width: 150px">position</th>
                                        <th style="width: 150px">workplace</th>
                                        <th style="width: 150px">education</th>
                                        <th style="width: 150px">education_file</th>
                                        <th style="width: 150px">action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($managers as $manager)
                                        <tr class="align-middle">
                                            <td>{{ $manager->id }}</td>
                                            <td>
                                                @if ($manager->thumb)
                                                    <img src="{{ asset($manager->thumb) }}" alt="{{ $manager->full_name }}" style="max-width: 100px;">
                                                @else
                                                    <img src="{{ asset('no-image.png') }}" alt="No image" style="max-width: 100px;">
                                                @endif
                                            </td>
                                            <td>{{ $manager->full_name }}</td>
                                            <td>{{ $manager->membership_status }}</td>
                                            <td>{{ $manager->position }}</td>
                                            <td>{{ $manager->workplace }}</td>
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
                            </div> <!-- /.card-body -->
                            <div class="card-footer clearfix">
{{--                                {{ $manager->links() }}--}}
{{--                                <ul class="pagination pagination-sm m-0 float-end">--}}
{{--                                    <li class="page-item"> <a class="page-link" href="#">«</a> </li>--}}
{{--                                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>--}}
{{--                                    <li class="page-item"> <a class="page-link" href="#">2</a> </li>--}}
{{--                                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>--}}
{{--                                    <li class="page-item"> <a class="page-link" href="#">»</a> </li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>
                    </div>
                </div> <!--end::Row--> <!--begin::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->

@endsection
