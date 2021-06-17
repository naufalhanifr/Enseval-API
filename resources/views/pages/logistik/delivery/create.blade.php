@extends('templates.default')
@section('content')

<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary ">Tambah Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logistik.delivery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="delivery_type" class=" form-control-label">Delivery Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="delivery_type" id="delivery_type" class="form-control " onchange="showDiv(this)">
                            <option value="">-- Pilih Delivery --</option>
                            <option value="Pengiriman">Pengiriman</option>
                            <option value="Penjemputan">Penjemputan</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="driver_id" class=" form-control-label">Product</label></div>
                    <div class="col-12 col-md-9">
                        <select name="product_id" class="form-control ">
                            <option value="">-- Pilih Product --</option>
                            @foreach($product as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="vehicle_id" class=" form-control-label">Kendaraan</label></div>
                    <div class="col-5 col-md-9">
                        <select name="vehicle_id" class="form-control ">
                            <option value="">-- Pilih Kendaraan --</option>
                            @foreach($vehicle as $item)
                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="driver_id" class=" form-control-label">Driver</label></label></div>
                    <div class="col-5 col-md-9">
                        <select name="driver_id" class="form-control ">
                            <option value="">-- Pilih Driver --</option>
                            @foreach($driver as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="date_pickup" class=" form-control-label">Tanggal Penjemputan / Pengiriman</label></label></div>
                    <div class="col-5 col-md-9">
                        <input type="date" name="date_pickup" id="date_pickup" cols="30" rows="5" class="form-control"></input>
                    </div>
                </div>

                <!-- ------------ -->

                <div id="form_pengiriman" style="display: none;">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="pickup_location" class=" form-control-label">Lokasi Pengambilan Product</label></div>
                        <div class="col-5 col-md-9">
                            <select name="pickup_location" class="form-control" id="form_pengiriman1">
                                <option value="">-- Pilih Warehouse --</option>
                                @foreach($warehouse as $item)
                                <option value="{{ $item->location }}">{{ $item->location }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="destination_location" class=" form-control-label">Lokasi Tujuan Pengiriman</label></div>
                        <div class="col-5 col-md-9">
                            <input type="text" name="destination_location" id="form_pengiriman2" cols="30" rows="5" class="form-control"></input>
                        </div>
                    </div>
                </div>

                <!-- ------------ -->

                <div id="form_penjemputan" style="display: none;">
                    <div class=" row form-group">
                        <div class="col col-md-3"><label for="pickup_location" class=" form-control-label">Lokasi Pengambilan Productr</label></div>
                        <div class="col-5 col-md-9">
                            <input type="text" name="pickup_location" id="form_penjemputan1" cols="30" rows="5" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="destination_location" class=" form-control-label">Lokasi Tujuan Warehouse</label></div>
                        <div class="col-5 col-md-9">
                            <select name="destination_location" class="form-control" id="form_penjemputan2">
                                <option value="">-- Pilih Warehouse --</option>
                                @foreach($warehouse as $item)
                                <option value="{{ $item->location }}">{{ $item->location }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ------------ -->

                <div class="row form-group">
                    <div class="col col-md-3"><label for="cost" class=" form-control-label">Biaya</label></div>
                    <div class="col-5 col-md-9">
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



<script type="text/javascript">
    function showDiv(select) {
        if (select.value == "Pengiriman") {
            document.getElementById("form_penjemputan").style.display = "none ";
            document.getElementById("form_penjemputan1").disabled = true;
            document.getElementById("form_penjemputan2").disabled = true;

            document.getElementById("form_pengiriman").style.display = "block ";
            document.getElementById("form_pengiriman1").disabled = false;
            document.getElementById("form_pengiriman2").disabled = false;

        } else if (select.value == "Penjemputan") {
            document.getElementById("form_pengiriman").style.display = "none ";
            document.getElementById("form_pengiriman1").disabled = true;
            document.getElementById("form_pengiriman2").disabled = true;

            document.getElementById("form_penjemputan").style.display = "block ";
            document.getElementById("form_penjemputan1").disabled = false;
            document.getElementById("form_penjemputan2").disabled = false;
        }
    }
</script>

</html>

@endsection