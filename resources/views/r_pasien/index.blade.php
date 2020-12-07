@extends('layouts.master')

@section('content')
<div class="card mt-5">
    <div class="card-body">
<h3>Data Riwayat Pasien</h3>
<a href="/riwayatpasien/tambah" class="btn btn-md btn-primary mb-3 mt-2" data-toggle="modal" data-target="#tambah">Tambah</a>
@include('r_pasien.modaltambah')
<table class="table table-sm table-strip" id="dta"> 
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Tanggal Perawatan</th>
            <th>Tingkat Kecanduan</th>
            <th>Perawatan Ke</th>
            <th>Status Perawatan</th>
            <th>Dokumen Perawatan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pasien as $pasien)
                        
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pasien->datapasien['Nama']}}</td>
                <td>
                    @if ($pasien->Tanggal_perawatan != null)
                    {{$pasien->Tanggal_perawatan}}
                    @else
                    Tidak Ada
                    @endif

                    {{-- @if ($pasien->No_hp_wali != null)
                    {{$pasien->No_hp_wali}}
                    @else
                    Tidak Ada
                    @endif --}}
                </td>
                <td>@if ($pasien->Tingkat_kecanduan == 1)
                    Sangat Baik
                @elseif ($pasien->Tingkat_kecanduan == 2)
                    Baik
                @elseif ($pasien->Tingkat_kecanduan == 3)
                    Sedang
                @elseif ($pasien->Tingkat_kecanduan == 4)
                    Buruk
                @elseif ($pasien->Tingkat_kecanduan == 5)
                    Sangat Buruk
                @else
                    
                @endif
                </td>
                <td>{{$pasien->perawatan_ke}}</td>
                <td>{{$pasien->status_perawatan}}</td>
                <td>{{$pasien->dokumen_perawatan}}</td>
                <td>
                <a href="/view/{{$pasien->id_riwayat_pasien}}" class="btn btn-success btn-sm" data-placement="top" title="Lihat Dokumen"><span class="mdi mdi-file-pdf-box"></span></a>
                <a href="storage/images/riwayat_pasien/{{$pasien->dokumen_perawatan}}" download="{{$pasien->dokumen_perawatan}}"  data-placement="top" title="Download" class="btn btn-primary btn-sm"><span class="ti ti-download"></span></a>
                <button onclick="getdata({{$pasien->id_riwayat_pasien}})" data-placement="top" title="Edit" data-toggle="modal" data-target="#edit" class="btn btn-info btn-sm">
                <i class="fa fa-pencil" ></i>
                </button>
                <a href="#" id="{{$pasien->id_riwayat_pasien}}" nama="{{$pasien->datapasien['Nama']}}"  class="btn btn-danger btn-sm delete" data-placement="top" title="Hapus"> 
                <i class="fa fa-trash" ></i>
                </a>
                @include('r_pasien.modaledit')
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
    var id = $(this).attr('id');
    var nama = $(this).attr('nama');
    Swal.fire({
  title: 'Yakin?',
  text: "Mau Hapus Data Dengan Nama "+nama+"?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya',
})
.then((result) => {
        console.log(result);
        if (result) {
            window.location = "/riwayatpasien/hapus/"+id+"";
        }
    });
});

</script>
@endsection