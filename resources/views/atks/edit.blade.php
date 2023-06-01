@extends('layouts.master')

@section('title', 'Edit')

@section('menu-title', 'Edit Pencatatan ATK')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('atks.update', $atk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Barang</strong>
                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $atk->nama_barang }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Satuan</strong>
                            <select class="form-control" name="satuan">
                                <option value="{{ $atk->satuan }}">{{ $atk->satuan }}</option>
                                <option value="Unit">Unit</option>
                                <option value="Buah">Buah</option>
                                <option value="Pasang">Pasang</option>
                                <option value="Lembar">Lusin</option>
                                <option value="Keping">Keping</option>
                                <option value="Batang">Batang</option>
                                <option value="Bungkus">Bungkus</option>
                                <option value="Potong">Potong</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Ekor">Ekor</option>
                                <option value="Rim">Rim</option>
                                <option value="Karat">Karat</option>
                                <option value="Botol">Botol</option>
                                <option value="Butir">Butir</option>
                                <option value="Roll">Roll</option>
                                <option value="Dus">Dus</option>
                                <option value="Karung">Karung</option>
                                <option value="Koli">Koli</option>
                                <option value="Sak">Sak</option>
                                <option value="Bal">Bal</option>
                                <option value="Kaleng">Kaleng</option>
                                <option value="Set">Set</option>
                                <option value="Slop">Slop</option>
                                <option value="Gulung">Gulung</option>
                                <option value="Ton">Ton</option>
                                <option value="Kilogram">Kilogram</option>
                                <option value="Gram">Gram</option>
                                <option value="Miligram">Miligram</option>
                                <option value="Meter">Meter</option>
                                <option value="M2">M2</option>
                                <option value="M3">M3</option>
                                <option value="Inci">Inci</option>
                                <option value="Cc">Cc</option>
                                <option value="Liter">Liter</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Harga Barang</strong>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="harga">Rp.</span>
                                <input type="text" name="harga_barang" id="harga_barang" class="form-control" aria-describedby="harga" value="{{ $atk->harga_barang }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jumlah</strong>
                            <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah" value="{{ $atk->jumlah }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sumber Dana</strong>
                            <input type="text" name="sumber_dana" placeholder="Sumber Dana" class="form-control" value="{{ $atk->sumber_dana }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Penanggung Jawab</strong>
                            <input type="text" name="pj" class="form-control" placeholder="Penanggung Jawab" value="{{ $atk->pj }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var tanpa_rupiah = document.getElementById('harga_barang');
        var jumlah = document.getElementById('jumlah');
        tanpa_rupiah.addEventListener('keyup', function(e)
        {
            tanpa_rupiah.value = formatRupiah(this.value);
        });
        jumlah.addEventListener('keyup', function(e)
        {
            jumlah.value = formatRupiah(this.value);
        });
        function formatRupiah(angka, prefix)
        {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split    = number_string.split(','),
                sisa     = split[0].length % 3,
                rupiah     = split[0].substr(0, sisa),
                ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
                
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
        function validator(text) {
            var number_string = text.replace(/[^,\d]/g, '').toString();
            return number_string;
        }
    </script>
@endpush