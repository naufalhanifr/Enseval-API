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
                    <div class="col col-md-3"><label for="delivery_type" class=" form-control-label">Delivery Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="delivery_type" class="form-control ">
                            @foreach($delivery as $item)
                            <option value="{{ $item->delivery_type }}" {{ ( $item->delivery_type) ? 'selected' : '' }}> {{ $item->delivery_type }} </option>
                            @endforeach
                            <option>-----</option>
                            <option value="Pengiriman">Pengiriman</option>
                            <option value="Penjualan">Penjualan</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="driver_id" class=" form-control-label">Product</label></div>
                    <div class="col-12 col-md-9">
                        <select name="product_id" class="form-control ">
                            @foreach($product as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="vehicle_id" class=" form-control-label">Kendaraan</label></div>
                    <div class="col-5 col-md-9">
                        <select name="vehicle_id" class="form-control ">
                            @foreach($vehicle as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->type }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="driver_id" class=" form-control-label">Driver</label></label></div>
                    <div class="col-5 col-md-9">
                        <select name="driver_id" class="form-control ">
                            @foreach($driver as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->name }} </option>n>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="date_pickup" class=" form-control-label">Tanggal Pickup</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="date_pickup" id="date_pickup" cols="30" rows="5" class="form-control" placeholder="Tanggal Pickup<" value="{{ $data->date_pickup ?? old('date_pickup')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="pickup_location" class=" form-control-label">Pickup Lokasi</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="pickup_location" id="pickup_location" cols="30" rows="5" class="form-control" placeholder="Pickup Lokasi" value="{{ $data->pickup_location ?? old('pickup_location')}}"> </input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="destination_location" class=" form-control-label">Tujuan Lokasi</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="destination_location" id="destination_location" cols="30" rows="5" class="form-control" placeholder="Tujuan Lokasi" value="{{ $data->destination_location?? old('destination_location')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="cost" class=" form-control-label">Biaya</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="cost" id="cost" cols="30" rows="5" class="form-control" placeholder="Biaya" value="{{ $data->cost ?? old('cost')}}"></input>
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