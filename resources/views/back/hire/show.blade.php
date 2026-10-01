@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-0">{{$hire->service}}</h5>
                    <div class="card-header-elements ms-auto">
                        <form action="{{ route('hire.destroy', $hire) }}" method="post">
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
                                <label for="">First Name</label>
                                <input type="text" class="form-control"value="{{ $hire->fname }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control"value="{{ $hire->lname }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control"value="{{ $hire->email }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="from-group mb-3">
                                <label for="">Service</label>
                                <input type="text" class="form-control"value="{{ $hire->service }}" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Body</label>
                                <textarea class="form-control" name="body" readonly>{{ $hire->message }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
