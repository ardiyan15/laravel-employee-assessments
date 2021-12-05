@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Karyawan</h1>
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
                                <form action="{{ route('employees.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label>NIP</label>
                                            <input class="form-control" type="text" name="nip" placeholder="NIP" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" type="text" name="fullname"
                                                placeholder="Nama Lengkap" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="gender" class="form-control" required>
                                                <option value="" selected>-- Pilih Jenis Kelamin --</option>
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Umur</label>
                                            <input class="form-control" type="text" name="age" placeholder="Umur"
                                                required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Agama</label>
                                            <select name="religion" class="form-control" required>
                                                <option value="" selected>-- Pilih Agama --</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Jabatan</label>
                                            <select name="sub_division_id" class="form-control" required>
                                                <option value="" selected>-- Pilih Jabatan --</option>
                                                @foreach ($sub_divisions as $sub_division)
                                                    <option value="{{ $sub_division->id }}">{{ $sub_division->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Alamat Lengkap</label>
                                            <textarea class="form-control" name="address" id="" cols="30" rows="5"
                                                placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-sm rounded">Simpan</button>
                                    <a href="{{ route('users.index') }}"
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
