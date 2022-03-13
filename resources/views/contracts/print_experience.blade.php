<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        table {
            font-size: 13px;
        }

    </style>
</head>

<body>
    <img src="{{ public_path('image/kop_surat.jpg') }}" width="750" style="margin-left: -20px; margin-bottom: 20px;">
    <h5 class="text-center">CERTIFICATE OF EMPLOYEMENT</h5>
    <h5 class="text-center">SURAT KETERANGAN KERJA</h5>
    <h5 class="text-center">NO.
        {{ $contract->no_contract }}/HRD-GA/{{ \NumConvert::roman(\Carbon\Carbon::parse($contract->updated_at)->month) }}/{{ substr(\Carbon\Carbon::parse($contract->updated_at), 0, 4) }}
    </h5>

    <div class="mt-5">
        <span style="font-size: 13px;">The Company Certify That</span>
        <br>
        <span style="font-size: 13px;">Pimpinan Perusahaan Dengan Ini Menerangkan Bahwa:</span>
    </div>

    <table>
        <tr>
            <td width="150">
                <u> Name </u>
                <br>
                Nama
            </td>
            <td width="10">
                <span style="display: block; margin-top: 10px;">
                    :
                </span>
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">
                    {{ $contract->employee->fullname }}
                </span>
            </td>
        </tr>
        <tr>
            <td width="150">
                <u>Badge No</u> <br>
                NIK
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">:</span>
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">{{ $contract->employee->nip }}</span>
            </td>
        </tr>
        <tr>
            <td width="150">
                <u>Department</u> <br>
                Bagian
            </td>
            <td>
                <span style="display: block; margin-top: 10px">:</span>
            </td>
            <td>
                <span
                    style="display: block; margin-top: 10px;">{{ $contract->employee->sub_division->divisions->name }}</span>
            </td>
        </tr>
        <tr>
            <td width="150">
                <u>Position</u> <br>
                Jabatan
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">:</span>
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">{{ $contract->employee->sub_division->name }}</span>
            </td>
        </tr>
        <tr>
            <td width="150">
                <u>Periode Of Service</u> <br>
                Masa Kerja
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">:</span>
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">
                    {{ \Carbon\Carbon::parse($contract->start_date)->isoFormat('D MMMM Y') }} s/d
                    {{ \Carbon\Carbon::parse($contract->end_date)->isoFormat('D MMMM Y') }}
                </span>
            </td>
        </tr>
        <tr>
            <td width="150">
                <u>Reason Of Leaving</u> <br>
                Alasan Berhenti
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">:</span>
            </td>
            <td>
                <span style="display: block; margin-top: 10px;">HABIS KONTRAK</span>
            </td>
        </tr>
    </table>

    <p style="font-size: 13px;" class="mt-4">We would like to take this opportunity to thank for your past
        efforts and contributions to
        PT.DAHSHENG and wish
        you every success in the future</p>
    <hr style="height: 0.5px; background-color: #424242;">
    <p style="font-size: 13px;">Kami ucapkan banyak terima kasih atas usaha dan dedikasi yang telah saudara berikan
        kepada PT. DAHSHENG di
        Tangerang, dan Berharap semoga prestasi serta keberhasilan senantiasa menyertai saudara diwaktu yang akan datang
    </p>

    <p style="margin-right: 10%; text-align: right;">Tangerang, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}
    </p>
    <p style="margin-left: 15%; text-align:left;">
        <span style="margin-right: 15%;  float:right;">
            PT DAHSENG
        </span>
    </p>
    <p style="margin-left: 20%; margin-top: 150px; text-align:left;">
        <span style="margin-right: 16%; float:right;">
            <u>LIA ALAWIAH</u>
        </span>
        <br>
        <span style="margin-right: -18%; float:right;">
            HRD HEAD
        </span>
    </p>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
