@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-2">All Products</h5>
                    <div class="card-header-elements ms-auto">
                        <form action="{{ route('product.create') }}">

                            <button type="submit" class="btn btn-success">Add New Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="product_table" class="table table-striped w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $sr_no = 1;
                                @endphp

                                @foreach ($products as $item)
                                    <tr>
                                        <td>{{ $sr_no++ }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->short_description }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ route('product.show', $item) }}"
                                                class="w-50 btn btn-primary btn-sm mt-2">
                                                <i class="bx bx-show"></i>
                                            </a>
                                            <form action="{{ route('product.destroy', $item) }}" method="post"
                                                class="delete-form" style="display:inline;">
                                                @method('delete')
                                                @csrf
                                                <button type="submit"
                                                    class="w-50 btn btn-danger btn-sm mt-2 delete-button">
                                                    <i class="bx bx-trash me-1"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('back/assets/vendor/libs/datatable/datatables.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#product_table').DataTable({
                "dom": '<lfB<t>ip>',
                buttons: ['excel', 'print'],
                paging: true,
                searching: true,
                autoWidth: true,
                lengthChange: true,
                columnDefs: [{
                    orderable: true,
                    targets: '_all'
                }],
                pageLength: 10

            });
            // Confirmation before deleting
            $('.delete-form').on('submit', function(e) {
                e.preventDefault(); // Prevent the form from submitting
                var form = this;
                var confirmed = confirm("Are you sure you want to delete this item?");
                if (confirmed) {
                    form.submit(); // If the user confirmed, submit the form
                }
            });
        });
    </script>
@endsection
