@extends('layouts.master')

@section('title', 'Surat Masuk')

@section('menu-title', 'Surat Masuk')

@section('content')
    <div class="col-12 row mb-4">
        <div class="col-8"></div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <form action="{{ route('surats.search') }}" method="GET">
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
                        <th>Pengirim</th>
                        <th>Tanggal Surat</th>
                        <th>No Surat</th>
                        <th>Perihal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($surats->count() == 0)
                        <tr>
                            <td class="text-center fs-5" colspan="6">There's nothing to show here. 
                                <a href="{{ route('surats.create') }}" class="bg-primary rounded px-2 py-1">Create</a> a data first.
                            </td>
                        </tr>
                    @else
                    @foreach ($surats as $surat)
                        <tr>
                            <th>{{ ++$i }}</th>
                            <th>{{ $surat->pengirim }}</th>
                            <th>{{ $surat->tanggal_surat }}</th>
                            <th>{{ $surat->no_surat }}</th>
                            <th>{{ $surat->perihal }}</th>
                            <th>
                                <form action="{{ route('surats.destroy', $surat->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('surats.show', $surat->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('surats.edit', $surat->id) }}">
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
            {!! $surats->links() !!}
        </div>
    </div>
@endsection
