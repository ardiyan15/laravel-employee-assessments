@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Penilaian Karyawan</h1>
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
                                <a href="{{ route('approvals.index') }}"
                                    class="btn btn-secondary btn-sm rounded mb-2">Kembali</a>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Nama Karyawan</label>
                                        <input type="text" class="form-control"
                                            value="{{ $evaluation->employees->fullname }}" readonly>
                                    </div>
                                    <div class="offset-2 text-center col-md-3 border rounded">
                                        <p style="font-size: 20px;" 1>Total Nilai</p>
                                        <p id="result" style="font-size: 20px; font-weight: bold;">
                                            {{ $evaluation->sum }}</p>
                                    </div>
                                    <hr style="color: black;" width="100%;">
                                    <div class="row mr-2 ml-2">
                                        <div class="col-md-6">
                                            <h5> Kehadiran </h5>
                                            <input type="text" class="form-control" value="{{ $evaluation->value_1 }}"
                                                readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <h5> Hasil Kerja </h5>
                                            <input type="text" class="form-control" value="{{ $evaluation->value_2 }}"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <h5> Kualitas Kerja </h5>
                                            <input type="text" class="form-control" value="{{ $evaluation->value_3 }}"
                                                readonly>

                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <h5>Kedisiplinan</h5>
                                            <input type="text" class="form-control" value="{{ $evaluation->value_4 }}"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <h5> Sikap / Perilaku </h5>
                                            <input type="text" value="{{ $evaluation->value_5 }}" class="form-control"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <h5> Memo </h5>
                                            <input class="form-control" type="text" name="memo" placeholder="memo"
                                                value="{{ $evaluation->memo }}" readonly>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button class="btn btn-success btn-sm rounded" data-toggle="modal"
                                                data-target="#approveModal">Approve</button>
                                            <button class="btn btn-danger btn-sm rounded" data-toggle="modal"
                                                data-target="#rejectModal">Tolak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Approval Penilaian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('approvals.update', $evaluation->id) }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="Approve">
                            <div class="form-group">
                                <label for="">Keterangan Setuju</label>
                                <textarea class="form-control" name="keterangan" id="" cols="30" rows="10"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm rounded"
                                data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary btn-sm rounded">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Approval Penilaian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('approvals.update', $evaluation->id) }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="Ditolak">
                            <div class="form-group">
                                <label for="">Keterangan Ditolak</label>
                                <textarea class="form-control" name="keterangan" id="" cols="30" rows="10"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm rounded"
                                data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary btn-sm rounded">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
