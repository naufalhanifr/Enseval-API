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
                    <div class="col col-md-3">
                        <label for="product_id" class=" form-control-label">Product</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="product_id" class="form-control ">
                            <option value=""> Pilih Product --</option>
                            @foreach($product as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="warehouse_id" class=" form-control-label">Warehouse</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="warehouse_id" class="form-control">
                            <option value=""> Pilih Lokasi Warehouse --</option>
                            @foreach($warehouse as $item)
                            <option value=" {{ $item->id }}">{{ $item->location }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="cost" class=" form-control-label">Cost</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="text" name="cost" id="cost" cols="30" rows="5" class="form-control"></input>
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