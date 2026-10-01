@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">All Hirings</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="contact_table" class="table table-striped w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <td>Service</td>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $sr_no = 1;
                                @endphp

                                @foreach ($hires as $item)
                                    <tr>
                                        <td>{{ $sr_no++ }}</td>
                                        <td>{{ $item->fname }} {{ $item->lname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->service }}</td>
                                        <td>
                                            <a href="{{ route('hire.show', $item) }}"
                                                class="w-50 btn btn-primary btn-sm mt-2">
                                                <i class="bx bx-show"></i>
                                            </a>
                                            <form action="{{ route('hire.destroy', $item) }}" method="post"
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
    </div>
@endsection
@section('script')
    <script src="{{ asset('back/assets/vendor/libs/datatable/datatables.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#contact_table').DataTable({
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
