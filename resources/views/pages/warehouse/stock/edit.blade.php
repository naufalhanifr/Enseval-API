@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Edit Stock</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warehouse.stock.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="product_id" class=" form-control-label">Product</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="product_id" class="form-control ">
                            @foreach($product as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->name }} </option>n>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="warehouse_id" class=" form-control-label">Warehouse</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="warehouse_id" class="form-control">
                            @foreach($warehouse as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->location }} </option>n>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="quantity" class=" form-control-label">Quantity</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="number" name="quantity" id="quantity" cols="30" rows="5" class="form-control" placeholder="Quantity<" value="{{ $data->quantity?? old('quantity')}}"></input>
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