@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-2">Update Service</h5>
                    <div class="card-header-elements ms-auto">
                        <form action="{{ route('service.destroy', $service) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete Service</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('service.update', $service) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <img src="{{ $service->banner_service_image }}" alt="" style="width: 200px;">
                            </div>
                            <div class="col-12 mb-3">
                                <label>Banner Service Image</label>
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
                                            name="subtitle" value="{{ old('subtitle', $service->subtitle) }}">
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
                                            name="service_name" value="{{ old('service_name', $service->service_name) }}">
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
                                        id="sub_description" value="{{ old('sub_description') }}">{{ $service->sub_description }}</textarea>
                                    @error('sub_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{ old('description', $service->description) }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <img src="{{ $service->service_image }}" alt="" style="width: 200px;">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="service_image">Service Image</label>
                                <input type="file" class="form-control" name="service_image">
                                @error('service_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Add hidden inputs to store cards data -->
{{--                        @foreach ($service->cards as $card)--}}
{{--                            <input type="hidden" name="cards[{{ $loop->index }}][id]" value="{{ $card->id }}">--}}
{{--                            <input type="hidden" name="cards[{{ $loop->index }}][title]" value="{{ $card->title }}">--}}
{{--                            <input type="hidden" name="cards[{{ $loop->index }}][description]"--}}
{{--                                value="{{ $card->description }}">--}}
{{--                        @endforeach--}}

{{--                        <div class="row">--}}
{{--                            <!-- Card Management Section -->--}}
{{--                            <div class="col-12">--}}
{{--                                <div id="displayCardContainer">--}}
{{--                                    @foreach ($service->cards as $card)--}}
{{--                                        <div class="card mb-3" data-card-id="{{ $card->id }}">--}}
{{--                                            <div class="card-header">{{ $card->title }}</div>--}}
{{--                                            <div class="card-body">{{ $card->description }}</div>--}}
{{--                                            <div class="card-footer">--}}
{{--                                                <button type="button" class="btn btn-primary editCardBtn">Edit</button>--}}
{{--                                                <button type="button"--}}
{{--                                                    class="btn btn-danger deleteCardBtn">Delete</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Hidden fields for card data -->--}}
{{--                        <div id="cardFieldsContainer">--}}
{{--                            @foreach ($service->cards as $card)--}}
{{--                                <input type="hidden" name="cards[{{ $card->id }}][title]"--}}
{{--                                    value="{{ $card->title }}">--}}
{{--                                <input type="hidden" name="cards[{{ $card->id }}][description]"--}}
{{--                                    value="{{ $card->description }}">--}}
{{--                            @endforeach--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <button type="button" id="addCardBtn" class="btn btn-primary mb-3">Add Card</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
                                            <option value="Publish"
                                                {{ old('status', $service->status) === 'Publish' ? 'selected' : '' }}>
                                                Publish</option>
                                            <option value="Draft"
                                                {{ old('status', $service->status) === 'Draft' ? 'selected' : '' }}>
                                                Draft</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Add this toggle button for "Display on Home Page" -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="display_on_home">Display on Home Page:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="display_on_home"
                                                name="display_on_homepage"
                                                {{ old('display_on_homepage', $service->display_on_homepage) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="display_on_home">
                                                Display on Home Page
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
                                    <select class="form-control select2" name="meta_tag[]" id="meta_tag" multiple>
                                        @if ($service->meta_tag)
                                            @foreach ($service->meta_tag as $item)
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
                                    <textarea name="meta_title" class="form-control">{{ old('meta_title', $service->meta_title) }}</textarea>
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
                                    <textarea name="meta_description" class="form-control">{{ old('meta_description', $service->meta_description) }}</textarea>
                                    @error('meta_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_keyword">Meta Keyword: </label>
                                    <select class="form-control select2" name="meta_keyword[]" id="meta_keyword"
                                        multiple>
                                        @foreach ($service->meta_keyword as $item)
                                            <option value="{{ $item }}" selected>{{ $item }}</option>
                                        @endforeach
                                    </select>
                                    @error('meta_keyword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="og_title">OG Title:</label>
                                    <textarea name="og_title" class="form-control">{{ old('og_title', $service->og_title) }}</textarea>
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
                                    <textarea name="og_description" class="form-control">{{ old('og_description', $service->og_description) }}</textarea>
                                    @error('og_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <img src="{{ $service->og_image }}" alt="" style="width: 200px;">
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
                                <button type="submit" class="btn btn-primary">Update Service</button>
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

            // Add event listener for the add card button
    //         $('#addCardBtn').click(function() {
    //             addCard();
    //         });
    //
    //         // Add event listener for saving a new card
    //         $(document).on('click', '.saveCardBtn', function() {
    //             saveCard($(this));
    //         });
    //
    //         // Add event listener for editing a card
    //         $(document).on('click', '.editCardBtn', function() {
    //             editCard($(this));
    //         });
    //
    //         // Add event listener for updating a card
    //         $(document).on('click', '.updateCardBtn', function() {
    //             updateCard($(this));
    //         });
    //
    //         // Add event listener for canceling card edit
    //         $(document).on('click', '.cancelEditBtn', function() {
    //             cancelEdit($(this));
    //         });
    //
    //         // Add event listener for deleting a card
    //         $(document).on('click', '.deleteCardBtn', function() {
    //             deleteCard($(this));
    //         });
    //
    //         // Function to add a new card
    //         function addCard() {
    //             let cardTemplate = `
    //         <div class="card mb-3">
    //             <div class="card-header">
    //                 <input type="text" class="form-control card-title" placeholder="Card Title">
    //             </div>
    //             <div class="card-body">
    //                 <textarea class="form-control card-description" placeholder="Card Description"></textarea>
    //             </div>
    //             <div class="card-footer">
    //                 <button class="btn btn-success saveCardBtn">Save</button>
    //                 <button class="btn btn-danger deleteCardBtn">Delete</button>
    //             </div>
    //         </div>
    //     `;
    //             $('#displayCardContainer').append(cardTemplate);
    //         }
    //
    //         // Function to save a new card
    //         function saveCard(btn) {
    //             let card = btn.closest('.card');
    //             let title = card.find('.card-title').val();
    //             let description = card.find('.card-description').val();
    //             let cardHtml = `
    //             <div class="card mb-3">
    //                 <div class="card-header">${title}</div>
    //                 <div class="card-body">${description}</div>
    //                 <div class="card-footer">
    //                     <button class="btn btn-primary editCardBtn">Edit</button>
    //                     <button class="btn btn-danger deleteCardBtn">Delete</button>
    //                 </div>
    //             </div>
    //         `;
    //             card.replaceWith(cardHtml);
    //
    //             // Update hidden input fields with card data
    //             let cardFieldsContainer = $('#cardFieldsContainer');
    //             let cardId = Date.now(); // Generate unique ID for the new card
    //             let hiddenFields = `
    //     <input type="hidden" name="cards[${cardId}][title]" value="${title}">
    //     <input type="hidden" name="cards[${cardId}][description]" value="${description}">
    // `;
    //             cardFieldsContainer.append(hiddenFields);
    //         }
    //         // Function to edit a card
    //         function editCard(btn) {
    //             let card = btn.closest('.card');
    //             let title = card.find('.card-header').text().trim();
    //             let description = card.find('.card-body').text().trim();
    //             let cardContent = `
    //     <div class="card-header">
    //         <input type="text" class="form-control card-title" value="${title}">
    //     </div>
    //     <div class="card-body">
    //         <textarea class="form-control card-description">${description}</textarea>
    //     </div>
    // `;
    //             let cardFooter = `
    //     <div class="card-footer">
    //         <button class="btn btn-success updateCardBtn">Update</button>
    //         <button class="btn btn-danger cancelEditBtn">Cancel</button>
    //     </div>
    // `;
    //             card.children('.card-header, .card-body, .card-footer').remove();
    //             card.append(cardContent + cardFooter);
    //         }
    //
    //         // Function to update a card
    //         function updateCard(btn) {
    //             let card = btn.closest('.card');
    //             let title = card.find('.card-title').val();
    //             let description = card.find('.card-description').val();
    //
    //             // Update card content
    //             card.find('.card-header').text(title);
    //             card.find('.card-body').text(description);
    //
    //             // Restore edit and delete buttons
    //             let cardFooter = `
    //     <div class="card-footer">
    //         <button class="btn btn-primary editCardBtn">Edit</button>
    //         <button class="btn btn-danger deleteCardBtn">Delete</button>
    //     </div>
    // `;
    //             card.find('.card-footer').replaceWith(cardFooter);
    //
    //             // Update hidden input fields with card data
    //             let cardId = card.data('card-id');
    //             let hiddenTitleField = $(`input[name="cards[${cardId}][title]"]`);
    //             let hiddenDescriptionField = $(`input[name="cards[${cardId}][description]"]`);
    //             hiddenTitleField.val(title);
    //             hiddenDescriptionField.val(description);
    //         }
    //
    //
    //
    //         // Function to cancel editing a card
    //         function cancelEdit(btn) {
    //             let card = btn.closest('.card');
    //             let title = card.find('.card-title').val();
    //             let description = card.find('.card-description').val();
    //             let cardHtml = `
    //         <div class="card mb-3">
    //             <div class="card-header">${title}</div>
    //             <div class="card-body">${description}</div>
    //             <div class="card-footer">
    //                 <button class="btn btn-primary editCardBtn">Edit</button>
    //                 <button class="btn btn-danger deleteCardBtn">Delete</button>
    //             </div>
    //         </div>
    //     `;
    //             card.replaceWith(cardHtml);
    //         }
    //
    //         // Function to delete a card
    //         function deleteCard(btn) {
    //             let card = btn.closest('.card');
    //             let cardId = card.data('card-id');
    //
    //             // Send AJAX request to delete the card
    //             $.ajax({
    //                 url: `/delete-card/${cardId}`, // Replace this URL with the actual route for deleting a card
    //                 type: 'DELETE',
    //                 dataType: 'json',
    //                 success: function(response) {
    //                     // Remove the card from the DOM
    //                     card.remove();
    //
    //                     // Display success message
    //                     alert('Card has been deleted successfully.');
    //                 },
    //                 error: function(xhr, status, error) {
    //                     // Display error message if deletion fails
    //                     alert('Failed to delete card. Please try again.');
    //                 }
    //             });
    //         }

        });
    </script>
@endsection
