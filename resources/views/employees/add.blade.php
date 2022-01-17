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
                                            <input class="form-control {{ $errors->has('nip') ? 'is-invalid' : '' }}"
                                                type="number" name="nip" placeholder="NIP" required maxlength="10"
                                                value="{{ old('nip') }}">
                                            @error('nip')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Nama Lengkap</label>
                                            <input
                                                class="form-control  {{ $errors->has('fullname') ? 'is-invalid' : '' }}"
                                                type="text" name="fullname" placeholder="Nama Lengkap" required
                                                value="{{ old('fullname') }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">No Handphone</label>
                                            <input type="number" class="form-control" name="phone"
                                                placeholder="No Handphone" required value="{{ old('phone') }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="gender" class="form-control" required>
                                                <option value="" selected>-- Pilih Jenis Kelamin --</option>
                                                <option value="Laki - Laki"
                                                    {{ old('gender') == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki
                                                </option>
                                                <option value="Perempuan"
                                                    {{ old('religion') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="birth_place"
                                                placeholder="Tempat Lahir" value="{{ old('birth_place') }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control  {{ $errors->has('age') ? 'is-invalid' : '' }}"
                                                type="date" name="age" placeholder="Umur" required
                                                value="{{ old('age') }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Agama</label>
                                            <select name="religion" class="form-control" required>
                                                <option value="" selected>-- Pilih Agama --</option>
                                                <option value="islam" {{ old('religion') == 'islam' ? 'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="kristen"
                                                    {{ old('religion') == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                                <option value="hindu" {{ old('religion') == 'hindu' ? 'selected' : '' }}>
                                                    Hindu</option>
                                                <option value="buddha"
                                                    {{ old('religion') == 'buddha' ? 'selected' : '' }}>Buddha</option>
                                                <option value="lainnya"
                                                    {{ old('religion') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Divisi</label>
                                            <select name="sub_division_id" class="form-control" required>
                                                <option value="" selected>-- Pilih Divisi --</option>
                                                @foreach ($sub_divisions as $sub_division)
                                                    <option value="{{ $sub_division->id }}"
                                                        {{ old('sub_division_id') == $sub_division->id ? 'selected' : '' }}>
                                                        {{ $sub_division->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Alamat Lengkap</label>
                                            <textarea
                                                class="form-control  {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                                name="address" id="" cols="30" rows="5" placeholder="Alamat Lengkap"
                                                required>{{ old('address') }}</textarea>
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-sm rounded">Simpan</button>
                                    <a href="{{ route('employees.index') }}"
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
