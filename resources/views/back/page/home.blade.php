@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Home Page Manager</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Banner Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('page.home.banner') }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Banner Heading: <span class="text-danger">*</span></label>
                                    <input type="text" name="banner_heading"
                                        class="form-control @error('banner_heading') is-invalid @enderror"
                                        value="{{ $home->banner_heading }}" required>
                                    @error('banner_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Banner Description: <span class="text-danger">*</span></label>
                                    <input type="text" name="banner_description"
                                        class="form-control @error('banner_description') is-invalid @enderror"
                                        value="{{ $home->banner_description}}" required>
                                    {{-- <textarea class="form-control @error('banner_description') is-invalid @enderror" name="banner_description"
                                        id="banner_description" required>{{ $home->banner_description }}</textarea> --}}
                                    @error('banner_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if ($home->banner_image)
                                <div class="col-12">
                                    <label for="">Banner Image</label><br>
                                    <img src="{{ $home->banner_image }}" alt="Banner Image" style="width: 200px;">
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Banner Image: </label>
                                    <input type="file" name="banner_image"
                                        class="form-control @error('banner_image') is-invalid @enderror">
                                    @error('banner_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Button Text: <span class="text-danger">*</span></label>
                                    <input type="text" name="banner_button_text"
                                        class="form-control @error('banner_button_text') is-invalid @enderror"
                                        value="{{ $home->banner_button_text }}" required>
                                    @error('banner_button_text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Button Link: <span class="text-danger">*</span></label>
                                    <input type="text" name="banner_button_link"
                                        class="form-control @error('banner_button_link') is-invalid @enderror"
                                        value="{{ $home->banner_button_link }}" required>
                                    @error('banner_button_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="enable_banner_section"
                                            value="1" id="enable_banner_section"
                                            {{ $home->enable_banner_section ? 'checked' : '' }}>
                                        <label class="form-check-label" for="enable_banner_section"> Enable Section </label>
                                    </div>
                                    @error('enable_banner_section')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Our Work Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('page.home.project') }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Project Heading: <span class="text-danger">*</span></label>
                                    <input type="text" name="project_heading"
                                        class="form-control @error('project_heading') is-invalid @enderror"
                                        value="{{ $home->project_heading }}" required>
                                    @error('project_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Project Limit: <span class="text-danger">*</span></label>
                                    <input type="number" name="project_limit"
                                        class="form-control @error('project_limit') is-invalid @enderror"
                                        value="{{ $home->project_limit }}" required>
                                    @error('project_limit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="enable_project_section"
                                            value="1" id="enable_project_section"
                                            {{ $home->enable_project_section ? 'checked' : '' }}>
                                        <label class="form-check-label" for="enable_project_section"> Enable Section
                                        </label>
                                    </div>
                                    @error('enable_project_section')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Service Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('page.home.service') }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Service Text: <span class="text-danger">*</span></label>
                                    <input type="text" name="service_heading"
                                        class="form-control @error('service_heading') is-invalid @enderror"
                                        value="{{ $home->service_heading }}" required>
                                    @error('service_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Service Limit: <span class="text-danger">*</span></label>
                                    <input type="number" name="service_limit"
                                        class="form-control @error('service_limit') is-invalid @enderror"
                                        value="{{ $home->service_limit }}" required>
                                    @error('service_limit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="enable_service_section"
                                            value="1" id="enable_service_section"
                                            {{ $home->enable_service_section ? 'checked' : '' }}>
                                        <label class="form-check-label" for="enable_service_section"> Enable Section
                                        </label>
                                    </div>
                                    @error('enable_service_section')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Process Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('page.home.process') }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Process Text: <span class="text-danger">*</span></label>
                                    <input type="text" name="process_heading"
                                        class="form-control @error('process_heading') is-invalid @enderror"
                                        value="{{ $home->process_heading }}" required>
                                    @error('process_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Process Limit: <span class="text-danger">*</span></label>
                                    <input type="number" name="process_limit"
                                        class="form-control @error('process_limit') is-invalid @enderror"
                                        value="{{ $home->process_limit }}" required>
                                    @error('process_limit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="enable_process_section"
                                            value="1" id="enable_process_section"
                                            {{ $home->enable_process_section ? 'checked' : '' }}>
                                        <label class="form-check-label" for="enable_process_section"> Enable Section
                                        </label>
                                    </div>
                                    @error('enable_process_section')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Team Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('page.home.team') }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Team Text: <span class="text-danger">*</span></label>
                                    <input type="text" name="team_heading"
                                        class="form-control @error('team_heading') is-invalid @enderror"
                                        value="{{ $home->team_heading }}" required>
                                    @error('team_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Team Limit: <span class="text-danger">*</span></label>
                                    <input type="number" name="team_limit"
                                        class="form-control @error('team_limit') is-invalid @enderror"
                                        value="{{ $home->team_limit }}" required>
                                    @error('team_limit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="enable_team_section"
                                            value="1" id="enable_team_section"
                                            {{ $home->enable_team_section ? 'checked' : '' }}>
                                        <label class="form-check-label" for="enable_team_section"> Enable Section </label>
                                    </div>
                                    @error('enable_team_section')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('back/assets/vendor/libs/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea#banner_description',
            plugins: 'advlist anchor autolink charmap code codesample directionality help image insertdatetime link lists media nonbreaking pagebreak preview searchreplace table template visualblocks wordcount',
            toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat',
        });
    </script>
@endsection