<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak Surat</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            margin: 40px;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 180px;
        }

        .value {
            display: inline-block;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            text-align: right;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Surat</h2>

        <div class="section">
            <p><span class="label">Nomor Surat:</span> <span class="value">{{ $surat->nomor_surat }}</span></p>
            <p><span class="label">Pengirim Surat:</span> <span class="value">{{ $surat->pengirim_surat }}</span></p>
            <p><span class="label">Waktu Surat:</span> <span class="value">{{ \Carbon\Carbon::parse($surat->waktu_surat)->format('d-m-Y H:i') }}</span></p>
            <p><span class="label">Lampiran Surat:</span> <span class="value">{{ $surat->lampiran_surat }}</span></p>
            <p><span class="label">Perihal Surat:</span> <span class="value">{{ $surat->perihal_surat }}</span></p>
            <p><span class="label">Penerima Surat:</span> <span class="value">{{ $surat->penerima_surat }}</span></p>
            <p><span class="label">Isi Surat:</span> <span class="value">{{ $surat->isi_surat }}</span></p>
            <p><span class="label">Tempat Surat:</span> <span class="value">{{ $surat->tempat_surat }}</span></p>
            <p><span class="label">Jenis Surat:</span> <span class="value">{{ ucfirst($surat->jenis_surat) }}</span></p>
        </div>

        <div class="section">
            <p><span class="label">Unit Penerbit:</span> <span class="value">{{ $surat->unitPenerbit->nama_unit ?? '-' }}</span></p>
            <p><span class="label">Pengesah Surat:</span> <span class="value">{{ $surat->pengesah->nama_pengesah ?? '-' }}</span></p>
        </div>

        <div class="footer">
            Dibuat pada: {{ $surat->created_at->format('d-m-Y H:i') }}
        </div>
    </div>  
</body>
</html>
