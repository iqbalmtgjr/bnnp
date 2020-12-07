@extends('layouts.master')

@section('content')
<div class="card mt-5">
    <div class="card-body">
<h3>Data Pegawai</h3>
<a href="#" class="btn btn-md btn-success mt-2 mb-3" data-toggle="modal" data-target="#input">Tambah</a>
@extends('d_pegawai.modaltambah')
<table class="table table-sm table-strip" id="dta"> 
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pegawai as $pegawai)
                        
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pegawai->NIP}}</td>
                <td>{{$pegawai->Nama_pegawai}}</td>
                <td>{{$pegawai->Jenis_kelamin}}</td>
                <td>{{$pegawai->Alamat}}</td>
                <td>{{$pegawai->No_hp}}</td>
                <td>{{$pegawai->Jabatan}}</td>
                <td>
                <button onclick="getdatape({{$pegawai->NIP}})" data-placement="top" title="Edit" data-toggle="modal" data-target="#edit" class="btn btn-info btn-sm">
                <i class="fa fa-pencil" ></i>
                </button>
                <a href="#" nip_pegawai="{{$pegawai->NIP}}"  class="btn btn-danger btn-sm delete" data-placement="top" title="Hapus"> 
                <i class="fa fa-trash" ></i>
                </a>
                @extends('d_pegawai.modaledit')
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
    var id = $(this).attr('nip_pegawai');
    Swal.fire({
  title: 'Yakin?',
  text: "Mau Hapus Data Dengan NIP "+id+"?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya',
})
.then((result) => {
        console.log(result);
        if (result) {
            window.location = "/pegawai/hapus/"+id+"";
        }
    });
});

</script>
@endsection