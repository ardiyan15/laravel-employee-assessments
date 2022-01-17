@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ubah Kontrak</h1>
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
                                <form action="{{ route('contracts.update', $contract->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">Karyawan</label>
                                            <select name="employee_id" class="form-control">
                                                <option value="">-- Pilih Karyawan --</option>
                                                @foreach ($employees as $employee)
                                                    @if ($employee->id === $contract->employee_id)
                                                        <option value="{{ $employee->id }}" selected>
                                                            {{ $employee->fullname }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $employee->id }}">
                                                            {{ $employee->fullname }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="">Jenis Kontrak</label>
                                            <select name="contract_type" id="type_contract" class="form-control">
                                                <option value="">-- Pilih Kontrak --</option>
                                                <option value="permanent" @if ($contract->is_permanent === 1) selected @endif>Tetap</option>
                                                <option value="not_permanent" @if ($contract->is_permanent !== 1) selected @endif>Tidak Tetap</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group" id="start_div" @if ($contract->is_permanent === 1) style="display: none;" @endif>
                                            <label for="">Mulai Kontrak</label>
                                            <input type="date" name="start_date" class="form-control"
                                                value="{{ $contract->start_date }}">
                                        </div>
                                        <div class="col-md-6 form-group" id="end_div" @if ($contract->is_permanent === 1) style="display: none;" @endif>
                                            <label for="">Akhir Kontrak</label>
                                            <input type="date" name="end_date" class="form-control"
                                                value="{{ $contract->end_date }}">
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


@push('scripts')
    <script>
        $("#type_contract").on('change', function() {
            let type = $(this).val()
            if (type !== 'permanent') {
                $("#start_div").removeAttr('style')
                $("#end_div").removeAttr('style')
            } else {
                $("#start_div").css('display', 'none')
                $("#end_div").css('display', 'none')
            }
        })

        $("#employee").on('change', function() {
            let employeeName = $("#employee option:selected").text().trim()
            console.log(employeeName)
            $("#employee_name").text(employeeName)
        })
    </script>
@endpush
