@extends('layouts.master')

@section('content')
<div class="card mt-5">
    <div class="card-body">
<h3>Proses Pendaftaran</h3>

<table class="table table-sm table-strip" id="dta"> 
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Pendaftaran</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Keperluan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($daftar as $daftar)
                        
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td> {{$daftar->created_at}} </td>
                <td> {{$daftar->NIK}} </td>
                <td> {{$daftar->Nama}} </td>
                <td> {{$daftar->email}} </td>
                <td> {{$daftar->Keperluan}} </td>
                <td>
                <button onclick="getdata({{$daftar->NIK}})" data-placement="top" title="Tambah Wawancara" data-toggle="modal" data-target="#tambahwawancara" type="button" class="btn btn-info btn-sm">
                <i class="fa fa-book" ></i>
                </button>
                @extends('p_pendaftaran.modalriwayatobat')
                <button onclick="getdata1({{$daftar->NIK}})" data-placement="top" title="Riwayat Penggunaan Obat" data-toggle="modal" data-target="#riwayatobat" type="button" class="btn btn-info btn-sm"   >
                <i class="fa fa-history" ></i>
                </button>
                @extends('p_pendaftaran.modaltesurin')
                <button onclick="getdata2({{$daftar->NIK}})" data-placement="top" title="Hasil Tes Urin" data-toggle="modal" data-target="#tesurin" type="button" class="btn btn-info btn-sm"   >
                <i class="fa fa-eye" ></i>
                </button>
                @extends('p_pendaftaran.modalpegawai')
                <button onclick="getdata3({{$daftar->NIK}})" data-placement="top" title="Pengurus" data-toggle="modal" data-target="#pengurus" type="button" class="btn btn-info btn-sm"   >
                <i class="fa fa-address-card" ></i>
                </button>
                @extends('p_pendaftaran.modaldatawawancara')
                <a href="/surat/{{$daftar->NIK}}" title="Cetak Laporan" class="btn btn-info btn-sm">
                <i class="fa fa-file-archive-o" ></i>
                </a>
                <a onclick="getdata4({{$daftar->NIK}})" href="" data-toggle="modal" data-target="#email" data-placement="top" title="Kirim Email" class="btn btn-info btn-sm" type="button">
                    <i class="mdi mdi-email-outline" ></i>
                </a>
                @extends('p_pendaftaran.modalemail')
                <a href="#" t.pendaftaran="{{$daftar->NIK}}"class="btn btn-danger btn-sm delete" data-placement="top" title="Hapus"> 
                <i class="fa fa-trash" ></i>
                </a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
</div>
</div>

@endsection

@section('footer')
    
{{-- Data table --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function () {
        $('#dta').DataTable();
    });
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      });
    </script>
<script>

$('.delete').click(function(){
    var NIK = $(this).attr('t.pendaftaran');
    Swal.fire({
  title: 'Yakin?',
  text: "Mau Hapus Data Dengan NIK "+NIK+"?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya'
})
.then((result) => {
        console.log(result);
        if (result) {
            window.location = "/daftar/hapus/"+NIK+"";
        }
    });
});

</script>
@endsection