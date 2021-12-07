@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kontrak Karyawan</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('contracts.create') }}"
                                    class="btn btn-primary btn-sm rounded pull-right">Buat Kontrak Karyawan</a>
                            </div>
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">NIP</th>
                                            <th class="text-center">Karyawan</th>
                                            <th class="text-center">Jabatan</th>
                                            <th class="text-center">Tanggal Dibuat</th>
                                            <th class="text-center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contracts as $contract)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $contract->employee->nip }}</td>
                                                <td class="text-center">{{ $contract->employee->fullname }}</td>
                                                <td class="text-center">{{ $contract->employee->sub_division->name }}
                                                </td>
                                                <td class="text-center">{{ $contract->created_at }}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('contracts.destroy', $contract->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('contracts.edit', $contract->id) }}"
                                                            class="btn btn-info btn-sm rounded">Ubah</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Ingin menghapus data?')"
                                                            class="btn btn-danger btn-sm rounded delete-confirm">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
