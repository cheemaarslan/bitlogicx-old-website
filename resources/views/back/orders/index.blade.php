@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">All Orders</h5>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="page_table" class="table table-striped w-100">
                        <thead>
                            <tr>

                                <th>
                                    <div id="s">Serial Number</div>
                                </th>

                                <th>Order Date</th>

                                <th>Order No</th>

                                <th>Customer Name</th>

                                <th>Product Name</th>

                                <th>Price</th>

                                <th>Quantity</th>

                                <th>Total</th>

                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $sr_no = 1;
                            @endphp

                            @foreach ($orders as $item)
                                <tr>

                                    <td>{{ $sr_no++ }}</td>

                                    <td>{{ $item->order_date }}</td>

                                    <td>{{ $item->order_no }}</td>

                                    <td>{{ $item->customer->first_name }} {{ $item->customer->last_name }}</td>


                                    @if ($item->product_id)
                                        <td>{{ $item->product->product_name }}</td>

                                        <td>{{ $item->product->price }}</td>

                                        <td>{{ $item->qty }}</td>


                                        <td>{{ $item->total }}</td>

                                    @else
                                        <td>{{ $item->software->software_name }}</td>

                                        <td>-</td>

                                        <td>
                                            -
                                        </td>

                                        <td>
                                            -
                                        </td>

                                       
                                    @endif
                                     <td>

                                            <a href="{{ route('order.show', $item) }}"
                                                class="w-50 btn btn-primary btn-sm mt-2">
                                                <i class="bx bx-show"></i>
                                            </a>
                                            <form action="{{ route('order.destroy', $item) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="w-50 btn btn-primary btn-sm mt-2"><i
                                                        class="bx bx-trash me-1"></i></button>
                                            </form>


                                        </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div> --}}
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('#page_table').DataTable({
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

        });
    </script>
@endsection
