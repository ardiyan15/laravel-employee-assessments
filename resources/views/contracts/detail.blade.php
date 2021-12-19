@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Kontrak</h1>
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
                                <a href="{{ route('contracts.print', $contract->id) }}" target="_blank"
                                    class="btn btn-primary btn-sm rounded pull-right">Print</a>
                                <form action="{{ route('contracts.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="text-center col-md-12 form-group">
                                            <label for="">Nama Karyawan</label>
                                            <p for="">{{ $contract->employee->fullname }}</p>
                                        </div>
                                        <hr width="50%">
                                        <div class="col-md-12">
                                            {!! $contract->content !!}

                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <button class="btn btn-success btn-sm rounded">Simpan</button>
                                        <a href="{{ route('contracts.index') }}"
                                            class="btn btn-secondary btn-sm rounded">Kembali</a>
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
