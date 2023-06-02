@extends('layouts.master')

@section('title', 'Dashboard')

@section('menu-title', 'Dashboard')

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-12 mb-3">
        <h4 class="mb-4"><span id="time"></span><span class="bg-primary text-white px-2 py-1 rounded">{{ auth()->user()->name }}</span></h4>
        <h6>Please select a <span class="bg-primary text-white px-2 py-1 rounded">Module</span> below or beside the content</h6>
    </div>
    <div class="col-lg-6 col-12">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $surats }}</h3>

                <p>Arsip Surat</p>
            </div>
            <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <a href="{{ route('surats.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-6 col-12">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $atks }}</h3>

                <p>Pencatatan ATK</p>
            </div>
            <div class="icon">
                <i class="fas fa-book-open"></i>
            </div>
            <a href="{{ route('atks.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
@endsection

@push('scripts')
    <script>
        var d = new Date();
        var time = d.getHours();
        var text = document.getElementById('time');

        if (time < 12) {
        text.innerHTML = "Good Morning, ";
        }

        if (time > 12) {
        text.innerHTML = "Good Afternoon, ";
        }

        if (time > 16) {
        text.innerHTML = "Good Evening, ";
        }

        if (time > 22) {
        text.innerHTML = "Good Night, ";
        }
    </script>
@endpush