@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">General Setting</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Mailing Credentials Setting</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.smtp') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Mail Driver</label>
                                    <input type="text" name="MAIL_DRIVER"
                                        class="form-control  @error('MAIL_DRIVER') is-invalid @enderror"
                                        value="{{ $setting->MAIL_DRIVER }}" required>
                                    @error('MAIL_DRIVER')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">OFFICE365MAIL CLIENT ID</label>
                                    <input type="text" name="OFFICE365MAIL_CLIENT_ID"
                                        class="form-control  @error('OFFICE365MAIL_CLIENT_ID') is-invalid @enderror"
                                        value="{{ $setting->OFFICE365MAIL_CLIENT_ID }}" required>
                                    @error('OFFICE365MAIL_CLIENT_ID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">OFFICE365MAIL TENANT</label>
                                    <input type="text" name="OFFICE365MAIL_TENANT"
                                        class="form-control  @error('OFFICE365MAIL_TENANT') is-invalid @enderror"
                                        value="{{ $setting->OFFICE365MAIL_TENANT }}" required>
                                    @error('OFFICE365MAIL_TENANT')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">OFFICE365MAIL CLIENT_SECRET</label>
                                    <input type="text" name="OFFICE365MAIL_CLIENT_SECRET"
                                        class="form-control  @error('OFFICE365MAIL_CLIENT_SECRET') is-invalid @enderror"
                                        value="{{ $setting->OFFICE365MAIL_CLIENT_SECRET }}" required>
                                    @error('OFFICE365MAIL_CLIENT_SECRET')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Credentials</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="row">
                <!-- Whatsapp -->
                <div class="col-12">
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5>Whatsapp Link</h5>
                        </div>
                        <div class="card-body ">
                            <form action="{{ route('setting.whatsapp') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <!-- Update the input name to "whatsapp_link" -->
                                            <label for="whatsapp_link">Enter Whatsapp Link</label>
                                            <input type="text" name="whatsapp_link" id="whatsapp_link"
                                                class="form-control" value="{{ $setting->whatsapp_link }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mb-3">Update Link</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- whstapp end -->

                <div class="col-12">
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5>Update Google reCaptcha</h5>
                        </div>
                        <div class="card-body ">
                            <form action="{{ route('setting.recaptcha') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label for="NOCAPTCHA_SITEKEY">reCaptcha Public Key:</label>
                                            <input type="text" name="NOCAPTCHA_SITEKEY" id="NOCAPTCHA_SITEKEY"
                                                class="form-control" value="{{ $setting->NOCAPTCHA_SITEKEY }}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label for="NOCAPTCHA_SECRET">reCaptcha Secret Key:</label>
                                            <input type="text" name="NOCAPTCHA_SECRET" id="NOCAPTCHA_SECRET"
                                                class="form-control" value="{{ $setting->NOCAPTCHA_SECRET }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mb-3">Update Keys</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Other Setting</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('setting.other') }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <div class="form-check custom-option custom-option-basic mb-3">
                                            <label class="form-check-label custom-option-content" for="enableChat">
                                                <input class="form-check-input" type="checkbox" name="enable_contact"
                                                    id="enableChat" {{ $setting->enable_contact ? 'checked' : '' }}>
                                                <span class="custom-option-header pb-0">
                                                    <span class="fw-semibold">Enable Contact</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <div class="form-check custom-option custom-option-basic mb-3">
                                            <label class="form-check-label custom-option-content" for="enableApplication">
                                                <input class="form-check-input" type="checkbox" name="enable_application"
                                                    id="enableApplication"
                                                    {{ $setting->enable_application ? 'checked' : '' }}>
                                                <span class="custom-option-header pb-0">
                                                    <span class="fw-semibold">Enable Application</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <div class="form-check custom-option custom-option-basic mb-3">
                                            <label class="form-check-label custom-option-content" for="enableWhatsapp">
                                                <input class="form-check-input" type="checkbox" name="enable_whatsapp"
                                                    id="enableWhatsapp" {{ $setting->enable_whatsapp ? 'checked' : '' }}>
                                                <span class="custom-option-header pb-0">
                                                    <span class="fw-semibold">Enable WhatsApp</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="from-group mb-3">
                                        <div class="form-check custom-option custom-option-basic mb-3">
                                            <label class="form-check-label custom-option-content" for="enableNews">
                                                <input class="form-check-input" type="checkbox" name="enable_news"
                                                    id="enableNews" {{ $setting->enable_news ? 'checked' : '' }}>
                                                <span class="custom-option-header pb-0">
                                                    <span class="fw-semibold">Enable News</span>
                                                </span>
                                            </label>
                                        </div>
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
    </div>
@endsection
