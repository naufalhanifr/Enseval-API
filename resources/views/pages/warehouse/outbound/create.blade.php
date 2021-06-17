@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Outbound</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warehouse.outbound.store') }}" method="post" enctype="multipart/form-data">
                @csrf
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
                        <select name="product_id" id="product_id" class="form-control ">
                            <option value="">-- Pilih Product --</option>
                            @foreach($product as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
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
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="quantity_out" class=" form-control-label">Biaya</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="number" name="cost" id="cost" cols="30" rows="5" class="form-control"></input>
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