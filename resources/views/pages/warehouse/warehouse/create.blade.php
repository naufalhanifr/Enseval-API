@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah warehouse</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warehouse.warehouse.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="location" class=" form-control-label">Lokasi Warehouse</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                </div>>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="capacity" class=" form-control-label">Kapasitas Warehouse</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="text" name="capacity" id="capacity" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="volume" class=" form-control-label">Volume Warehouse</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="text" name="volume" id="volume" cols="30" rows="5" class="form-control"></input>
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