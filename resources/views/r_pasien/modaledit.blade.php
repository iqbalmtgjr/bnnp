<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Riwayat Pasien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/riwayatpasien/update" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
    <input type="hidden" class="form-control" id="url_getdata" name="url_getdata" value="{{url('getriwayatpasien/')}}" readonly> 
    <input type="hidden" id="id_riwayat_pasienn" name="id_riwayat_pasien" value="">
    {{-- <input type="hidden" id="id_pasien" name="id_pasien" value=""> --}}

  
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Nama</label>
              <div class="col-sm-11">
                  {{-- <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Masukkan Nama Pasien ..."> --}}
                  <select name="id_pasien" id="id_pasienn" class="form-control">
                      <option value="">--Pilih Nama Pasien--</option>
                      @foreach ($riwayatpasien as $riwayatpasien)
                        <option value="{{$riwayatpasien->id_pasien}}">{{$riwayatpasien->Nama}}</option>
                      @endforeach
                  </select>
              </div>
                  <div class="invalid-feedback errorPetugas"></div>
      </div>
  
        
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Tanggal Perawatan</label>
              <div class="col-sm-11">
                  <input type="date" class="form-control" id="Tanggal_perawatann" name="Tanggal_perawatan" value="">
              </div>
                  <div class="invalid-feedback errorDokter"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Tingkat Kecanduan</label>
              <div class="col-sm-11">
                <select name="Tingkat_kecanduan" id="Tingkat_kecanduann" class="form-control">
                    <option value="">--Pilih Tingkat Kecanduan--</option>
                    <option value="1">Sangat Baik</option>
                    <option value="2">Baik</option>
                    <option value="3">Sedang</option>
                    <option value="4">Buruk</option>
                    <option value="5">Sangat Buruk</option>
                </select>
              </div>
                  <div class="invalid-feedback errorDokter"></div>
      </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Perawatan Ke</label>
            <div class="col-sm-11">
               <input class="form-control" name="perawatan_ke" id="perawatan_kee" type="number" placeholder="Masukkan Perawatan Ke ...">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>
    
    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Status Perawatan</label>
            <div class="col-sm-11">
                <select name="status_perawatan" id="status_perawatann" class="form-control">
                    <option value="">--Pilih Rawat Jalan--</option>
                    <option value="Rawat Jalan">Rawat Jalan</option>
                    <option value="Rawat Inap">Rawat Inap</option>
                </select>
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Dokumen Perawatan</label>
            <div class="col-sm-11">
                <input type="file" id="dokumen_perawatann" name="dokumen_perawatan" value="" class="form-control">
            </div>
    </div>

          <div class="modal-footer">
          <button type="submit" class="btn btn-primary btnsimpan">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
  
              
      </div>
    </form>
      </div>
    </div>
  </div>

  <script>
    function getdata(id)
        {
            console.log(id)
            var url = $('#url_getdata').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
    
                    $('#id_riwayat_pasienn').val(id);
                    $('#id_pasienn').val(response.id_pasien);
                    $('#Namaa').val(response.datapasien.Nama);
                    $('#Tanggal_perawatann').val(response.Tanggal_perawatan);
                    $('#Tingkat_kecanduann').val(response.Tingkat_kecanduan);
                    $('#perawatan_kee').val(response.perawatan_ke);
                    $('#status_perawatann').val(response.status_perawatan);
                    
                }
            });    
        }
    </script>