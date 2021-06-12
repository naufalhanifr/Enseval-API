@extends('templates.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Driver</h6>
                </div>
            </div>
            <div class=" card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Delivery Type</th>
                                <th>Product</th>
                                <th>Kendaraan</th>
                                <th>Driver</th>
                                <th>Tanggal Pickup</th>
                                <th>Pickup Lokasi</th>
                                <th>Tujuan Lokasi</th>
                                <th>Fuel Consumption</th>
                                <th>Biaya</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->driver_id }}</td>
                                <td>{{ $data->product_id }}</td>
                                <td>{{ $data->vehicle_id}}</td>
                                <td>{{ $data->date_pickup }}</td>
                                <td>{{ $data->pickup_location }}</td>
                                <td>{{ $data->destination_location }}</td>
                                <td>{{ $data->fuel_consumption }}</td>
                                <td>{{ $data->cost }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('afterStyle')
<!-- Custom styles for this page -->
<link href="{{ asset('assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@push('afterScripts')
<!-- Page level plugins -->
<script src="{{ asset('assets/sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endpush