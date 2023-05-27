@extends('layouts.master')

@section('title', 'Create')

@section('menu-title', 'Create Surat Masuk')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('surats.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Pengirim</strong>
                            <input type="text" name="pengirim" class="form-control" placeholder="Pengirim">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tanggal Surat</strong>
                            <input type="date" name="tanggal_surat" class="form-control" placeholder="Tanggal Surat">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group d-flex flex-column">
                            <strong>No Surat</strong>
                            <div class="d-flex flex-row">
                                <select class="form-control text-center" style="flex: 0 0 18.3%; max-width: 18.3%;" name="kode_surat">
                                    <option value="">-- Kode Surat --</option>
                                    <option value="01">01 (SK)</option>
                                    <option value="02">02 (SU)</option>
                                    <option value="03">03 (SPm)</option>
                                    <option value="04">04 (SPb)</option>
                                    <option value="05">05 (SPp)</option>
                                    <option value="06">06 (SPn)</option>
                                    <option value="07">07 (SM)</option>
                                    <option value="08">08 (ST)</option>
                                    <option value="09">09 (SKet)</option>
                                    <option value="10">10 (SR)</option>
                                    <option value="11">11 (SB)</option>
                                    <option value="12">12 (SPPD)</option>
                                    <option value="13">13 (SRT)</option>
                                    <option value="14">14 (PK)</option>
                                    <option value="15">15 (SPeng)</option>
                                </select>
                                <span class="d-flex align-items-center text-center mx-2">/</span>
                                <input type="unsigned-zerofill" minlength="3" maxlength="3" name="urut_surat" class="form-control text-center" style="flex: 0 0 18.3%; max-width: 18.3%;" placeholder="Nomor Urut">
                                <span class="d-flex align-items-center text-center mx-2">/</span>
                                <input type="text" name="lembaga_surat" class="form-control text-center" style="flex: 0 0 18.3%; max-width: 18.3%;" placeholder="Nama Lembaga">
                                <span class="d-flex align-items-center text-center mx-2">/</span>
                                <select class="form-control text-center" style="flex: 0 0 18.3%; max-width: 18.3%;" name="bulan_surat">
                                    <option value="">-- Bulan Surat --</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option value="VI">VI</option>
                                    <option value="VII">VII</option>
                                    <option value="VIII">VIII</option>
                                    <option value="IX">IX</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                                <span class="d-flex align-items-center text-center mx-2">/</span>
                                <input type="number" minlength="4" maxlength="4" name="tahun_surat" class="form-control text-center" style="flex: 0 0 18.3%; max-width: 18.3%;" placeholder="Tahun Surat">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Perihal</strong>
                            <input type="text" name="perihal" class="form-control" placeholder="Perihal">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Isi Surat</strong>
                            <textarea name="isi_surat" cols="30" rows="10" placeholder="Isi Surat" class="form-control"></textarea>
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