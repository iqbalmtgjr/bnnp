@extends('layouts.master')

@section('content')
<div class="card mt-5">
    <div class="card-body">
<h3>Data Pasien</h3>
<a href="#" class="btn btn-md btn-success mt-2 mb-3" data-toggle="modal" data-target="#input">Tambah</a>
@extends('d_pasien.modaltambah')
<table class="table table-sm table-strip" id="dta"> 
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Kewarganegaraan</th>
            <th>Wali Pasien</th>
            <th>No Hp Wali</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pasien as $pasien)
                        
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pasien->NIK}}</td>
                <td>{{$pasien->Nama}}</td>
                <td>{{$pasien->Jenis_kelamin}}</td>
                <td>{{$pasien->Tanggal_lahir}}</td>
                <td>{{$pasien->Alamat}}</td>
                <td>{{$pasien->Agama}}</td>
                <td>{{$pasien->Kewarganegaraan}}</td>
                <td>{{$pasien->Wali_pasien}}</td>
                <td>
                    @if ($pasien->No_hp_wali != null)
                    {{$pasien->No_hp_wali}}
                    @else
                    Tidak Ada
                    @endif
                </td>
                <td><img style="height: 50px; object-fit: cover; object-position:center;" src="{{asset('storage/images/datapasien/' . $pasien->Foto)}}" alt=""></td>
                <td>{{$pasien->Status}}</td>
                <td>
                    
                <button onclick="getdatap({{$pasien->id_pasien}})" data-placement="top" title="Edit" data-toggle="modal" data-target="#edit" class="btn btn-info btn-sm">
                <i class="fa fa-pencil" ></i>
                </button>
                <a href="#" id_pasien="{{$pasien->id_pasien}}" NIK="{{$pasien->NIK}}" class="btn btn-danger btn-sm delete" data-placement="top" title="Hapus"> 
                <i class="fa fa-trash" ></i>
                </a>
                @extends('d_pasien.modaledit')
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
    var Id = $(this).attr('id_pasien');
    var NIK = $(this).attr('NIK');
    Swal.fire({
  title: 'Yakin?',
  text: "Mau Hapus Data Dengan NIK "+NIK+"?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya',
})
.then((result) => {
        console.log(result);
        if (result) {
            window.location = "/pasien/hapus/"+Id+"";
        }
    });
});

</script>
@endsection