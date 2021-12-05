@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Penilaian Karyawan</h1>
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
                                <form action="{{ route('evaluations.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Nama Karyawan</label>
                                            <select name="employee_id" class="form-control">
                                                <option value="">-- Pilih Karyawan --</option>
                                                @foreach ($employees as $employee)
                                                    <option value="{{ $employee->id }}">{{ $employee->fullname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="offset-2 text-center col-md-3 border rounded">
                                            <p style="font-size: 20px;">Total Nilai</p>
                                            <p id="result" style="font-size: 20px; font-weight: bold;">0</p>
                                        </div>
                                        <hr style="color: black;" width="100%;">
                                        <div class="row mr-2 ml-2">
                                            <div class="col-md-6">
                                                <h5> Kehadiran </h5>
                                                <select name="value1" id="value1" class="col-md-12 form-control">
                                                    <option value="">-- Nilai Kehadiran --</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                        </div>
                                            <div class="col-md-6">
                                                <h5> Hasil Kerja </h5>
                                                <select name="value2" id="value2" class="col-md-12 form-control">
                                                    <option value="">-- Nilai Hasil Kerja --</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4">
                                                <h5> Kualitas Kerja </h5>
                                                <select name="value3" id="value3" class="col-md-12 form-control">
                                                    <option value="">-- Nilai Kualitas Kerja --</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4">
                                                <h5>Kedisiplinan</h5>
                                                <select name="value4" id="value4" class="col-md-12 form-control">
                                                    <option value="">-- Nilai Kedisiplinan --</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4">
                                                <h5> Sikap / Perilaku </h5>
                                                <select name="value5" id="value5" class="col-md-12 form-control">
                                                    <option value="">-- Nilai Sikap / Perilaku --</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4">
                                                <h5> Memo </h5>
                                              <input class="form-control" type="text" name="memo" placeholder="memo">
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <a href="{{ route('evaluations.index') }}" class="btn btn-secondary btn-sm rounded">Kembali</a>
                                                <button class="btn btn-success btn-sm rounded">Submit</button>
                                            </div>
                                        </div>
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

@push('scripts')
    <script>
        let result = null;
        let kehadiran = '';
        let work_result = '';
        let work_quality = 0;
        let attitude = 0;
        let discipline = 0;

        $("#value1").on('change', function() {
            kehadiran = $("#value1 :selected").val()
            sum()
        })

        $("#value2").on('change', function() {
            work_result = $("#value2 :selected").val()
            sum()
        })

        $("#value3").on('change', function() {
            work_quality = $("#value3 :selected").val()
            sum()
        })

        $("#value4").on('change', function() {
            discipline = $("#value4 :selected").val()
            sum()
        })

        $("#value5").on('change', function() {
            attitude = $("#value5 :selected").val()
            sum()
        })

        function sum() {
            result = +kehadiran + +work_result + +work_quality + +discipline + +attitude;
            $("#result").text(result)
        }
    </script>
@endpush
