@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Master Supervisor</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button data-toggle="modal" data-target="#addManager"
                                    class="btn btn-primary btn-sm rounded pull-right">Tambah Supervisor</button>
                            </div>
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Nama Supervisor</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($supervisors as $supervisor)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $supervisor->users->fullname }}</td>
                                                <td class="text-center">{{ $supervisor->divisions->name }}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('supervisors.destroy', $supervisor->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('supervisors.edit', $supervisor->id) }}"
                                                            class="btn btn-info btn-sm rounded">Ubah</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Ingin menghapus data?')"
                                                            class="btn btn-danger btn-sm rounded delete-confirm">Hapus</button>
                                                    </form>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="addManager">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Supervisor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('supervisors.store') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="">Supervisor</label>
                            <select class="form-control" name="user_id">
                                <option value="" selected>- Pilih Supervisor --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Divisi</label>
                            <select class="form-control" name="sub_division_id">
                                <option value="" selected>- Pilih Divisi --</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm rounded">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
