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
                        <th>Pengirim</th>
                        <th>Tanggal Surat</th>
                        <th>No Surat</th>
                        <th>Perihal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($surats as $surat)
                    <tbody>
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
                    </tbody>
                @endforeach
            </table>
            {!! $surats->links() !!}
        </div>
    </div>
@endsection