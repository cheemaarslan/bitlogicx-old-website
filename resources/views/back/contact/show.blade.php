@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-0">{{$contact->name}}</h5>
                    <div class="card-header-elements ms-auto">
                        <form action="{{ route('contact.destroy', $contact) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control"value="{{ $contact->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control"value="{{ $contact->email }}" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Subject</label>
                                <input type="text" class="form-control"value="{{ $contact->subject }}" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Body</label>
                                <textarea class="form-control" name="body" readonly>{{ $contact->message }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
