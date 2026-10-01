@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Site Content</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('page.setting.update') }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="from-group mb-3">
                                    <label for="">App Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="app_name"
                                        class="form-control @error('app_name') is-invalid @enderror"
                                        value="{{ $content['app_name']->value }}" required>
                                    @error('app_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="from-group mb-3">
                                    <label for="">App Description: <span class="text-danger">*</span></label>
                                    <input type="text" name="app_description"
                                        class="form-control @error('app_description') is-invalid @enderror"
                                        value="{{ $content['app_description']->value }}" required>
                                    @error('app_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if ($content['app_logo'])
                                <div class="col-12">
                                    <label for="">Logo</label><br>
                                    <img src="{{ $content['app_logo']->value }}" alt="Banner Image"
                                        style="width: 200px;">
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">App Logo: </label>
                                    <input type="file" name="app_logo"
                                        class="form-control @error('app_logo') is-invalid @enderror">
                                    @error('app_logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if ($content['app_favicon'])
                                <div class="col-12">
                                    <label for="">App Favicon</label><br>
                                    <img src="{{ $content['app_favicon']->value }}" alt="Banner Image"
                                        style="width: 200px;">
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">App Favicon: </label>
                                    <input type="file" name="app_favicon"
                                        class="form-control @error('app_favicon') is-invalid @enderror">
                                    @error('app_favicon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="divider divider-primary">
                            <div class="divider-text">Contact Information</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <label for="">Contact Email: <span class="text-danger">*</span></label>
                                        <input type="text" name="contact_email"
                                            class="form-control @error('contact_email') is-invalid @enderror"
                                            value="{{ $content['contact_email']->value }}" required>
                                        @error('contact_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <label for="">Contact No: <span class="text-danger">*</span></label>
                                        <input type="text" name="contact_no"
                                            class="form-control @error('contact_no') is-invalid @enderror"
                                            value="{{ $content['contact_no']->value }}" required>
                                        @error('contact_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="from-group mb-3">
                                        <label for="">Address: <span class="text-danger">*</span></label>
                                        <input type="text" name="contact_address"
                                            class="form-control @error('contact_address') is-invalid @enderror"
                                            value="{{ $content['contact_address']->value }}" required>
                                        @error('contact_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider divider-primary">
                            <div class="divider-text">Social Media</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <label for="">Facebook:</label>
                                        <input type="text" name="facebook"
                                            class="form-control @error('facebook') is-invalid @enderror"
                                            value="{{ $content['facebook']->value }}">
                                        @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <label for="">Twitter:</label>
                                        <input type="text" name="twitter"
                                            class="form-control @error('twitter') is-invalid @enderror"
                                            value="{{ $content['twitter']->value }}">
                                        @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <label for="">Instagram:</label>
                                        <input type="text" name="instagram"
                                            class="form-control @error('instagram') is-invalid @enderror"
                                            value="{{ $content['instagram']->value }}">
                                        @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <label for="">Linkedin:</label>
                                        <input type="text" name="linkedin"
                                            class="form-control @error('linkedin') is-invalid @enderror"
                                            value="{{ $content['linkedin']->value }}">
                                        @error('linkedin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider divider-primary">
                            <div class="divider-text">Other Information</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="from-group mb-3">
                                        <label for="">Footer Text: <span class="text-danger">*</span></label>
                                        <input type="text" name="footer_text"
                                            class="form-control @error('footer_text') is-invalid @enderror"
                                            value="{{ $content['footer_text']->value }}" required>
                                        @error('footer_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
@endsection
