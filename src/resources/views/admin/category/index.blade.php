@extends('admin.layouts.default')

@section('title', 'Categories')

@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
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
                                <a href="{{ route('categories.create') }}" class="btn btn-primary">Add category</a>
                            </div> <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th>Title</th>
                                        <th style="width: 150px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                    <tr class="align-middle">

                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>
                                            <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-info"><i class="bi bi-pencil"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $categories->links() }}
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
    </main>
@endsection
