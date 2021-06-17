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
                                <th>Tanggal Keluar</th>
                                <th>Product</th>

                                <th>Lokasi Asal Barang</th>
                                <th>Lokasi Pengantaran Barang</th>
=======
                                <th>Warehouse</th>
                                <th>Jenis Kendaran</th>
                                <th>Alamat Pengiriman </th>

                                <th>Jumlah Barang Keluar</th>
                                <th>Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->out_date }}</td>
                                <td>{{ $data->product->name }}</td>

                                <td>{{ $data->delivery->pickup_location }}</td>
                                <td>{{ $data->delivery->destination_location }}</td>

                                <td>{{ $data->warehouse->location }}</td>
                                <td>{{ $data->vehicle->type }}</td>
                                <td>{{ $data->delivery_id }}</td>

                                <td>{{ $data->quantity_out }}</td>
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