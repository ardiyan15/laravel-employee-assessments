@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Info User</h1>
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
                                <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="">Nama Lengkap</label>
                                            <input class="form-control" type="text" name="fullname"
                                                placeholder="Nama Lengkap" required value="{{ Auth::user()->fullname }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Username</label>
                                            <input class="form-control" type="text" name="username" placeholder="username"
                                                required value="{{ Auth::user()->username }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Password</label> <small>( Isi password jika ingin mengubah
                                                )</small>
                                            <input class="form-control" type="password" name="password"
                                                placeholder="password">
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-sm rounded">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
