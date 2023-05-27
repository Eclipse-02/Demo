@extends('layouts.master')

@section('title', 'View')

@section('menu-title', 'View Surat Masuk')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Pengirim:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $surat->pengirim }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Tanggal Surat:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $surat->tanggal_surat }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">No Surat:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $surat->no_surat }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Perihal:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $surat->perihal }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Isi Surat:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $surat->isi_surat }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="{{ route('surats.index') }}" class="btn btn-primary col-auto">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection