@extends('layouts.master')

@section('title', 'Pencatatan ATK')

@section('menu-title', 'Pencatatan ATK')

@section('content')
    <div class="col-12 row mb-4">
        <div class="col-8">
            @if ($atks->count() == 0)
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="There is no data to export">
                    <button type="button" class="btn btn-success dropdown-toggle" disabled="">
                    Export
                    </button>
                </span>
            @else
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Export
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('atks.export-excel') }}">Excel</a></li>
                        <li><a class="dropdown-item" href="{{ route('atks.export-pdf') }}">PDF</a></li>
                    </ul>
                </div>
            @endif
        </div>
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
                            <a class="btn btn-primary" href="{{ route('atks.show', $atk->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('atks.edit', $atk->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger" onclick="deletePopup()">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                            <form id="delete-data" action="{{ route('atks.destroy', $atk->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
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

@push('scripts')
    @if ($atks->count() != 0)
    <script>
        function deletePopup() {
            Swal.fire({
                title: '<strong>Delete Data</strong>',
                icon: 'warning',
                html:'Are you sure you want to delete <b>{{ $atk->nama_barang }}</b>, with <b>{{ $atk->jumlah }}</b> items? ',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:'Yes, delete it!',
                cancelButtonAriaLabel: 'No, go back!'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    document.getElementById('delete-data').submit();
                }
            })
        }
    </script>
    @endif
@endpush