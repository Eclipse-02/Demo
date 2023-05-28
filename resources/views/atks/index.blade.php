@extends('layouts.master')

@section('title', 'Surat Masuk')

@section('menu-title', 'Surat Masuk')

@section('content')
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Harga Barang</th>
                        <th>Jumlah</th>
                        <th>Sumber Dana</th>
                        <th>PJ</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($atks as $atk)
                    <tbody>
                        <tr>
                            <th>{{ ++$i }}</th>
                            <th>{{ $atk->nama_barang }}</th>
                            <th>{{ $atk->satuan }}</th>
                            <th>Rp {{ $atk->harga_barang }}</th>
                            <th>{{ $atk->jumlah }}</th>
                            <th>{{ $atk->sumber_dana }}</th>
                            <th>{{ $atk->pj }}</th>
                            <th>
                                <form action="{{ route('atks.destroy', $atk->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('atks.show', $atk->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('atks.edit', $atk->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </th>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            {!! $atks->links() !!}
        </div>
    </div>
@endsection