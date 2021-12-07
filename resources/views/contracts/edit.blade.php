@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah User</h1>
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
                                <form action="{{ route('contracts.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">Karyawan</label>
                                            <select name="employee_id" class="form-control">
                                                <option value="">-- Pilih Karyawan --</option>
                                                @foreach ($employees as $employee)
                                                    @if ($employee->id === $contract->employee_id)
                                                        <option value="{{ $employee->id }}" selected>
                                                            {{ $employee->fullname }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $employee->id }}">
                                                            {{ $employee->fullname }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="content" id="content" placeholder="Kontrak Karyawan">
                                                                {{ $contract->content }}
                                                        </textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-sm rounded">Simpan</button>
                                    <a href="{{ route('contracts.index') }}"
                                        class="btn btn-secondary btn-sm rounded">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
