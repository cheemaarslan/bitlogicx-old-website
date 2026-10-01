@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-2">All Team Members</h5>
                    <div class="card-header-elements ms-auto">
                        <form action="{{ route('team.create') }}">

                            <button type="submit" class="btn btn-success">Add Team Member</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="team_table" class="table table-striped w-100">
                            <thead>
                                <tr>
                                    {{-- <th>Drag & Drop</th> --}}
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>job Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $sr_no = 1;
                                @endphp
                                {{-- @foreach ($teams->sortBy('order') as $item) --}}
                                @foreach ($teams as $item)
                                    <tr data-id="{{ $item->id }}">
                                        {{-- <td><span class="drag-handle">&#9776;</span></td> --}}
                                        <td>{{ $sr_no++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->job_title }}</td>
                                        <td>
                                            <a href="{{ route('team.show', $item) }}"
                                            class="w-50 btn btn-primary btn-sm mt-2">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <form action="{{ route('team.destroy', $item) }}" method="post"
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

            $('#team_table').DataTable({
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
    <!-- Include Sortable.js -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var teamTable = document.getElementById('team_table').getElementsByTagName('tbody')[0];

            // Initialize Sortable
            var sortable = new Sortable(teamTable, {
                handle: '.drag-handle',
                onUpdate: function(evt) {
                    updateOrder();
                },
            });

            // Function to update the order via AJAX
            function updateOrder() {
                var order = [];

                // Get the order of items
                teamTable.querySelectorAll('tr').forEach(function(item, index) {
                    order.push({
                        id: item.getAttribute('data-id'),
                        order: index + 1,
                    });
                });

                // Send AJAX request to update order and save to the database
                $.ajax({
                    type: 'POST',
                    url: '{{ route('team.updateOrder') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        order: order,
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.success) {
                            // Display success message (adjust as needed)
                            alert('Team order updated successfully!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    },
                });
            }
        });
    </script> --}}
@endsection
