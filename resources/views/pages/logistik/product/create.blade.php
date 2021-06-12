@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="name" class=" form-control-label">Nama Product</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" id="name" name=" name">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="weight" class=" form-control-label">Berat</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="weight" id="weight" cols="30" rows="5" class="form-control"></input>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="price" class=" form-control-label">Harga</label></div>
                    <div class="col-5 col-md-9">
                        <input type="text" name="price" id="price" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="exp_date" class=" form-control-label">Exp Date</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="exp_date" id="exp_date" cols="30" rows="5" class="form-control"></input>
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