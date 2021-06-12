@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Driver</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.driver.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row form-group">
                    <div class="col col-md-3"><label for="name" class=" form-control-label">Nama Driver</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="name" name=" name" placeholder="Nama Driver" value="{{ $data->name ?? old('name')}}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="phone" class=" form-control-label">Nomor Handphone</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="phone" id="phone" cols="30" rows="5" class="form-control" placeholder="No HP" value="{{ $data->phone ?? old('phone')}}"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="age" class=" form-control-label" ">Usia</label></div>
                    <div class=" col-5 col-md-9">
                            <input type="text" name="age" id="age" cols="30" rows="5" class="form-control" placeholder="Usia" value="{{ $data->age ?? old('age')}}"></input>
                    </div>
                </div>
                <div class=" row form-group">
                    <div class="col col-md-3"><label for="status" class=" form-control-label">Status</label></div>
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