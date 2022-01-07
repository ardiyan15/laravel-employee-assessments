@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Kontrak</h1>
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
                                <form action="{{ route('contracts.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="">Karyawan</label>
                                            <select name="employee_id" class="form-control">
                                                <option value="">-- Pilih Karyawan --</option>
                                                @foreach ($employees as $employee)
                                                    <option value="{{ $employee->id }}">{{ $employee->fullname }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="">Jenis Kontrak</label>
                                            <select name="" id="type_contract" class="form-control">
                                                <option value="">-- Pilih Kontrak --</option>
                                                <option value="permanent">Tetap</option>
                                                <option value="not_permanent">Tidak Tetap</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group" id="start_div" style="display: none;">
                                            <label for="">Mulai Kontrak</label>
                                            <input type="date" name="start_date" id="start_date" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group" id="end_div" style="display: none;">
                                            <label for="">Akhir Kontrak</label>
                                            <input type="date" name="end_date" id="end_date" class="form-control">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>Isi Kontrak</label>
                                            <textarea class="form-control" name="content" id="content"
                                                placeholder="Kontrak Karyawan" cols="10">
                                                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt="" src="http://localhost:8000/image/kop_surat.png" /></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><u><span style="font-size:14.0pt">SURAT PERJANJIAN KERJA WAKTU TERTENTU</span></u></b></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><span style="color:white">No. &hellip;.. / SEA/SYF/ XI/2007.</span></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span lang="NL" style="font-size:11.0pt"><span style="color:black">Pada hari ini</span></span><span lang="NL" style="font-size:11.0pt"><span style="color:black">, 25 November 2020 &nbsp;</span></span><span lang="NL" style="font-size:11.0pt"><span style="color:black">bertempat di Tangerang</span></span><span lang="NL" style="font-size:11.0pt"><span style="color:black">, </span></span><span lang="NL" style="font-size:11.0pt"><span style="color:black">diadakan Perjanjian Kerja sebagai berikut:</span></span></span></span></span></p>

    <p style="text-align:justify">&nbsp;</p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="line-height:150%"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt"><span style="line-height:150%"><span style="color:black">1.&nbsp;&nbsp;&nbsp;&nbsp; Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span></span></span><b><span style="font-size:11.0pt"><span style="line-height:150%"><span style="color:black">LIA ALAWIAH</span></span></span></b></span></span></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="line-height:150%"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt"><span style="line-height:150%"><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : HRD</span></span></span><span style="font-size:11.0pt"><span style="line-height:150%"><span style="color:black"> HEAD of </span></span></span><span style="font-size:11.0pt"><span style="line-height:150%"><span style="color:black">PT. DAHSHENG</span></span></span></span></span></span></span></p>

    <p style="margin-left:192px; text-align:justify; text-indent:-144.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="line-height:150%"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt"><span style="line-height:150%"><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : </span></span></span><span style="font-size:11.0pt"><span style="line-height:150%"><span style="color:black">Graha Balaraja Industrial Estate, Jl. Raya Serang km 27 Kav. D8</span></span></span>&nbsp; </span></span></span></span></p>

    <p style="margin-left:192px; text-align:justify; text-indent:-144.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="line-height:150%"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt"><span style="line-height:150%"><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Kel. Tobat Kec. Balaraja Kab. Tangerang &ndash; Banten.</span></span></span></span></span></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span lang="NL" style="font-size:11.0pt"><span style="color:black">Bertindak untuk dan atas nama&nbsp; PT. </span></span><span style="font-size:11.0pt"><span style="color:black">DAHSHENG yang beralamat di Graha Balaraja Industrial Estate, Jl. Raya Serang Km 27 Kav. D8 Kel. Tobat Kec. Balaraja Kab. Tangerang - Banten, yang bergerak di bidang Industri alas kaki, dan selanjutnya disebut sebagai PIHAK PERTAMA.</span></span></span></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">2.&nbsp;&nbsp;&nbsp;&nbsp; Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <b>HANA ROSDIANA</b></span></span></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="line-height:150%"><span new="" roman="" style="font-family:" times=""><span lang="DE" style="font-size:11.0pt"><span style="line-height:150%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jenis Kelamin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Perempuan</span></span></span></span></span></span></p>

    <p><span style="font-size:12pt"><span new="" roman="" style="font-family:" times="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size:11.0pt"><span style="color:black">Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span></span><span style="font-size:11.0pt"><span style="color:black">KP. PABUARAN DS. KARANG HARJA RT.004/ RW. 002&nbsp;</span></span></span></span><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt"><span style="color:black">KEC. CISOKA KAB. TANGERANG</span></span></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt"><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Tempat, Tanggal lahir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span></span><span style="font-size:11.0pt"><span style="color:black">TANGERANG, 18 JANUARI 1995</span></span></span></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt"><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;No. Telp/HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 082210526251</span></span></span></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt"><span style="color:black">Bertindak untuk dan atas nama pribadi yang selanjutnya disebut</span></span><span lang="DE" style="font-size:11.0pt"> sebagai PIHAK KEDUA. Dalam hal ini kedua belah Pihak sepakat untuk mengadakan Perjanjian Kerja Waktu Tertentu dimana akan dituangkan dalam pasal &ndash; pasal berikut in</span><span style="font-size:11.0pt">i.</span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL 1</span></b></span></span></p>

    <p style="margin-left:1px; text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span lang="ES" style="font-size:11.0pt">PIHAK KEDUA diterima bekerja oleh PIHAK PERTAMA </span><span lang="ES" style="font-size:11.0pt">sebagai KARYAWAN </span><span lang="ES" style="font-size:11.0pt">pada perusahaan<b> </b>PT. DAHSHENG t</span><span lang="NL" style="font-size:11.0pt">erhitung mulai </span><span lang="NL" style="font-size:11.0pt">dari </span><span lang="NL" style="font-size:11.0pt">tanggal</span><b> </b><span lang="NL" style="font-size:11.0pt"><span style="color:black">25 Novem</span></span><span lang="NL" style="font-size:11.0pt">ber 2020</span><span lang="NL" style="font-size:11.0pt"> sampai dengan 24 Februari 2021 selama 03 Bulan Sebagai <b>STAFF GA.</b></span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span lang="NL" style="font-size:11.0pt">PASAL 2</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span lang="NL" style="font-size:11.0pt">Dalam hubungan kerja ini PIHAK KEDUA akan menerima upah sebesar</span> <b><span lang="NL" style="font-size:14.0pt">Rp. 4.272.475,-</span></b></span></span></span></p>

    <p><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><span lang="NL" style="font-size:11.0pt">(</span><span lang="NL" style="font-size:11.0pt">Empat Juta Dua Ratus Tujuh Puluh Dua Ribu Empat Ratus Tujuh Puluh Lima Rupiah )</span><span lang="NL" style="font-size:11.0pt">, </span><span lang="NL" style="font-size:11.0pt">d</span><span lang="NL" style="font-size:11.0pt">an akan dibayarkan setiap tanggal 10 bulan berikutnya dengan cara Transfer&nbsp;</span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span lang="NL" style="font-size:11.0pt">PASAL 3&nbsp; </span></b></span></span></p>

    <ul>
     <li style="margin-left:12px; text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times=""><span lang="FI" style="font-size:11.0pt">Waktu kerja Pihak Kedua sebagai berikut :</span></span></span></span></span></li>
    </ul>

    <p style="margin-left:52px; text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times=""><span lang="FI" style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Full Time: Shift 1</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span lang="PT-BR" style="font-size:11.0pt">a. Senin s/d </span><span lang="PT-BR" style="font-size:11.0pt">Kamis&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span lang="PT-BR" style="font-size:11.0pt">: Jam 07</span><span lang="PT-BR" style="font-size:11.0pt">:</span><span lang="PT-BR" style="font-size:11.0pt">00-15</span><span lang="PT-BR" style="font-size:11.0pt">:00 (</span><span style="font-size:11.0pt">Istirahat</span> <span style="font-size:11.0pt">: Jam 1</span><span style="font-size:11.0pt">1:3</span><span style="font-size:11.0pt">0-12</span><span style="font-size:11.0pt">:3</span><span style="font-size:11.0pt">0</span><span style="font-size:11.0pt">)</span></span></span></span></span></p>

    <p style="margin-left:52px; text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang="FI" style="font-size:11.0pt">b. Jumat</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span lang="FI" style="font-size:11.0pt">: Jam 07</span><span lang="FI" style="font-size:11.0pt">:</span><span lang="FI" style="font-size:11.0pt">00-15</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0</span> <span lang="PT-BR" style="font-size:11.0pt">(</span><span style="font-size:11.0pt">Istirahat</span> <span style="font-size:11.0pt">: Jam 1</span><span style="font-size:11.0pt">1:3</span><span style="font-size:11.0pt">0-13</span><span style="font-size:11.0pt">:</span><span style="font-size:11.0pt">00</span><span style="font-size:11.0pt">)</span></span></span></span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times=""><span lang="ES" style="font-size:11.0pt">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c. Sabtu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : </span><span lang="FI" style="font-size:11.0pt">Jam 07</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0-12</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0</span> <span lang="PT-BR" style="font-size:11.0pt">(</span><span lang="ES" style="font-size:11.0pt">Tanpa istirahat)</span></span></span></span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt left 3.0cm"><span new="" roman="" style="font-family:" times=""><span lang="ES" style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Shift 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. </span><span lang="PT-BR" style="font-size:11.0pt">Senin s/d </span><span lang="PT-BR" style="font-size:11.0pt">Kamis&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span lang="PT-BR" style="font-size:11.0pt">: Jam 15</span><span lang="PT-BR" style="font-size:11.0pt">:</span><span lang="PT-BR" style="font-size:11.0pt">00-23</span><span lang="PT-BR" style="font-size:11.0pt">:00 (</span><span style="font-size:11.0pt">Istirahat</span> <span style="font-size:11.0pt">: Jam 1</span><span style="font-size:11.0pt">8:0</span><span style="font-size:11.0pt">0-19</span><span style="font-size:11.0pt">:0</span><span style="font-size:11.0pt">0</span><span style="font-size:11.0pt">)</span></span></span></span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt left 3.0cm"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b. </span><span lang="FI" style="font-size:11.0pt">Jumat</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span lang="FI" style="font-size:11.0pt">: Jam 15</span><span lang="FI" style="font-size:11.0pt">:</span><span lang="FI" style="font-size:11.0pt">30-23</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0</span> <span lang="PT-BR" style="font-size:11.0pt">(</span><span style="font-size:11.0pt">Istirahat</span> <span style="font-size:11.0pt">: Jam 18</span><span style="font-size:11.0pt">:00</span><span style="font-size:11.0pt">-19</span><span style="font-size:11.0pt">:</span><span style="font-size:11.0pt">00</span><span style="font-size:11.0pt">)</span></span></span></span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt left 3.0cm"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c. </span><span lang="ES" style="font-size:11.0pt">Sabtu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : </span><span lang="FI" style="font-size:11.0pt">Jam 12</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0-17</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0</span> <span lang="PT-BR" style="font-size:11.0pt">(</span><span lang="ES" style="font-size:11.0pt">Tanpa istirahat)</span></span></span></span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt left 3.0cm"><span new="" roman="" style="font-family:" times=""><span lang="ES" style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Shift 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. </span><span lang="PT-BR" style="font-size:11.0pt">Senin s/d </span><span lang="PT-BR" style="font-size:11.0pt">Kamis&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span lang="PT-BR" style="font-size:11.0pt">: Jam 23</span><span lang="PT-BR" style="font-size:11.0pt">:</span><span lang="PT-BR" style="font-size:11.0pt">00-07</span><span lang="PT-BR" style="font-size:11.0pt">:00 (</span><span style="font-size:11.0pt">Istirahat</span> <span style="font-size:11.0pt">: Jam 03</span><span style="font-size:11.0pt">:0</span><span style="font-size:11.0pt">0-04</span><span style="font-size:11.0pt">:0</span><span style="font-size:11.0pt">0</span><span style="font-size:11.0pt">)</span></span></span></span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt left 3.0cm"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b. </span><span lang="FI" style="font-size:11.0pt">Jumat</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span lang="FI" style="font-size:11.0pt">: Jam 23</span><span lang="FI" style="font-size:11.0pt">:</span><span lang="FI" style="font-size:11.0pt">30-07</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0</span> <span lang="PT-BR" style="font-size:11.0pt">(</span><span style="font-size:11.0pt">Istirahat</span> <span style="font-size:11.0pt">: Jam 03</span><span style="font-size:11.0pt">:30</span><span style="font-size:11.0pt">-04</span><span style="font-size:11.0pt">:</span><span style="font-size:11.0pt">30</span><span style="font-size:11.0pt">)</span></span></span></span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt left 3.0cm"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c. </span><span lang="ES" style="font-size:11.0pt">Sabtu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : </span><span lang="FI" style="font-size:11.0pt">Jam 17</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0-22</span><span lang="FI" style="font-size:11.0pt">:3</span><span lang="FI" style="font-size:11.0pt">0</span> <span lang="PT-BR" style="font-size:11.0pt">(</span><span lang="ES" style="font-size:11.0pt">Tanpa istirahat)</span></span></span></span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size:11.0pt">Pengaturan jam diatas dapat berubah sewaktu-waktu</span><span style="font-size:11.0pt">, sesuai</span><span style="font-size:11.0pt"> dengan kebutuhan PIHAK PERTAMA</span><span style="font-size:11.0pt">.</span></span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL 4</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">PIHAK KEDUA memiliki tanggung jawab untuk mengikuti pengaturan perusahaan mengenai jam kerja, apabila tidak mengikuti aturan jam kerja yang diatur maka perusahaan berhak untuk tidak memberikan upah sesuai UU yang berlaku.</span></span></span></span></p>

    <p align="center" style="text-align:center">&nbsp;</p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL 5</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">Segala bentuk dinas luar (termasuk acara pemerintahan) harus terlebih dahulu melalui persetujuan kepala bagian, apabila tidak ada persetujuan dari kepala bagian maka dianggap tidak hadir.</span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL 6</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">Apabila PIHAK KEDUA melanggar peraturan perusahaan dalam waktu 6 (enam) bulan </span><span style="font-size:11.0pt">sehingga mendapat surat peringatan sampai tingkat ke-</span><span style="font-size:11.0pt">3 </span><span style="font-size:11.0pt">(tiga </span><span style="font-size:11.0pt">termasuk</span><span style="font-size:11.0pt">), ma</span><span style="font-size:11.0pt">ka PIHAK PERTAMA berhak untuk menurunkan sanksi sesuai dengan aturan uu no. 13 / 2003.</span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL 7</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">Setelah diterima oleh PIHAK PERTAMA , PIHAK KEDUA menyatakan tidak terikat atau tidak mempunyai hubungan kerja dengan perusahaan atau pihak-pihak lain. Pelanggaran atas ketentuan ini mengakibatkan Pemutusan Hubungan Kerja tanpa syarat&nbsp; ( tanpa uang pesangon, uang jasa, dan ganti rugi lainnya ). </span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL&nbsp; 8</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span lang="FI" style="font-size:11.0pt">PIHAK PERTAMA menyediakan perlengkapan&nbsp; kerja</span> <span lang="FI" style="font-size:11.0pt">(</span> <span lang="FI" style="font-size:11.0pt">termasuk perlengkapan kesehatan dan keselamatan kerja</span> <span lang="FI" style="font-size:11.0pt">) sesuai dengan kebutuhannya.</span> <span lang="FI" style="font-size:11.0pt">Perlengkapan tersebut merupakan inventaris perusahaan yang akan digunakan oleh PIHAK KEDUA selama bekerja di perusahaan.</span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL&nbsp; 9</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">PIHAK KEDUA bersedia membayar iuran JAMSOSTEK (</span> <span style="font-size:11.0pt">Jaminan Hari Tua</span> <span style="font-size:11.0pt">) sebesar 2 %, Iuran BPJS KESEHATAN sebesar 1 % dan Pensiun 1% dari </span><span style="font-size:11.0pt">G</span><span style="font-size:11.0pt">aji Pokok sesuai Peraturan Perundang-undangan yang berlaku, s.erta Pajak Penghasilan (</span> <span style="font-size:11.0pt">PPH 21</span> <span style="font-size:11.0pt">) Sesuai </span><span style="font-size:11.0pt">d</span><span style="font-size:11.0pt">engan Peraturan Pemerintah. PIHAK PERTAMA hanya membantu menghitung dan memotong serta menyetor dan melaporkan kepada pihak yang terkait.</span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL&nbsp; 10</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">PIHAK KEDUA bersedia mentaati / mematuhi setiap perintah atasan&nbsp; dalam menjalankan tugas dan menjalin hubungan&nbsp; kerja yang baik antar</span> <span style="font-size:11.0pt">sesama karyawan.</span></span></span></span></p>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL&nbsp; &nbsp;11</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span lang="FI" style="font-size:11.0pt">PIHAK KEDUA menyatakan bersedia untuk&nbsp; :</span></span></span></span></p>

    <ol style="list-style-type:lower-alpha">
     <li style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">Dimutasikan ke </span><span style="font-size:11.0pt">departemen</span><span style="font-size:11.0pt"> / bagian lain di dalam lingkungan</span> <span style="font-size:11.0pt">perusahaan dimana PIHAK </span><span style="font-size:11.0pt">KEDUA</span><span style="font-size:11.0pt"> diterima bekerja dalam jenjang yang sama tanpa mengurangi pendapatan / upah.</span></span></span></span></span></li>
     <li style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times=""><span lang="FI" style="font-size:11.0pt">Membantu perusahaan untuk melaksanakan tugas</span><span lang="FI" style="font-size:11.0pt"> - </span><span lang="FI" style="font-size:11.0pt">tugas lainnya guna kelancaran pekerjaan jika diperlukan.</span></span></span></span></span></li>
    </ol>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span style="font-size:11.0pt">PASAL&nbsp; 12</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">&nbsp;PIHAK KEDUA wajib untuk&nbsp; :</span></span></span></span></p>

    <ol style="list-style-type:lower-alpha">
     <li style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">Memegang teguh semua rahasia perusahaan</span><span style="font-size:11.0pt">, </span><span style="font-size:11.0pt">mengenai segala hal yang diketahuinya</span> <span style="font-size:11.0pt">di</span> <span style="font-size:11.0pt">dalam perusahaan dalam arti yang seluas-luasnya </span><span style="font-size:11.0pt">ter</span><span style="font-size:11.0pt">kecuali untuk kepentingan Negara.</span></span></span></span></span></li>
     <li style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times=""><span style="font-size:11.0pt">Bersikap sopan, turut serta dalam usaha menjaga / memelihara kebersihan lingkungan perusahaan, serta senantiasa menjunjung tinggi nama baik perusahaan.</span></span></span></span></span></li>
     <li style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="tab-stops:list 36.0pt"><span new="" roman="" style="font-family:" times=""><span lang="NL" style="font-size:11.0pt">Mengembalikan barang-barang inventaris yang merupakan milik perusahaan,</span><span lang="NL" style="font-size:11.0pt"> termasuk</span> <span lang="NL" style="font-size:11.0pt">saat</span><span lang="NL" style="font-size:11.0pt"> PIHAK KEDUA keluar</span> <span lang="NL" style="font-size:11.0pt">/</span> <span lang="NL" style="font-size:11.0pt">mengundurkan diri / berhenti dari PT. DAHSHENG.</span></span></span></span></span></li>
    </ol>

    <p align="center" style="text-align:center"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b><span lang="NL" style="font-size:11.0pt">PASAL&nbsp; 13</span></b></span></span></p>

    <p style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times=""><span lang="NL" style="font-size:11.0pt">Hal &ndash; hal yang tidak disebutkan dalam perjanjian ini diatur dalam UU Tenaga Kerja RI yang berlaku</span> <span lang="NL" style="font-size:11.0pt">dan Peraturan Perusahaan yang akan diatur kemudian.</span></span></span></span></p>

    <p style="text-align:justify"><span lang="NL" style="font-size:11.0pt"><span new="" roman="" style="font-family:" times="">Demikian Surat Perjanjian Kerja ini dibuat atas persetujuan bersama dan ditanda tangani oleh kedua belah pihak setelah dibaca dan dimengerti, serta dalam keadaan sehat dan tanpa paksaan dari pihak manapun</span></span></p>

    <p style="text-align:justify; text-indent:-21.0pt">&nbsp;</p>

    <p><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span new="" roman="" style="font-family:" times="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span new="" roman="" style="font-family:" times="">Karyawan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tangerang,<b> </b>25 November 2020</span></span></p>

    <p style="margin-left: 480px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-size:12pt"><span new="" roman="" style="font-family:" times="">PT. DAHSHENG</span></span></p>

    <p style="margin-left: 880px;">&nbsp;</p>

    <p style="margin-left: 880px;">&nbsp;</p>

    <p style="margin-left: 880px;">&nbsp;</p>

    <p style="margin-left: 880px;">&nbsp;</p>

    <p style="margin-left: 40px;">(__________________)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size:12pt"><span new="" roman="" style="font-family:" times=""><b>(</b><b>LIA ALAWIAH)</b></span></span></p>

    <p style="margin-left: 40px;"><span style="font-size:12pt"><span new="" roman="" style="font-family:" times="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; HRD HEAD</span></span></p>

    <p style="text-align: justify; margin-left: 680px;">&nbsp;</p>

    <p style="text-align: justify; margin-left: 680px;">&nbsp;</p>

    <p style="text-align:justify">&nbsp;</p>

                                                </textarea>
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
    </script>
@endpush
