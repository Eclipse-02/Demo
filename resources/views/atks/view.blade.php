@extends('layouts.master')

@section('title', 'View')

@section('menu-title', 'View Pencatatan ATK')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Nama Barang:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $atk->nama_barang }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Satuan:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $atk->satuan }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Harga Barang:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $atk->harga_barang }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Jumlah:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $atk->jumlah }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Sumber Dana:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $atk->sumber_dana }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end">
                        <p class="fw-semibold">Penanggung Jawab:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <p class="fw-normal">{{ $atk->pj }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 row">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-end"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="{{ route('atks.index') }}" class="btn btn-primary col-auto">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection