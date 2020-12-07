<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat File Riwayat Pasien</title>
</head>
<body>
    <h2>File Dari {{$data->datapasien->Nama}} Adalah <u> {{$data->dokumen_perawatan}} </u></h2>
    <p>
      <center><iframe src="{{url('storage/images/riwayat_pasien/'. $data->dokumen_perawatan)}}" frameborder="2" style="width: 2000px; height: 1000px;"></iframe></center>
    </p>
</body>
</html>