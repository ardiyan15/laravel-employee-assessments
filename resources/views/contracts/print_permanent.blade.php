<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 style=" font-size: 25px; margin-left: 10%;">SURAT PENGANGKATAN KARYAWAN TETAP
                                </h4>
                                <h4 style=" font-size: 25px; margin-left: 30%; margin-top: -20px;">No.
                                    {{ $contract->no_contract }}/DSC-SPKT/{{ \NumConvert::roman(\Carbon\Carbon::parse($contract->updated_at)->month) }}/{{ substr(\Carbon\Carbon::parse($contract->updated_at), 2, 2) }}
                                </h4>
                                <div class="row ml-1">
                                    <table style="margin-left: 100px;">
                                        <tr>
                                            <td width="80">MENGINGAT</td>
                                            <td>:</td>
                                            <td>1. Surat Perjanjian Kerja</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>2. Masa percobaan yang telah anda laksanakan cukup
                                                memuaskan</td>
                                        </tr>
                                    </table>
                                    <p style="margin-left: 40%;">MEMUTUSKAN</p>

                                    <table style="margin-left: 100px;">
                                        <tr>
                                            <td width="80">PERTAMA</td>
                                            <td>:</td>
                                            <td> Mengangkat sebagai karyawan tetap :</td>
                                        </tr>
                                    </table>
                                    <table style="margin-left: 220px;">
                                        <tr></tr>
                                        <tr>
                                            <td width="80">Nama </td>
                                            <td>:</td>
                                            <td>{{ $contract->employee->fullname }}</td>
                                        </tr>
                                        <tr>
                                            <td>NIK</td>
                                            <td>:</td>
                                            <td>{{ $contract->employee->nip }}</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>:</td>
                                            <td>{{ $contract->employee->sub_division->divisions->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{ $contract->employee->sub_division->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pabrik</td>
                                            <td>:</td>
                                            <td>PT. DAHSHENG</td>
                                        </tr>
                                    </table>

                                    <table style="margin-left: 100px;">
                                        <tr>
                                            <td width="80">
                                                <p style="margin-top: -35px;">KEDUA</p>
                                            </td>
                                            <td width="5">
                                                <p style="margin-top: -35px;">:</p>
                                            </td>
                                            <td>Pengangkatan ini berlaku pada tanggal
                                                {{ \Carbon\Carbon::parse($contract->updated_at)->isoFormat('D MMMM Y') }}.
                                                <br> Dengan
                                                catatan
                                                bahwa apabila dikemudian hari terdapat kekeliruan <br> dalam
                                                pengangkatan
                                                ini, maka pihak perusahaan akan melakukan <br> penyesuaian ulang
                                                sebagaimana
                                                mestinya.
                                            </td>
                                        </tr>
                                    </table>
                                    <p style="margin-left: 100px;">Demikian Surat Pengangkatan ini diterbitkan sesuai
                                        dengan permohonan tanggal
                                        {{ \Carbon\Carbon::parse($contract->updated_at)->isoFormat('D MMMM Y') }} agar
                                        yang bersangkutan maklum.
                                    </p>
                                </div>

                                <p style="margin-right: 10%; text-align: right;">Dikeluarkan di : Tangerang</p>
                                <p style="margin-right: 7.5%; text-align: right;">Pada Tanggal <span>:</span>
                                    {{ \Carbon\Carbon::parse($contract->updated_at)->isoFormat('D MMMM Y') }}</p>
                                <p style="margin-left: 15%; text-align:left;">
                                    <span style="margin-right: 15%;  float:right;">
                                        Personalia
                                    </span>
                                </p>
                                <p style="margin-left: 30%; margin-top: 150px; text-align:left;">
                                    <span style="margin-right: 13%; float:right;">
                                        (LIA ALAWIAH)
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
