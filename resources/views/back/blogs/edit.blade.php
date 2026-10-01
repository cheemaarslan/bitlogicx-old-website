@extends('back.layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-2">Update Blog</h5>
                    <div class="card-header-elements ms-auto">
                        <form action="{{ route('blog.destroy', $blog) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete Blog</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('blog.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="blog_name">Blog Name</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text"
                                            class="form-control @error('blog_name') is-invalid @enderror"
                                            name="blog_name" value="{{ $blog->blog_name }}">
                                        @error('blog_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="author_name">Author Name</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text"
                                            class="form-control @error('author_name') is-invalid @enderror"
                                            name="author_name" value="{{ $blog->author_name }}">
                                        @error('author_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3 row">
                                <label class="form-label" for="author_image">Previwed Author Image</label>
                                <img src="{{ $blog->author_image }}" alt="" style="width: 200px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="author_image">Author Image</label>
                                <input type="file" class="form-control" name="author_image">
                                @error('author_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="date">Date</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                                        <input type="text" class="form-control @error('date') is-invalid @enderror"
                                            name="date" id="date" value="{{ $blog->date }}">
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="sub_description">Sub Description</label>
                                    <div class="input-group input-group-merge">
                                        <textarea class="form-control @error('sub_description') is-invalid @enderror" name="sub_description"
                                                  id="sub_description" value="{{ old('sub_description') }}">{{ $blog->sub_description }}</textarea>
                                        @error('sub_description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" rows="10" cols="10"
                                        name="description" id="description">{{ $blog->description }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-3 row">
                                <label class="form-label" for="blog_image">Previwed Blog Image</label>
                                <img src="{{ $blog->blog_image }}" alt="" style="width: 200px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="blog_image">Blog Image</label>
                                <input type="file" class="form-control" name="blog_image">
                                @error('blog_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status: </label>
                                    <div class="input-group">
                                        <select class="form-control" name="status">
                                            <option value="Publish" {{ $blog->status == 'Publish' ? 'selected' : '' }}>
                                                Publish</option>
                                            <option value="Draft" {{ $blog->status == 'Draft' ? 'selected' : '' }}>
                                                Draft</option>
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
                                    <label class="form-label" for="meta_tag">Meta Tag: </label>
                                    <select class="form-control select2" name="meta_tag[]" id="meta_tag" multiple>
                                        @if ($blog->meta_tag)
                                            @foreach ($blog->meta_tag as $item)
                                                <option value="{{ $item }}" selected>{{ $item }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('meta_tag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_title">Meta Title:</label>
                                    <textarea name="meta_title" class="form-control">{{ old('meta_title', $blog->meta_title) }}</textarea>
                                    @error('meta_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_description">Meta Description:</label>
                                    <textarea name="meta_description" class="form-control">{{ $blog->meta_description }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_keyword">Meta Keyword: </label>
                                    <select class="form-control" name="meta_keyword[]" id="meta_keyword" multiple>
                                        @if (is_array($blog->meta_keyword))
                                            @foreach ($blog->meta_keyword as $item)
                                                <option value="{{ $item }}" selected>{{ $item }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="og_title">OG Title:</label>
                                    <textarea name="og_title" class="form-control">{{ old('og_title', $blog->og_title) }}</textarea>
                                    @error('og_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="og_description">OG Description:</label>
                                    <textarea name="og_description" class="form-control">{{ old('og_description', $blog->og_description) }}</textarea>
                                    @error('og_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <img src="{{ $blog->og_image }}" alt="og_image" style="width: 200px;">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="og_image">OG Image</label>
                                <input type="file" class="form-control" name="og_image">
                                @error('og_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Blog</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script src="{{ asset('back/assets/vendor/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Please select an option",
            });
            $('#meta_keyword').select2({
                tags: true,
                placeholder: "Please Enter Tags Here",
            });
            $('#meta_tag').select2({
                tags: true,
                placeholder: "Please Enter Tags Here",
            });
            tinymce.init({
                selector: 'textarea#description',
                plugins: 'advlist anchor autolink charmap code codesample directionality help image editimage insertdatetime link lists media nonbreaking pagebreak preview searchreplace table template tableofcontents visualblocks wordcount',
                toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat',
            });
            // Initialize Bootstrap Datepicker
            $('#date').datepicker({
                format: 'yyyy-mm-dd', // Set desired date format
                autoclose: true, // Close the datepicker when a date is selected
            });

        });
    </script>
@endsection
