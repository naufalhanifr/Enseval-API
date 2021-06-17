@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary "> Edit Outbound</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warehouse.outbound.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row form-group">
                    <div class="col col-md-3"><label for="out_date" class=" form-control-label">Tanggal Keluar</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="date" name="out_date" id="out_date" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="product_id" class=" form-control-label">Product</label>
                    </div>
                    <div class="col-12 col-md-9">
<<<<<<< HEAD
                        <select name="product_id" id="product_id" class="form-control ">
                            <option value="">-- Pilih Product --</option>
                            @foreach($product as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
=======
                        <select name="product_id" class="form-control ">
                            @foreach($product as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->name }} </option>n>
>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
<<<<<<< HEAD
                    <div class="col col-md-3"><label for="delivery_id" class=" form-control-label"> Asal Barang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="delivery_id" id="delivery_id" class="form-control">
                            <option value="">-- Pilih Lokasi Asal Product --</option>
                            @foreach($delivery->where('delivery_type' , '=' , 'Pengiriman') as $item)
                            <option value=" {{ $item->id }}">{{ $item->pickup_location}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="quantity_out" class=" form-control-label">Jumlah Barang Keluar</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="number" name="quantity_out" id="quantity_out" cols="30" rows="5" class="form-control"></input>
=======
                    <div class="col col-md-3">
                        <label for="warehouse_id" class=" form-control-label">Warehouse</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="warehouse_id" class="form-control ">
                            @foreach($warehouse as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->location }} </option>n>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="vehicle_id" class=" form-control-label">vehicle</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="vehicle_id" class="form-control ">
                            @foreach($vehicle as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->type }} </option>n>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="delivery_id" class=" form-control-label">Alamat Pengiriman</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="text" name="delivery_id" id="delivery_id" cols="30" rows="5" class="form-control" placeholder="Asal Barang" value="{{ $data->delivery_id ?? old('delivery_id')}}"></input>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="quantity_out" class=" form-control-label">Jumlah Barang Keluar</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="number" name="quantity_out" id="quantity_out" cols="30" rows="5" class="form-control" placeholder="Jumlah Barang Keluar" value="{{ $data->quantity_out ?? old('quantity_out')}}"></input>
>>>>>>> 08fe21f30facd1444d295efbcefefd918550f89e
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="cost" class=" form-control-label">Biaya</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="number" name="cost" id="cost" cols="30" rows="5" class="form-control"></input>
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