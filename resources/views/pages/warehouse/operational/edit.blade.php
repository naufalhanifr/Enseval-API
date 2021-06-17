@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary "> Edit Operational</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('warehouse.operational.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="maintenance_id" class=" form-control-label">Maintenance_ID</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="maintenance_id" class="form-control ">
                            @foreach($maintenance as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->id }} </option>n>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="inbound_id" class=" form-control-label">Inbound_ID</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="inbound_id" class="form-control ">
                            @foreach($inbound as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->id }} </option>n>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="outbound_id" class=" form-control-label">Outbound_ID</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="outbound_id" class="form-control ">
                            @foreach($outbound as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id) ? 'selected' : '' }}> {{ $item->id }} </option>n>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="expense_id" class=" form-control-label">Expense_ID</label></div>
                    <div class=" col-5 col-md-9">
                        <input type="text" name="expense_id" id="expense_id" cols="30" rows="5" class="form-control" placeholder="Expense" value="{{ $data->expense_id ?? old('expense_id')}}"></input>
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