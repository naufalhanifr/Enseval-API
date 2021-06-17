@extends('templates.default')
@section('content')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses!</strong> {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('gagal'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Gagal!</strong> {{ session('gagal') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Delivery</h6>
                    <a class="btn btn-sm btn-primary" href="{{ route('logistik.delivery.create') }}">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Delivery Type</th>
                                <th>Product</th>
                                <th>Kendaraan</th>
                                <th>Driver</th>
                                <th>Tanggal Pickup</th>
                                <th>Pickup Lokasi</th>
                                <th>Tujuan Lokasi</th>
                                <th>Biaya</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->delivery_type}}</td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->vehicle->type}}</td>
                                <td>{{ $item->driver->name }}</td>
                                <td>{{ $item->date_pickup }}</td>
                                <td>{{ $item->pickup_location }}</td>
                                <td>{{ $item->destination_location }}</td>
                                <td>{{ $item->cost }}</td>
                                <td>
                                    <a class=" btn btn-sm btn-warning" href="{{ route('logistik.delivery.show', $item->id) }}"><i class="fas fa-eye"></i></a>
                                    <form action="{{ route('logistik.delivery.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <a class="btn btn-sm btn-primary" href="{{ route('logistik.delivery.edit', $item->id) }}">Edit</a>
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