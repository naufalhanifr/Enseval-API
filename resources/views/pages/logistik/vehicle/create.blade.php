@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.vehicle.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="type" class=" form-control-label">Jenis Kendaraan</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="type" name="type">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="brand" class=" form-control-label">Brand Kendaraan</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="brand" id="brand" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class=" row form-group">
                    <div class="col col-md-3"><label for="capacity" class=" form-control-label">Kapasitas Muatan</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="capacity" id="capacity" cols="30" rows="5" class="form-control"> </input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="fuel_capacity" class=" form-control-label">Kapasitas Bensin</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="fuel_capacity" id="fuel_capacity" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="status" class=" form-control-label">Status</label></label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="status" id="status" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn btn-block btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection