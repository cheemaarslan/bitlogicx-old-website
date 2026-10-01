@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-0">{{ $order->order_no }}</h5>
                    <div class="card-header-elements ms-auto">
                        <form action="{{ route('order.destroy', $order) }}" method="post">
                            @method('delete')
                            @csrf
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
                                <label for="">Order Date</label>
                                <input type="text" class="form-control"value="{{ $order->order_date }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Order Number</label>
                                <input type="text" class="form-control"value="{{ $order->order_no }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Customer Name</label>
                                <input type="text"
                                    class="form-control"value="{{ $order->customer->first_name }} {{ $order->customer->last_name }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Customer Email</label>
                                <input type="text" class="form-control"value="{{ $order->customer->email }}" readonly>
                            </div>
                        </div>

                        @if ($order->product_id)
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Product ID</label>
                                    <input type="text" class="form-control"value="{{ $order->product_id }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Product Name</label>
                                    <input type="text" class="form-control"value="{{ $order->product->product_name }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Product Price</label>
                                    <input type="text" class="form-control"value="{{ $order->product->price }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="from-group mb-3">
                                    <label for="">Quantity</label>
                                    <input type="text" class="form-control"value="{{ $order->qty }}" readonly>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Total</label>
                                    <input type="text" class="form-control"value="{{ $order->total }} " readonly>
                                </div>
                            </div>
                        @else
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Software Name</label>
                                    <input type="text" class="form-control"value="{{ $order->software->software_name }} " readonly>
                                </div>
                            </div>
                            
                        @endif
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Body</label>
                                <textarea class="form-control" name="body" readonly>{{ $order->message }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('order.update', $order) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <small class="text-muted d-block mb-2">Choose order Status:</small>
                                        <div class="row gy-3 text-nowrap">
                                            <div class="col">
                                                <div class="form-check custom-option custom-option-basic checked">
                                                    <label class="form-check-label custom-option-content py-2">
                                                        <input name="status" class="form-check-input" type="radio"
                                                            value="Pending"
                                                            {{ $order->status == 'Pending' ? 'checked' : '' }}>
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
                                                            {{ $order->status == 'Accept' ? 'checked' : '' }}>
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
                                                            {{ $order->status == 'Reject' ? 'checked' : '' }}>
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
                                                            value="Notinstock"
                                                            {{ $order->status == 'Notinstock' ? 'checked' : '' }}>
                                                        <span class="custom-option-header pb-0">
                                                            <span>Not in Stock</span>
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

        </div>

    </div>
@endsection
