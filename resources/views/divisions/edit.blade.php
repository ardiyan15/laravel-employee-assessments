@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Departemen</h1>
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
                                <form action="{{ route('divisions.update', $division->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="">Nama Departmen</label>
                                        <input class="form-control mb-3" type="text" name="name"
                                            value="{{ $division->name }}">
                                        <a href="{{ route('divisions.index') }}"
                                            class="btn btn-secondary btn-sm rounded">Batal</a>
                                        <button class="btn btn-success btn-sm rounded">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
