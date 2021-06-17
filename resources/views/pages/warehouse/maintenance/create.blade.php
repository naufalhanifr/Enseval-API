@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Maintenance</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warehouse.maintenance.store') }}" method="post" enctype="multipart/form-data">
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
                    <div class="col col-md-3"><label for="quantity_exp" class=" form-control-label">quantity_exp</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="text" name="quantity_exp" id="quantity_exp" cols="30" rows="5" class="form-control"></input>
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