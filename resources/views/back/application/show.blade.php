@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Application</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-lg-12 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="project_name">Job Category</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    @if ($application->career_id)
                                        <p>{{ $application->career->category_name }} @readonly(true)</p>
                                    @else
                                        <p>Not Specified</p>
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="project_name">First Name</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" value="{{ $application->first_name }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="project_name">Last Name</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" value="{{ $application->last_name }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="project_name">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" value="{{ $application->email }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="project_name">Contact No</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" value="{{ $application->contact_no }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label class="form-label" for="project_name">Message</label>
                                    <textarea class="form-control" readonly>{{ $application->message }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('application.update', $application) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <small class="text-muted d-block mb-2">Choose Application Status:</small>
                                        <div class="row gy-3 text-nowrap">
                                            <div class="col">
                                                <div class="form-check custom-option custom-option-basic checked">
                                                    <label class="form-check-label custom-option-content py-2">
                                                        <input name="status" class="form-check-input" type="radio"
                                                            value="Pending"
                                                            {{ $application->status == 'Pending' ? 'checked' : '' }}>
                                                        <span class="custom-option-header pb-0">
                                                            <span>Pending</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check custom-option custom-option-basic checked">
                                                    <label class="form-check-label custom-option-content py-2">
                                                        <input name="status" class="form-check-input" type="radio"
                                                            value="Accept"
                                                            {{ $application->status == 'Accept' ? 'checked' : '' }}>
                                                        <span class="custom-option-header pb-0">
                                                            <span>Accept</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check custom-option custom-option-basic checked">
                                                    <label class="form-check-label custom-option-content py-2">
                                                        <input name="status" class="form-check-input" type="radio"
                                                            value="Reject"
                                                            {{ $application->status == 'Reject' ? 'checked' : '' }}>
                                                        <span class="custom-option-header pb-0">
                                                            <span>Reject</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check custom-option custom-option-basic checked">
                                                    <label class="form-check-label custom-option-content py-2">
                                                        <input name="status" class="form-check-input" type="radio"
                                                            value="Interview"
                                                            {{ $application->status == 'Interview' ? 'checked' : '' }}>
                                                        <span class="custom-option-header pb-0">
                                                            <span>Call For Interview</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Applicant Resume</div>
                <div class="card-body">
                    <embed src="data:application/pdf;base64,{{ base64_encode($resume) }}" width="100%" height="800"
                        type='application/pdf'>
                    </body>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
