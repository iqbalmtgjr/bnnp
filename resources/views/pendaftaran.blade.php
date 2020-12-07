<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>BNNP - Pendaftaran SKHPN</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href={{asset("/assets/images/bnnp.ico")}}>

        <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet" type="text/css">
        <link href={{asset("assets/css/icons.css")}} rel="stylesheet" type="text/css">
        <link href={{asset("assets/css/style.css")}} rel="stylesheet" type="text/css">
        <link href={{asset("assets/plugins/node_modules/sweetalert2/dist/sweetalert2.min.css")}} rel="stylesheet" type="text/css">
        <script src={{asset("assets/plugins/node_modules/sweetalert2/dist/sweetalert2.all.min.js")}}></script>
        {{-- Toastr --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
   
    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="#index.html" class="logo logo-admin"><img src="{{asset('/assets/images/layananrehabilitasi.png')}}" height="50" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                     
                        <form action="{{url('/pendaftaran/input')}}" method="POST" enctype="multipart/form-data"> 
                         {{ csrf_field() }}

                         <input type="hidden" name="datapengurus" value="">
                         <input type="hidden" name="testurin" value="">
                         <input type="hidden" name="wawancara" value="">
                         <input type="hidden" name="riwayatobat" value="">
                         <!--<input type="hidden" name="riwayatpasien" value="">-->

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text"  name="NIK" id="NIK" required="" placeholder="NIK Pendaftar" value="">
                                    <div class="invalid-feedback errorNIK"></div>
                                    @error('NIK')
                                        <div class="text-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="text" name="Nama" id="Nama" required="" placeholder="Nama" value="">
                                    <div class="invalid-feedback errornama"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="text" name="Tempat" id="Tempat" required="aaaa" placeholder="Tempat Lahir">
                                    <div class="invalid-feedback errortempat"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-12">
                                <input class="form-control" type="date" name="Tanggal_lahir" id="Tanggal_lahir" required="">
                                    <div class="invalid-feedback errorlahir"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="number" name="Umur" id="Umur" required="" placeholder="Umur">
                                    <div class="invalid-feedback errorumur"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-12">
                                <select name="Jenis_kelamin" id="Jenis_kelamin" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                    <div class="invalid-feedback errorKelamin"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="text" name="Suku" id="Suku" required="" placeholder="Suku">
                                    <div class="invalid-feedback errorsuku"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-12">
                                <select name="Agama" id="Agama" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="Islam">Agama Islam</option>
                                    <option value="Hindu">Agama Hindu</option>
                                    <option value="Budha">Agama Budha</option>
                                    <option value="Kristen Protestan">Agama Kristen Protestan</option>
                                    <option value="Katolik">Agama Katolik</option>
                                    <option value="Kong Hu Cu">Agama Kong Hu Cu</option>
                                </select>     
                                    <div class="invalid-feedback errorAgama"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="text" name="Pekerjaan" id="Pekerjaan" required="" placeholder="Pekerjaan">
                                    <div class="invalid-feedback errorpekerjaan"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <textarea name="Alamat" id="Alamat" cols="40" rows="5" required="" placeholder="Alamat" class="form-control"></textarea>
                                    <div class="invalid-feedback erroralamat"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label">Keperluan</label>
                                <div class="col-12">
                                <select name="Keperluan" id="Keperluan" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="Melamar Pekerjaan">Melamar Pekerjaan</option>
                                    <option value="Mendaftar Kuliah">Mendaftar Kuliah</option>
                                    <option value="Calon Pimpinan Daerah">Calon Pimpinan Daerah</option>
                                </select>     
                                    <div class="invalid-feedback errorKeperluan"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="email" name="email" id="email" required="" placeholder="Email">
                                    <div class="invalid-feedback erroremail"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="number" name="Nohp" id="Nohp" required="" placeholder="Telpon/No. HP">
                                    <div class="invalid-feedback errortelepon"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="file" name="Foto" id="Foto">
                                    <div class="invalid-feedback errorFoto"></div>
                                </div>
                            </div>
                            
                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Daftar Sekarang</button>
                                </div>
                            </div>
                      
                        
                            
                        </form>
                   
                    </div>

                </div>
            </div>
        </div>

    </body>

    <!-- jQuery  -->
    <script src={{asset("/assets/js/jquery.min.js")}}></script>
        <script src={{asset("/assets/js/popper.min.js")}}></script>
        <script src={{asset("/assets/js/bootstrap.min.js")}}></script>
        <script src={{asset("/assets/js/modernizr.min.js")}}></script>
        <script src={{asset("/assets/js/waves.js")}}></script>
        <script src={{asset("/assets/js/jquery.slimscroll.js")}}></script>
        <script src={{asset("/assets/js/jquery.nicescroll.js")}}></script>
        <script src={{asset("/assets/js/jquery.scrollTo.min.js")}}></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


        <!-- App js -->
        <script src={{asset("/assets/js/app.js")}}></script>

        <script>
            @if(Session::has('sukses'))
            toastr.success("{{Session::get('sukses')}}", "Selamat")
            @endif
        </script>
        <script>
            @if(Session::has('gagal'))
            toastr.error("{{Session::get('gagal')}}", "Gagal")
            @endif
        </script>
    


</html>