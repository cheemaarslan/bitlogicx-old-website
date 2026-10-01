@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Add New Service</h5>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label" for="banner_service_image">SELECT BANNER IMAGE</label>
                                <input type="file" class="form-control" name="banner_service_image">

                                @error('banner_service_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="subtitle">Service Subtitle</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                                            name="subtitle" value="{{ old('subtitle') }}">
                                        @error('subtitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="service_name">Service Name</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text"
                                            class="form-control @error('service_name') is-invalid @enderror"
                                            name="service_name" value="{{ old('service_name') }}">
                                        @error('service_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="sub_description">SUB DESCRIPTION</label>
                                    <textarea class="form-control @error('sub_description') is-invalid @enderror" name="sub_description"
                                        id="sub_description" value="{{ old('sub_description') }}"></textarea>
                                    @error('sub_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="description">DESCRIPTION</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="service_image">SERVICE IMAGE</label>
                                <input type="file" class="form-control" name="service_image">

                                @error('service_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
{{--                            <div class="col-12">--}}
{{--                                <button type="button" id="addCardBtn" class="btn btn-primary">Add Card</button>--}}
{{--                            </div>--}}
{{--                            <div id="cardContainer" class="col-12 mt-3">--}}
{{--                                <!-- Cards will be dynamically added here -->--}}
{{--                            </div>--}}

                            <!-- Display Cards Container -->
{{--                            <div id="displayCardContainer" class="col-12 mt-3">--}}
{{--                                <!-- Saved cards will be displayed here -->--}}
{{--                            </div>--}}
                            <!-- Card Template (Hidden) -->
{{--                            <div id="cardTemplate" style="display: none;">--}}
{{--                                <div class="card mb-3">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <input type="text" class="form-control card-title" placeholder="Card Title">--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <textarea class="form-control card-description" placeholder="Card Description"></textarea>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-footer">--}}
{{--                                        <button type="button" class="btn btn-success saveCardBtn">Save</button>--}}
{{--                                        <button type="button" class="btn btn-danger deleteCardBtn">Delete</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
                                            <option value="Publish" selected>Publish</option>
                                            <option value="Draft">Draft</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Add this toggle button for "Display on Home Page" -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="display_on_homepage">Display Service on Homepage:
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="display_on_homepage"
                                                value="1">
                                            <label class="form-check-label" for="display_on_homepage">
                                                Display on Homepage
                                            </label>
                                        </div>
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
                                    <select class="form-control" name="meta_tag[]" id="meta_tag" multiple>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_title">Meta Title:</label>
                                    <textarea name="meta_title" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_description">Meta Description:</label>
                                    <textarea name="meta_description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_keyword">Meta Keyword: </label>
                                    <select class="form-control" name="meta_keyword[]" id="meta_keyword" multiple>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="og_title">OG Title:</label>
                                    <textarea name="og_title" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="og_description">OG Description:</label>
                                    <textarea name="og_description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <label>OG Image</label>
                                <input type="file" class="form-control" name="og_image">

                                @error('og_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Create Service</button>
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
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Please select as option",
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
        });

        // $(document).ready(function() {
        //     let cardIndex = 1;
        //
        //     $('#addCardBtn').click(function() {
        //         let cardTemplate = $('#cardTemplate').html();
        //         $('#cardContainer').append(cardTemplate);
        //         cardIndex++;
        //     });
        //
        //     $(document).on('click', '.saveCardBtn', function() {
        //         let card = $(this).closest('.card');
        //         let title = card.find('.card-title').val();
        //         let description = card.find('.card-description').val();
        //
        //         // Display the card information in a visible format
        //         let cardHtml = `
        //             <div class="card mb-3">
        //                 <div class="card-header">${title}</div>
        //                 <div class="card-body">${description}</div>
        //             </div>
        //         `;
        //
        //         // Append the card HTML to the card container
        //         $('#displayCardContainer').append(cardHtml);
        //
        //         // Optionally, you can remove the card from the UI after saving the data
        //         card.remove();
        //     });
        //
        //     $(document).on('click', '.deleteCardBtn', function() {
        //         $(this).closest('.card').remove();
        //     });
        // });
    </script>
@endsection
