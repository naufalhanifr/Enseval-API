@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Edit Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.vehicle.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row form-group">
                    <div class="col col-md-3"><label for="type" class=" form-control-label">Jenis Kendaraan</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="type" name="type" placeholder="Jenis Kendaraan" value="{{ $data->type ?? old('type')}}"">
                    </div>
                </div>
                <div class=" row form-group">
                        <div class="col col-md-3"><label for="capacity" class=" form-control-label">Kapasitas Muatan</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="capacity" id="capacity" cols="30" rows="5" class="form-control" placeholder="Kapasitas Muatan" value="{{ $data->capacity ?? old('capacity')}}"></input>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="fuel_capacity" class=" form-control-label">Kapasitas Bensin</label></div>
                        <div class="col-5 col-md-9">
                            <input type="text" name="fuel_capacity" id="fuel_capacity" cols="30" rows="5" class="form-control" placeholder="Kapasitas Bensin" value="{{ $data->fuel_capacity ?? old('fuel_capacity')}}"></input>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="brand" class=" form-control-label">Brand Kendaraan</label></label></div>
                        <div class="col-5 col-md-9">
                            <input type="text" name="brand" id="brand" cols="30" rows="5" class="form-control" placeholder="Brand Kendaraan" value="{{ $data->brand ?? old('brand')}}"></input>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status</label></label></label></div>
                        <div class="col-5 col-md-9">
                            <input type="text" name="status" id="status" cols="30" rows="5" class="form-control" placeholder="Status" value="{{ $data->status ?? old('status')}}"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn btn-block btn-primary">Update Data</button>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection