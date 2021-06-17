@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Edit Maintenance</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warehouse.maintenance.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row form-group">
                    <div class="col col-md-3"><label for="quantity_exp" class=" form-control-label">quantity_exp</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="text" name="quantity_exp" id="quantity_exp" cols="30" rows="5" class="form-control" placeholder="quantity_exp" value="{{ $data->quantity_exp ?? old('quantity_exp')}}"></input>
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