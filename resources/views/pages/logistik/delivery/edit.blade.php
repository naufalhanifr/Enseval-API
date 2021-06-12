@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Edit Delivery</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.delivery.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row form-group">
                    <div class="col col-md-3"><label for="delivery_type" class=" form-control-label">Delivery Type</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="delivery_type" name=" delivery_type" placeholder="Delivery Type" value="{{ $data-> delivery_type ?? old(' delivery_type')}}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="product_id " class=" form-control-label">Product</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="product_id " id="product_id " cols="30" rows="5" class="form-control" placeholder="Product" value="{{ $data->product_id  ?? old('product_id ')}}"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="vehicle_id" class=" form-control-label">Kendaraan</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="vehicle_id" id="vehicle_id" cols="30" rows="5" class="form-control" placeholder="Kendaraan" value="{{ $data->vehicle_id ?? old('vehicle_id')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for=" driver_id" class=" form-control-label">Driver</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="driver_id" id="driver_id" cols="30" rows="5" class="form-control" placeholder="Driver" value="{{ $data-> driver_id ?? old(' driver_id')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="date_pickup" class=" form-control-label">Tanggal Pickup</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="date_pickup" id="date_pickup" cols="30" rows="5" class="form-control" placeholder="Tanggal Pickup" value="{{ $data->date_pickup ?? old('date_pickup')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="pickup_location" class=" form-control-label">Pickup Lokasi</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="pickup_location" id="pickup_location" cols="30" rows="5" class="form-control" placeholder="Pickup Lokasi" value="{{ $data->pickup_location ?? old('pickup_location')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="destination_location" class=" form-control-label">Tujuan Lokasi</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="destination_location" id="destination_location" cols="30" rows="5" class="form-control" placeholder="Tujuan Lokasi" value="{{ $data->destination_location ?? old('destination_location')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="fuel_consumption " class=" form-control-label">Fuel Consumption</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="fuel_consumption " id="fuel_consumption " cols="30" rows="5" class="form-control" placeholder="Fuel Consumption" value="{{ $data->fuel_consumption ?? old('fuel_consumption')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="cost" class=" form-control-label">Biaya</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="cost" id="cost" cols="30" rows="5" class="form-control" placeholder="Biaya" value="{{ $data->cost ?? old('cost')}}"></input>
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