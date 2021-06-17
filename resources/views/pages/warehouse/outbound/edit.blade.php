@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Driver</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warehouse.outbound.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row form-group">
                    <div class="col col-md-3"><label for="out_date" class=" form-control-label">Tanggal Keluar</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="date" name="out_date" id="out_date" cols="30" rows="5" class="form-control" placeholder="Tanggal Keluar" value="{{ $data->out_date ?? old('out_date')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="product_id" class=" form-control-label">Product</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Product" value="{{ $data->product_id ?? old('product_id')}}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="warehouse_id" class=" form-control-label">Warehouse</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="warehouse_id" id="warehouse_id" cols="30" rows="5" class="form-control" placeholder="Warehouse" value="{{ $data->warehouse_id ?? old('warehouse_id')}}"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="delivery_id" class=" form-control-label">Alamat Pengiriman</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="text" name="delivery_id" id="delivery_id" cols="30" rows="5" class="form-control" placeholder="Alamat Pengiriman" value="{{ $data->delivery_id ?? old('delivery_id')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="quantity_out" class=" form-control-label">Jumlah Barang Keluar</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="number" name="quantity_out" id="quantity_out" cols="30" rows="5" class="form-control" placeholder="Jumlah Barang Keluar" value="{{ $data->quantity_in ?? old('quantity_in')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="quantity_out" class=" form-control-label">Biaya</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="number" name="cost" id="cost" cols="30" rows="5" class="form-control" placeholder="Biaya" value="{{ $data->cost ?? old('cost')}}"></input>
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
