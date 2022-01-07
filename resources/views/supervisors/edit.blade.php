@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Supervisor</h1>
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
                                <form action="{{ route('supervisors.update', $supervisor->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label>Supervisor</label>
                                            <select class="form-control" name="user_id">
                                                <option value="" selected>- Pilih Supervisor --</option>
                                                @foreach ($users as $user)
                                                    @if ($user->id == $supervisor->user_id)
                                                        <option value="{{ $user->id }}" selected>{{ $user->fullname }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $user->id }}">{{ $user->fullname }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Divisi</label>
                                            <select class="form-control" name="sub_division_id">
                                                <option value="" selected>- Pilih Divisi --</option>
                                                @foreach ($divisions as $division)
                                                    @if ($division->id === $supervisor->sub_division_id)
                                                        <option value="{{ $division->id }}" selected>
                                                            {{ $division->name }}</option>
                                                    @else
                                                        <option value="{{ $division->id }}">
                                                            {{ $division->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-sm rounded">Simpan</button>
                                    <a href="{{ route('supervisors.index') }}"
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
