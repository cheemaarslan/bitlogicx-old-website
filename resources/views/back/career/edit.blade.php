@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Openings</h5>
                    <form action="{{ route('career.destroy', $career) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mt-3">Delete Opening</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('career.update', $career) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="career_name">Opening Name</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text"
                                            class="form-control @error('career_name') is-invalid @enderror"
                                            name="career_name" value="{{ $career->career_name }}">
                                        @error('career_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12">
                            <label for="">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ $career->description }}</textarea>

                        </div>
                        <div class="col-12">
                            <label for="">Body</label>
                            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{ $career->body }}</textarea>

                        </div>
                    </div>
                </div>
            </div>
        
        <div class="col-lg-4 col-12">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="stataus">Select Opening Category: </label>
                                <div class="input-group">
                                    <select class="form-control" name="career_category_id">
                                        @foreach ($career_categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="stataus">Status: </label>
                                <div class="input-group">
                                    <select class="form-control" name="status">
                                        <option value="Publish" {{ $career->status == 'Publish' ? 'selected' : '' }}>
                                            Publish</option>
                                        <option value="Draft" {{ $career->status == 'Draft' ? 'selected' : '' }}>Draft
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="meta_keyword">Meta Keyword: </label>
                                <select class="form-control" name="meta_keyword[]" id="meta_keyword" multiple>
                                    @foreach ($career->meta_keyword as $item)
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="meta_description">Meta Description:</label>
                                <textarea name="meta_description" class="form-control">{{ $career->meta_description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update career</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
@section('script')
 {{-- <script src="{{ asset('back/assets/vendor/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/select2/dist/js/select2.min.js') }}"></script> --}}

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Please select as option",

            });
            $('#meta_keyword').select2({
                tags: true,
                placeholder: "Please Enter Tags Here",

            });


            tinymce.init({
                selector: 'textarea#body',
                plugins: 'advlist anchor autolink charmap code codesample directionality help image editimage insertdatetime link lists media nonbreaking pagebreak preview searchreplace table template tableofcontents visualblocks wordcount',
                toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat',
            });
        });
    </script>
@endsection
