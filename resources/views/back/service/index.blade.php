@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-2">All Services</h5>
                    <div class="card-header-elements ms-auto">
                        <form action="{{ route('service.create') }}">

                            <button type="submit" class="btn btn-success">Add new Service</button>
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
                        <table id="service_table" class="table table-striped w-100">
                            <thead>
                                <tr>
                                    <th style="text-align: center">#</th>
                                    <th style="text-align: center">Service Name</th>
                                    <td style="text-align: center">Description</td>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Display on Home</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sr_no = 1;
                                @endphp
                                @foreach ($services as $item)
                                    <tr>
                                        <td class="div-align">{{ $sr_no++ }}</td>
                                        <td class="div-align">{{ $item->service_name }}</td>
                                        <td class="div-align">{{ $item->short_description }}</td>
                                        <td class="div-align">{{ $item->status }}</td>
                                        <td>
                                            <div class="form-container">
                                                <form action="{{ route('service.update', $item) }}" method="POST"
                                                    id="displayOnHomeForm{{ $item->id }}">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="checkbox" name="display_on_homepage"
                                                        {{ $item->display_on_homepage ? 'checked' : '' }}
                                                        onchange="submitDisplayOnHomeForm({{ $item->id }})" disabled>
                                                </form>
                                            </div>
                                        </td>


                                        <td class="div-align">
                                            <a href="{{ route('service.show', $item) }}"
                                            class="w-50 btn btn-primary btn-sm mt-2">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <form action="{{ route('service.destroy', $item) }}" method="post"
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
            $('#service_table').DataTable({
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

        function submitDisplayOnHomeForm(id) {
            document.getElementById('displayOnHomeForm' + id).submit();
        }
    </script>
    <style>
        /* Add a grayed-out appearance for disabled form elements */
        .form[disabled] {
            opacity: 0.1;
            pointer-events: none;
        }
        .form-container {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    height: 100%; /* Optional: Set a height to the container if needed */
}
.div-align{
    text-align: center;
}
    </style>
@endsection
