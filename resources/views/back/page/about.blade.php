@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">About Page Manager</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Body Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('page.about.update') }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Banner Heading</label>
                                    <input type="text" name="banner_heading"
                                        class="form-control @error('banner_heading') is-invalid @enderror"
                                        value="{{ $about->banner_heading }}">
                                    @error('banner_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Body</label>
                                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{ $about->body }}</textarea>

                                    @error('body')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
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
            selector: 'textarea#body',
            plugins: 'advlist anchor autolink charmap code codesample directionality help image insertdatetime link lists media nonbreaking pagebreak preview searchreplace table template visualblocks wordcount',
            toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat',
        });
    </script>
@endsection
