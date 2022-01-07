@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Master Karyawan</h1>
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
                                <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm rounded">
                                    Tambah Karyawan
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">NIP</th>
                                            <th class="text-center">Nama Karyawan</th>
                                            <th class="text-center">Tanggal Lahir</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Tanggal Dibuat</th>
                                            <th class="text-center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $employee->nip }}</td>
                                                <td class="text-center">{{ $employee->fullname }}</td>
                                                <td class="text-center">{{ $employee->birth_date }}</td>
                                                <td class="text-center">{{ $employee->sub_division->name }}</td>
                                                <td class="text-center">{{ $employee->address }}</td>
                                                <td class="text-center">{{ substr($employee->created_at, 0, 10) }}
                                                </td>
                                                <td class="text-center">
                                                    <form action="{{ route('employees.destroy', $employee->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('employees.edit', $employee->id) }}"
                                                            class="btn btn-info btn-sm rounded">Edit</a>
                                                        <button onclick="return confirm('Ingin menghapus data?')"
                                                            class="btn btn-danger btn-sm"> Hapus </button>
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
