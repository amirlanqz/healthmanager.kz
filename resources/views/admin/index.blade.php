@extends('admin.layouts.default')

@section('title', 'Dashboard')


@section('content')
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Dashboard</h3>
                    </div>
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-end">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page">--}}
{{--                                Dashboard--}}
{{--                            </li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->

        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row"> <!--begin::Col-->
                    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                        <div class="small-box text-bg-primary">
                            <div class="inner">
                                <h3>Posts</h3>
                                <h2>{{ \App\Models\Post::count() }}</h2>
                            </div>
                        </div> <!--end::Small Box Widget 1-->
                    </div> <!--end::Col-->
                    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                        <div class="small-box text-bg-success">
                            <div class="inner">
                                <h3>Managers</h3>
                                <h2>{{ \App\Models\Manager::count() }}</h2>
                            </div>
                        </div> <!--end::Small Box Widget 2-->
                    </div> <!--end::Col-->
                    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 3-->
                        <div class="small-box text-bg-warning">
                            <div class="inner">
                                <h3>Users</h3>
                                <h2>{{ \App\Models\User::count() }}</h2>
                            </div>
                        </div> <!--end::Small Box Widget 3-->
                    </div> <!--end::Col-->
                    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 4-->
                        <div class="small-box text-bg-danger">
                            <div class="inner">
                                <h3>Categories</h3>
                                <h2>{{ \App\Models\Category::count() }}</h2>
                            </div>
                        </div> <!--end::Small Box Widget 4-->
                    </div> <!--end::Col-->
                </div> <!--end::Row--> <!--begin::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
@endsection
