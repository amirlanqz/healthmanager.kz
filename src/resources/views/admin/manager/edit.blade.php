@extends('admin.layouts.default')

@section('title', 'Edit Manager')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit Manager</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('manager.index') }}">Managers</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Manager</li>
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
                            <div class="card-title">Edit Manager</div>
                        </div>
                        <form action="{{ route('manager.update', $manager->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <!-- Image -->
                                <div class="row mb-3">
                                    <label for="thumb" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        @if ($manager->thumb)
                                            <div class="mb-2">
                                                <img src="{{ Storage::url($manager->thumb) }}" alt="Current Image" style="max-width: 150px; max-height: 150px;">
                                                <p>Current image: {{ basename($manager->thumb) }}</p>
                                            </div>
                                        @endif
                                        <input type="file" name="thumb" class="form-control" id="thumb" accept="thumb/*">
                                        <small class="form-text text-muted">Upload a new image to replace the current one (optional).</small>
                                        @error('thumb')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Full name -->
                                <div class="row mb-3">
                                    <label for="full_name" class="col-sm-2 col-form-label required">Full name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="full_name" class="form-control" id="full_name" value="{{ old('full_name', $manager->full_name) }}">
                                        @error('full_name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Membership Status -->
                                <div class="row mb-3">
                                    <label for="membership_status" class="col-sm-2 col-form-label required">Membership Status</label>
                                    <div class="col-sm-10">
                                        <select name="membership_status" class="form-control" id="membership_status">
                                            <option value="top_manager" {{ old('membership_status', 'top_manager') == 'top_manager' ? 'selected' : '' }}>Полноправный член - Топ менеджер</option>
                                            <option value="health_manager" {{ old('membership_status') == 'health_manager' ? 'selected' : '' }}>Полноправный член - Менеджер здравоохранения</option>
                                            <option value="seo" {{ old('membership_status') == 'seo' ? 'selected' : '' }}>Полноправный член - Менеджер здравоохранения, учредитель</option>
                                        </select>
                                        @error('membership_status')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Position -->
                                <div class="row mb-3">
                                    <label for="position" class="col-sm-2 col-form-label">Position</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="position" class="form-control" id="position" value="{{ old('position', $manager->position) }}">
                                        @error('position')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Workplace -->
                                <div class="row mb-3">
                                    <label for="workplace" class="col-sm-2 col-form-label">Workplace</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="workplace" class="form-control" id="workplace" value="{{ old('workplace', $manager->workplace) }}">
                                        @error('workplace')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Education -->
                                <div class="row mb-3">
                                    <label for="education" class="col-sm-2 col-form-label">Education</label>
                                    <div class="col-sm-10">
                                        <textarea name="education" class="form-control" id="education" rows="4" placeholder="Describe education (e.g., Bachelor, MSU, 2010)">{{ old('education', $manager->education) }}</textarea>
                                        @error('education')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Diploma File(s) -->
                                <div class="row mb-3">
                                    <label for="education_file" class="col-sm-2 col-form-label">Diploma File(s)</label>
                                    <div class="col-sm-10">
                                        <!-- Display existing files -->
                                        @if ($manager->education_file && is_array(json_decode($manager->education_file, true)))
                                            <div class="mb-3">
                                                <p>Current files:</p>
                                                @foreach (json_decode($manager->education_file, true) as $file)
                                                    <div class="form-check">
                                                        <input type="checkbox" name="delete_files[]" value="{{ $file }}" class="form-check-input" id="delete_file_{{ $loop->index }}">
                                                        <label class="form-check-label" for="delete_file_{{ $loop->index }}">
                                                            <a href="{{ Storage::url($file) }}" target="_blank">{{ basename($file) }}</a> (Check to delete)
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        <!-- Input for new files -->
                                        <input type="file" name="education_file[]" class="form-control" id="education_file" accept=".pdf,image/*" multiple>
                                        <small class="form-text text-muted">Upload one or more new diploma files (PDF or image) to add to existing files.</small>
                                        @error('education_file.*')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
                                <a href="{{ route('manager.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
