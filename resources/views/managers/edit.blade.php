@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Manager</h1>
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
                                <form action="{{ route('managers.update', $manager->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="">Nama Lengkap</label>
                                            <select class="form-control" name="user_id">
                                                <option value="">-- Pilih Manager --</option>
                                                @foreach ($users as $user)
                                                    @if ($manager->user_id === $user->id)
                                                        <option value="{{ $user->id }}" selected>{{ $user->fullname }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Divisi</label>
                                            <select class="form-control" name="sub_division_id">
                                                <option value="">-- Pilih Divisi --</option>
                                                @foreach ($divisions as $division)
                                                    @if ($manager->sub_division_id === $division->id)
                                                        <option value="{{ $division->id }}" selected>
                                                            {{ $division->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $division->id }}">{{ $division->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-sm rounded">Simpan</button>
                                    <a href="{{ route('users.index') }}"
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
