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
                                <img src="{{ public_path('image/kop_surat.jpg') }}" width="750"
                                    style="margin-left: -20px;">
                                <h4 class="text-center" style="margin-left: 10%; font-size: 25px;">
                                    SURAT
                                    PERJANJIAN KERJA WAKTU TERTENTU</h4>
                                <p>Pada hari ini,
                                    {{ \Carbon\Carbon::parse($contract->start_date)->isoFormat('D MMMM Y') }}
                                    bertempat di
                                    Tangerang, diadakan Perjanjian Kerja
                                    sebagai
                                    berikut:
                                </p>
                                <div class="row ml-1">
                                    <table>
                                        <tr>
                                            <td width="150">Nama</td>
                                            <td>:</td>
                                            <td> LIA ALAWIAH</td>
                                        </tr>
                                        <tr>
                                            <td width="150">Jabatan</td>
                                            <td>:</td>
                                            <td> HRD HEAD of PT. DAHSHENG</td>
                                        </tr>
                                        <tr>
                                            <td width="150">Alamat</td>
                                            <td width="1">
                                                <p style="margin-top: -5px;">
                                                    :
                                                </p>
                                            </td>
                                            <td>
                                                Graha Balaraja Industrial Estate, Jl. Raya Serang km 27 Kav. D8 Kel.
                                                Tobat Kec. Balaraja Kab. Tangerang – Banten.
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="mt-3">Bertindak untuk dan atas nama PT. DAHSHENG yang beralamat di
                                    Graha Balaraja
                                    Industrial Estate, Jl. Raya Serang Km 27 Kav. D8 Kel. Tobat Kec. Balaraja Kab.
                                    Tangerang - Banten, yang bergerak di bidang Industri alas kaki, dan selanjutnya
                                    disebut sebagai PIHAK PERTAMA.
                                </p>
                                <div class="row ml-1">
                                    <table>
                                        <tr>
                                            <td width="150">Nama</td>
                                            <td>: {{ $contract->employee->fullname }}</td>
                                        </tr>
                                        <tr>
                                            <td width="150">Jenis Kelamin</td>
                                            <td>: {{ $contract->employee->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td width="150">Alamat</td>
                                            <td>: {{ $contract->employee->address }} </td>
                                        </tr>
                                        <tr>
                                            <td width="150">Tempat, Tanggal Lahir</td>
                                            <td>: {{ $contract->employee->birth_place }},
                                                {{ \Carbon\Carbon::parse($contract->employee->birth_date)->isoFormat('D MMMM Y') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150">No Telp / HP</td>
                                            <td>: {{ $contract->employee->phone }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="mt-3">Bertindak untuk dan atas nama pribadi yang selanjutnya disebut
                                    sebagai PIHAK KEDUA.
                                    Dalam hal ini kedua belah Pihak sepakat untuk mengadakan Perjanjian Kerja Waktu
                                    Tertentu dimana akan dituangkan dalam pasal – pasal berikut ini.</p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 1</p>
                                <p>PIHAK KEDUA diterima bekerja oleh PIHAK PERTAMA sebagai KARYAWAN pada perusahaan PT.
                                    DAHSHENG terhitung mulai dari tanggal
                                    {{ \Carbon\Carbon::parse($contract->start_date)->isoFormat('D MMMM Y') }} sampai
                                    dengan
                                    {{ \Carbon\Carbon::parse($contract->end_date)->isoFormat('D MMMM Y') }} selama
                                    {{ \Carbon\Carbon::parse($contract->start_date)->diffInMonths(\Carbon\Carbon::parse($contract->end_date)) }}
                                    Bulan Sebagai Staff
                                    {{ $contract->employee->sub_division->name }}.
                                </p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 2</p>
                                <p>Dalam hubungan kerja ini PIHAK KEDUA akan menerima upah sebesar
                                    <b>@currency($contract->salary),-</b>
                                    ({{ ucwords(\Terbilang::make($contract->salary)) . ' Rupiah' }}), dan
                                    akan dibayarkan setiap tanggal 10 bulan berikutnya dengan cara Transfer .
                                </p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 3</p>
                                <p>Waktu kerja Pihak Kedua sebagai berikut :</p>
                                <table style="margin-right: auto; margin-left: auto;">
                                    <tr>
                                        <td width="60">Shift 1</td>
                                        <td width="150">a. Senin s/d Kamis</td>
                                        <td>: Jam 07:00 - 15:00 (Istirahat: Jam 11:30-12:30)</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td width="100">b. Jumat</td>
                                        <td>: Jam 07:00 - 15:00 (Istirahat: Jam 11:30 - 13:00)</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td width="100">c. Sabtu</td>
                                        <td>: Jam 07:30 - 12:30 (Tanpa Istirahat)</td>
                                    </tr>
                                    <tr>
                                        <td width="60">Shift 2</td>
                                        <td width="150">a. Senin s/d Kamis</td>
                                        <td>: Jam 15:00 - 23:00 (Istirahat: Jam 18:00 - 19:00)</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td width="100">b. Jumat</td>
                                        <td>: Jam 15:30 - 23:30 (Istirahat : Jam 18:00 - 19:00)</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td width="100">c. Sabtu</td>
                                        <td>: Jam 12:30 - 17:30 (Tanpa istirahat)</td>
                                    </tr>
                                    <tr>
                                        <td width="60">Shift 3</td>
                                        <td width="150">a. Senin s/d Kamis</td>
                                        <td>: Jam 23:00 - 07:00 (Istirahat : Jam 03:00 - 04:00)</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td width="100">b. Jumat</td>
                                        <td>: Jam 23:30 - 07:30 (Istirahat : Jam 03:30 - 04:30)</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td width="100">c. Sabtu</td>
                                        <td>: Jam 17:30 - 22:30 (Tanpa istirahat)</td>
                                    </tr>
                                </table>
                                <p>Pengaturan jam diatas dapat berubah sewaktu-waktu, sesuai dengan kebutuhan PIHAK
                                    PERTAMA.
                                </p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 4</p>
                                <p>PIHAK KEDUA memiliki tanggung jawab untuk mengikuti pengaturan perusahaan mengenai
                                    jam
                                    kerja, apabila tidak mengikuti aturan jam kerja yang diatur maka perusahaan berhak
                                    untuk
                                    tidak memberikan upah sesuai UU yang berlaku.</p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 5</p>

                                <p>Segala bentuk dinas luar (termasuk acara pemerintahan) harus terlebih dahulu melalui
                                    persetujuan kepala bagian, apabila tidak ada persetujuan dari kepala bagian maka
                                    dianggap tidak hadir.
                                </p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 6</p>

                                <p>Apabila PIHAK KEDUA melanggar peraturan perusahaan dalam waktu 6 (enam) bulan
                                    sehingga
                                    mendapat surat peringatan sampai tingkat ke-3 (tiga termasuk), maka PIHAK PERTAMA
                                    berhak
                                    untuk menurunkan sanksi sesuai dengan aturan uu no. 13 / 2003.
                                </p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 7</p>

                                <p>Setelah diterima oleh PIHAK PERTAMA , PIHAK KEDUA menyatakan tidak terikat atau tidak
                                    mempunyai hubungan kerja dengan perusahaan atau pihak-pihak lain. Pelanggaran atas
                                    ketentuan ini mengakibatkan Pemutusan Hubungan Kerja tanpa syarat ( tanpa uang
                                    pesangon,
                                    uang jasa, dan ganti rugi lainnya ).
                                </p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 8</p>

                                <p>PIHAK PERTAMA menyediakan perlengkapan kerja ( termasuk perlengkapan kesehatan dan
                                    keselamatan kerja ) sesuai dengan kebutuhannya. Perlengkapan tersebut merupakan
                                    inventaris perusahaan yang akan digunakan oleh PIHAK KEDUA selama bekerja di
                                    perusahaan.
                                </p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 9</p>

                                <p>PIHAK KEDUA bersedia membayar iuran JAMSOSTEK ( Jaminan Hari Tua ) sebesar 2 %, Iuran
                                    BPJS KESEHATAN sebesar 1 % dan Pensiun 1% dari Gaji Pokok sesuai Peraturan
                                    Perundang-undangan yang berlaku, s.erta Pajak Penghasilan ( PPH 21 ) Sesuai dengan
                                    Peraturan Pemerintah. PIHAK PERTAMA hanya membantu menghitung dan memotong serta
                                    menyetor dan melaporkan kepada pihak yang terkait.</p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 10</p>

                                <p>PIHAK KEDUA bersedia mentaati / mematuhi setiap perintah atasan dalam menjalankan
                                    tugas
                                    dan menjalin hubungan kerja yang baik antar sesama karyawan.
                                </p>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 11</p>

                                <p>PIHAK KEDUA menyatakan bersedia untuk :</p>
                                <ol type="a">
                                    <li>Dimutasikan ke departemen / bagian lain di dalam lingkungan perusahaan dimana
                                        PIHAK
                                        KEDUA diterima bekerja dalam jenjang yang sama tanpa mengurangi pendapatan /
                                        upah.
                                    </li>
                                    <li>Membantu perusahaan untuk melaksanakan tugas - tugas lainnya guna kelancaran
                                        pekerjaan jika diperlukan.
                                    </li>
                                </ol>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 12</p>

                                <p>PIHAK KEDUA wajib untuk :</p>
                                <ol type="a">
                                    <li>Memegang teguh semua rahasia perusahaan, mengenai segala hal yang diketahuinya
                                        di
                                        dalam perusahaan dalam arti yang seluas-luasnya terkecuali untuk kepentingan
                                        Negara.
                                    </li>
                                    <li>Bersikap sopan, turut serta dalam usaha menjaga / memelihara kebersihan
                                        lingkungan
                                        perusahaan, serta senantiasa menjunjung tinggi nama baik perusahaan.
                                    </li>
                                    <li>Mengembalikan barang-barang inventaris yang merupakan milik perusahaan, termasuk
                                        saat PIHAK KEDUA keluar / mengundurkan diri / berhenti dari PT. DAHSHENG.
                                    </li>
                                </ol>
                                <p style="font-weight: bold; margin-left: 45%; font-size: 20px;">Pasal 13</p>

                                <p>Hal – hal yang tidak disebutkan dalam perjanjian ini diatur dalam UU Tenaga Kerja RI
                                    yang
                                    berlaku dan Peraturan Perusahaan yang akan diatur kemudian.
                                    Demikian Surat Perjanjian Kerja ini dibuat atas persetujuan bersama dan ditanda
                                    tangani
                                    oleh kedua belah pihak setelah dibaca dan dimengerti, serta dalam keadaan sehat dan
                                    tanpa paksaan dari pihak manapun.
                                </p>
                                <p style="margin-right: 10%; text-align: right;">Tangerang,
                                    {{ \Carbon\Carbon::parse($contract->start_date)->isoFormat('D MMMM Y') }}</p>
                                <p style="margin-left: 15%; text-align:left;">
                                    Karyawan
                                    <span style="margin-right: 15%;  float:right;">
                                        PT DAHSHENG
                                    </span>
                                </p>
                                <p style="margin-left: 14%; margin-top: 200px; text-align:left;">
                                    ({{ $contract->employee->fullname }})
                                    <span style="margin-right: 15%; float:right;">
                                        (LIA ALAWIAH) <br />
                                        <span style="margin-left: 20px;">HRD HEAD</span>
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
