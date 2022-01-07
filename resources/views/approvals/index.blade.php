@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Approval Penilaian</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">NIP</th>
                                            <th class="text-center">Nama Karyawan</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Nilai</th>
                                            <th class="text-center">Grade</th>
                                            <th class="text-center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($evaluations as $evaluation)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $evaluation->employees->nip }}</td>
                                                <td class="text-center">{{ $evaluation->employees->fullname }}</td>
                                                <td class="text-center">
                                                    {{ $evaluation->employees->sub_division->name }}</td>
                                                <td class="text-center">{{ $evaluation->sum }}</td>
                                                <td class="text-center">{{ $evaluation->grade }}
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('approvals.show', $evaluation->id) }}"
                                                        class="btn btn-info btn-sm rounded">Detail</a>
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
