@extends('layouts.master')

@section('content')
<div class="card mt-5">
    <div class="card-body">
<h3 class="mb-5">Data Tamu</h3>
<table class="table table-sm table-strip" id="dta"> 
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Keperluan</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data as $tamu)
                        
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$tamu['Nama']}}</td>
                <td>{{$tamu['Tanggal']}}</td>
                <td>{{$tamu['Tujuan']}}</td>
                <td>{{$tamu['Keperluan']}}</td>
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

@endsection