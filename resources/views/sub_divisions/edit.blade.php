@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Master Divisi</h1>
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
                                <form action="{{ route('subdivisions.update', $sub_division->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Divisi</label>
                                                <input class="form-control mb-3" type="text" name="name"
                                                    value="{{ $sub_division->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Departemen</label>
                                                <select name="division_id" class="form-control">
                                                    <option value="">-- Pilih Departemen --</option>
                                                    @foreach ($divisions as $division)
                                                        @if ($division->id === $sub_division->division_id)
                                                            <option value="{{ $division->id }}" selected>
                                                                {{ $division->name }}</option>
                                                        @else
                                                            <option value="{{ $division->id }}">{{ $division->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('divisions.index') }}"
                                        class="btn btn-secondary btn-sm rounded">Batal</a>
                                    <button class="btn btn-success btn-sm rounded">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
