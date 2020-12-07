<?php
date_default_timezone_set('Asia/Bangkok');

function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return $hari_tuk;
 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style type="text/css">
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
.content{
	padding-top: 0.5cm;
	margin-left: 1cm;
	padding-bottom: 0.5cm;
	margin-right: 1cm;
}
p{
	font-size: 12pt;
}
h2{
	font-size: 14pt;
}
table{
	table-layout: auto; 
	border-collapse: collapse; 
	border-spacing: 0; 
	width: 80%; 
	font-size: 12pt;
	margin: 0 auto; 
	white-space: nowrap; 
	padding-top: 7px; 
	padding-left:20px;
	padding-right:20px;
}
td.fitwidth {
    width: 1px;
    white-space: nowrap;
}
hr.class-1 { 
            border-top: 3px solid #000;
            margin-top: -13px;  
        } 
          
hr.class-2 { 
            border-top: 1px solid #000;
            margin-top: -7px; 
        } 
@media print {
  body, page {

    margin: 0;
    box-shadow: none;
  }
}
	</style>
</head>
<body style="font-family: 'Times New Roman'">
<page size="A4">
	<div class="content">
	<table>
		<tr>
			<td style="width: 20%; text-align: center;">
			<img src="https://upload.wikimedia.org/wikipedia/id/c/cf/Logo_BNN.png" style="height: 100px;width: 100px;"><br>
			<p><strong>BNNP KALBAR</strong></p>	
			</td>	
			<td style="width: 80%; text-align: center;">
			<h2><strong>BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA<br> POVINSI KALIMANTAR BARAT</strong></h2>
			<p style="margin-top: -15px;">
			Jl. Parit H. Husein II, KOmplek Alex Griya Permai III Blok F No.1 Pontianak Tenggara<br>
			Pontianak - Kalimantan Barat<br>
			Telepon: (0561) 574579, Faksimile: (0561) 574578<br>
			Email: bnnpkalbar@gmail.com	
			</p>
			</td>
		</tr>	
	</table>
	<hr class="class-1" style="width:100%;text-align:center;"> 
	<hr class="class-2" style="width:100%;text-align:center;"> 
		<p style="text-decoration: underline;text-align: center;"><strong>
				SURAT KETERANGAN PEMERIKSAAN NARKOTIKA
		</strong></p>
		<p style="text-align: center; margin-top: -7px;"><strong>
				No:SKPN/&emsp;&emsp;/I/KA/RH.00.00/KP/2020/BNNP 
		</strong></p>
		<p style="text-align: justify; padding-top: 10px; padding-left:20px ;padding-right:20px; ">
				Yang bertanda tangan di bawah ini menerangkan bahwa, pada hari 
				{{-- {{ 
				echo hari_ini();
				echo " tanggal";
				echo date(' d F Y');
				echo " pukul";
				echo date(' H:i');
                }} --}}
                {{-- {{$hari_tuk}} --}}
                Tanggal 
 
			{{-- @foreach($daftar as $row) --}}
				bertempat di KLINIK PRATAMA BNNP KALBAR atas dasar permintaan dari {{$daftar->Nama}} dengan surat pemohonan tertanggal {{date(' d F Y')}}  telah dilakukan pemeriksaan terhadap:<br>	
		</p> 
	<table>
		<tr>
			<td class="fitwidth">Nama</td>
			<td>:</td>
			<td>{{$daftar->Nama}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$daftar->Jenis_kelamin}}</td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>:</td>
			<td>{{$daftar->Umur}} Tahun</td>
		</tr>
		<tr>
			<td>Tempat/Tanggal Lahir</td>
			<td>:</td>
			<td>{{$daftar->Tempat}} / {{$daftar->Tanggal_lahir}}</td>	

		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$daftar->Alamat}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$daftar->Pekerjaan}}</td>
		</tr>
	</table>
	<br>
	<p style="padding-top: 10px; padding-left:20px ;padding-right:20px;">A. Hasil Wawancara dan Pemeriksaan Fisik:</p>
	<table>
		<tr>
			<td class="fitwidth">1. Kesadaran</td>
			<td>:</td>
			<td>{{$daftar->wawancara['Kesadaran']}}</td>
		</tr>
		<tr>
			<td>2. Keadaan Umum</td>
			<td >:</td>
			<td>{{$daftar->wawancara['Keadaan_umum']}}</td>
		</tr>
		<tr>
			<td>3. Tekanan Darah</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->wawancara['Tekanan_darah']}}</td>
		</tr>
		<tr>
			<td>4. Nadi</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->wawancara['Nadi']}}</td>	
		</tr>
		<tr>
			<td>5. Pernafasan</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->wawancara['Pernafasan']}}</td>
		</tr>
	</table>
	<br>
	<p style="padding-top: 10px; padding-left:20px ;padding-right:20px;">B. Riwayat Penggunaan Obat-Obatan Dalam Seminggu Terakhir: {{$daftar->riwayat['Penggunaan_obat']}}</p>
	<table>
		<tr>
			<td class="fitwidth">1. Penggunaan Obat-obatan dalam seminggu ini</td>
			<td>:</td>
			<td>{{$daftar->riwayat['Penggunaan_obat']}}</td>
		</tr>
		<tr>
			<td>2. Jenis Obatan yang digunakan</td>
			<td >:</td>
			<td>{{$daftar->riwayat['Jenis_obat']}}</td>
		</tr>
		<tr>
			<td>3. Asal Obat</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->riwayat['Asal_obat']}}</td>
		</tr>
		<tr>
			<td>4. Terakhir minum</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->riwayat['Terakhir_minum']}}</td>	
		</tr>
	</table>
	</div>
</page>

<page size="A4">
	<div class="content">
	<p style="padding-top: 10px; padding-left:20px ;padding-right:20px;">C. Hasil Tes Urin<br>&emsp;Pemeriksaan Urin dengan metode: {{$daftar->testurin['Metode']}}.</p>
	<table>
		<tr>
			<td class="fitwidth">a. Amphetamine</td>
			<td>:</td>
			<td>{{$daftar->testurin['Amphetamine']}}</td>
		</tr>
		<tr>
			<td>b. Benzodiazepine</td>
			<td >:</td>
			<td>{{$daftar->testurin['Benzodiazepine']}}</td>
		</tr>
		<tr>
			<td>c. THC</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->testurin['THC']}}</td>
		</tr>
		<tr>
			<td>d. Metamphetamin</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->testurin['Metamphetamin']}}</td>	
		</tr>
		<tr>
			<td>e. Morphin</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->testurin['Morphin']}}</td>	
		</tr>
		<tr>
			<td>f. COC</td>
			<td class="fitwidth">: </td>
			<td>{{$daftar->testurin['COC']}}</td>	
		</tr>
		{{-- @endforeach --}}
	</table>	
			<p style="text-align: justify; padding-top: 7px; padding-left:20px ;padding-right:20px;">
				Dapat disimpulkan bahwa yang terperiksa di atas tidak terindikasi mengonsumsi narkotika.<br>
				Dengan Surat Keterangan Pemeriksaan Narkotika ini dibuat guna keperlua Saudara/i {{$daftar->Nama}} untuk mendaftar {{$daftar->Keperluan}}.
			</p><br>
	<table style="width: 80%; font-size: 12pt;margin: 0 auto;">
		<tr >
			<td style="width:50%; text-align: center;">
			Petugas Pemeriksaan Urin<br><br><br><br><br><br>
			({{$daftar->Pengurus['Nama_pegawai_u']}}) 	
			</td>
			<td style="width:50%; text-align: center;">
			Dokter Pemeriksa<br><br><br><br><br><br>
			({{$daftar->Pengurus['Dokter_pemeriksa']}})
			</td>
		</tr>
	</table>
	<br><br>
	<table style="width: 80%; font-size: 12pt;display: flex;justify-content: center;align-self: center;">
		<tr>
			<td class="fitwidth">Dikeluarkan di</td>
			<td>:</td>
			<td>Pontianak</td>	
		</tr>
		<tr>
			<td>Pada Tanggal</td>
			<td class="fitwidth">: </td>
			<td>&emsp;{{date('d F Y')}}</td>	
		</tr>
	</table>
		<p style="width: 100%; text-align: center; padding-bottom: 0.5cm;">
		<strong>Kepala Badan Narkotika Nasional<br>
		Provinsi Kalimantan Barat</strong><br><br><br><br><br><br>
		<u> <b>{{$daftar->Pengurus['Kepala_bnn']}} </b></u> <br>
		<b>{{$daftar->Pengurus['Jabatan']}}</b>
	</p>
	</div>
</page>
</body>
</html>