@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Penilaian Karyawan</h1>
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
                                <a href="{{ route('evaluations.create') }}"
                                    class="btn btn-primary btn-sm rounded pull-right">Tambah Penilaian </a>
                            </div>
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">NIP</th>
                                            <th class="text-center">Karyawan</th>
                                            <th class="text-center">Grade</th>
                                            <th class="text-center">Penilai</th>
                                            <th class="text-center">Tanggal Dibuat</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($evaluations as $evaluation)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $evaluation->employees->nip }}</td>
                                                <td class="text-center">{{ $evaluation->employees->fullname }}</td>
                                                <td class="text-center">{{ $evaluation->grade }}</td>
                                                <td class="text-center">{{ $evaluation->users->fullname }}</td>
                                                <td class="text-center">{{ $evaluation->created_at }}</td>
                                                <td class="text-center">
                                                    @if ($evaluation->status === 'Pending')
                                                        <span
                                                            class="badge badge-pill badge-warning">{{ $evaluation->status }}</span>
                                                    @elseif($evaluation->status === 'Ditolak')
                                                        <span
                                                            class="badge badge-pill badge-danger">{{ $evaluation->status }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-pill badge-success">{{ $evaluation->status }}</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <form action="{{ route('evaluations.destroy', $evaluation->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('evaluations.edit', $evaluation->id) }}"
                                                            class="btn btn-info btn-sm rounded">Edit</a>
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
