@extends('layouts.master')

@section('title', 'Edit')

@section('menu-title', 'Edit Surat Masuk')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('surats.update', $surat->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Pengirim</strong>
                            <input type="text" name="pengirim" class="form-control @error('pengirim') is-invalid @enderror" placeholder="Pengirim" value="{{ $surat->pengirim }}">
                            @error('pengirim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tanggal Surat</strong>
                            <input type="date" name="tanggal_surat" class="form-control @error('tanggal_surat') is-invalid @enderror" placeholder="Tanggal Surat" value="{{ $surat->tanggal_surat }}">
                            @error('tanggal_surat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group d-flex flex-column">
                            <strong>No Surat</strong>
                            <div class="d-flex flex-row">
                                <select class="form-control text-center col-2 @error('kode_surat') is-invalid @enderror" name="kode_surat">
                                    <option value="{{ $surat->kode_surat }}">{{ $surat->kode_surat }}</option>
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
                                <input type="number" minlength="3" maxlength="3" name="urut_surat" class="form-control col-2 text-center @error('urut_surat') is-invalid @enderror" placeholder="Nomor Urut" value="{{ $surat->urut_surat }}">
                                <span class="d-flex align-items-center text-center mx-2">/</span>
                                <input type="text" name="lembaga_surat" class="form-control col-2 text-center @error('lembaga_surat') is-invalid @enderror" placeholder="Nama Lembaga" value="{{ $surat->lembaga_surat }}">
                                <span class="d-flex align-items-center text-center mx-2">/</span>
                                <select class="form-control text-center col-2 @error('bulan_surat') is-invalid @enderror" name="bulan_surat">
                                    <option value="{{ $surat->bulan_surat }}">{{ $surat->bulan_surat }}</option>
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
                                <input type="number" minlength="4" maxlength="4" name="tahun_surat" class="form-control col-2 text-center @error('tahun_surat') is-invalid @enderror" placeholder="Tahun Surat" value="{{ $surat->tahun_surat }}">
                                @error('kode_surat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('urut_surat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('lembaga_surat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('bulan_surat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('tahun_surat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Perihal</strong>
                            <input type="text" name="perihal" class="form-control @error('perihal') is-invalid @enderror" placeholder="Perihal" value="{{ $surat->perihal }}">
                            @error('perihal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Isi Surat</strong>
                            <textarea name="isi_surat" cols="30" rows="10" placeholder="Isi Surat" class="form-control @error('isi_surat') is-invalid @enderror">{{ $surat->isi_surat }}</textarea>
                            @error('isi_surat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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