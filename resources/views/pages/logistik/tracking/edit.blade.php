@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Edit Tracking</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.tracking.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row form-group">
                    <div class="col col-md-3"><label for="driver_id" class=" form-control-label">Delivery</label></div>
                    <div class="col-12 col-md-9">
                        <select name="delivery_id" class="form-control ">
                            @foreach($delivery as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->delivery_type }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="temp" class=" form-control-label">Temperature</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="temp" id="temp" cols="30" rows="5" class="form-control" placeholder="Temperature" value=" {{ $data->temp ?? old('temp')}}"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="speed" class=" form-control-label">Speed AVG</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="speed" id="speed" cols="30" rows="5" class="form-control" placeholder="Speed AVG" value="{{ $data->speed ?? old('speed')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="fuel_capacity" class=" form-control-label">Penggunaan Bensin</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="fuel_capacity" id="fuel_capacity" cols="30" rows="5" class="form-control" placeholder="Penggunaan Bensin" value="{{ $data->fuel_capacity ?? old('fuel_capacity')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="loc_lat" class=" form-control-label">Loc Lat</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="loc_lat" id="loc_lat" cols="30" rows="5" class="form-control" placeholder="Loc Lat" value="{{ $data->loc_lat ?? old('loc_lat')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="loc_lng" class=" form-control-label">Loc Lng</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="loc_lng" id="loc_lng" cols="30" rows="5" class="form-control" placeholder="Loc Lng" value="{{ $data->loc_lng ?? old('loc_lng')}}"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="status" class=" form-control-label">Status</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="status" id="status" cols="30" rows="5" class="form-control" placeholder="Status" value="{{ $data->status ?? old('status')}}"></input>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn btn-block btn-primary">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection