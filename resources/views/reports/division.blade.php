@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Laporan Karyawan</h1>
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
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <form action="">
                                            <label for="">Status</label>
                                            <select name="division_id" class="form-control">
                                                <option value="">-- Pilih Divisi --</option>
                                                @foreach ($divisions as $division)
                                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                @endforeach
                                            </select>
                                            <button class="btn btn-primary btn-sm rounded mt-2">Submit</button>
                                            <a href="{{ route('report.reportdivisionemployee') }}"
                                                class="btn btn-secondary btn-sm rounded mt-2">Reset</a>
                                            @if ($division_id)
                                                <a href="{{ route('reports.print', $division_id) }}"
                                                    class="btn btn-success btn-sm rounded mt-2" target="_blank">Print</a>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">NIP</th>
                                            <th class="text-center">Nama Karyawan</th>
                                            <th class="text-center">Jabatan</th>
                                            <th class="text-center">Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($employees as $employee)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $employee->nip }}</td>
                                                <td class="text-center">{{ $employee->fullname }}</td>
                                                <td class="text-center">{{ $employee->sub_division->name }}</td>
                                                <td class="text-center">{{ $employee->address }}</td>
                                            </tr>
                                        @empty
                                            {{ null }}
                                        @endforelse
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
