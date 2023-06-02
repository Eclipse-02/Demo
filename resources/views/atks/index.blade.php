@extends('layouts.master')

@section('title', 'Surat Masuk')

@section('menu-title', 'Surat Masuk')

@section('content')
    <div class="col-12 row mb-4">
        <div class="col-8"></div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <form action="{{ route('atks.search') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="data" class="form-control" placeholder="Search" value="{{ old('data') }}">
                    <button type="submit" class="input-group-text"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
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
                <tbody>
                    @if ($atks->count() == 0)
                        <tr>
                            <td class="text-center fs-5" colspan="8">There's nothing to show here. 
                                <a href="{{ route('atks.create') }}" class="bg-primary rounded px-2 py-1">Create</a> a data first.
                            </td>
                        </tr>
                    @else
                    @foreach ($atks as $atk)
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
                    @endforeach
                    @endif
                </tbody>
            </table>
            {!! $atks->links() !!}
        </div>
    </div>
@endsection