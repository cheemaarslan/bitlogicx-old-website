@extends('back.layout.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Profile</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="_method" value="patch"> <input type="hidden" name="_token" value="QPeqMXDV6I8uR3F0IMIPR5oK1fVjzxtZhKABhzYP">
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{Auth::user()->user_image}}" width="81px" height="120px" alt="">
                                </div>
                                <div class="col-12 mt-4">
                                    <label>User Image</label>
                                    <input type="file" class="form-control" name="user_image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="product_name">{{Auth::user()->user_name}}</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control " name="user_name" value="Admin">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="product_name">Email</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="email" class="form-control " name="email" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
