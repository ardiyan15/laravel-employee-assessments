@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Karyawan</h1>
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
                                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label>NIP</label>
                                            <input class="form-control" type="number" name="nip" placeholder="NIP"
                                                required value="{{ $employee->nip }}" maxlength="10">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" type="text" name="fullname"
                                                placeholder="Nama Lengkap" required value="{{ $employee->fullname }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">No Handphone</label>
                                            <input type="number" class="form-control" name="phone"
                                                placeholder="No Handphone" required value="{{ $employee->phone }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="gender" class="form-control" required>
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                @foreach ($genders as $gender)
                                                    @if ($gender['value'] === $employee->gender)
                                                        <option value="{{ $gender['value'] }}" selected>
                                                            {{ $gender['name'] }}</option>
                                                    @else
                                                        <option value="{{ $gender['value'] }}">{{ $gender['name'] }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="birth_place"
                                                placeholder="Tempat Lahir" value="{{ $employee->birth_place }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="age" placeholder="Umur" required
                                                value="{{ $employee->birth_date }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Agama</label>
                                            <select name="religion" class="form-control" required>
                                                <option value="">-- Pilih Agama --</option>
                                                @foreach ($religions as $religion)
                                                    @if ($religion['value'] === $employee->religion)
                                                        <option value="{{ $religion['value'] }}" selected>
                                                            {{ $religion['name'] }}</option>
                                                    @else
                                                        <option value="{{ $religion['value'] }}">
                                                            {{ $religion['name'] }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Jabatan</label>
                                            <select name="sub_division_id" class="form-control" required>
                                                <option value="" selected>-- Pilih Jabatan --</option>
                                                @foreach ($sub_divisions as $sub_division)
                                                    @if ($sub_division->id === $employee->sub_division_id)
                                                        <option value="{{ $sub_division->id }}" selected>
                                                            {{ $sub_division->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $sub_division->id }}" selected>
                                                            {{ $sub_division->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control">
                                                @if ($employee->status === 'active')
                                                    <option value="active" selected>In</option>
                                                    <option value="inacitve">Off</option>
                                                @else
                                                    <option value="active">In</option>
                                                    <option value="inacitve" selected>Off</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Alamat Lengkap</label>
                                            <textarea class="form-control" name="address" id="" rows="4"
                                                placeholder="Alamat Lengkap">{{ $employee->address }}</textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-sm rounded">Simpan</button>
                                    <a href="{{ route('employees.index') }}"
                                        class="btn btn-default btn-sm rounded">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
