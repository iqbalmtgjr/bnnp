<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/datapegawai/update" method="POST">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
    <input type="hidden" class="form-control" id="url_getdata" name="url_getdata" value="{{url('getdatapegawai/')}}" readonly> 

  
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">NIP</label>
              <div class="col-sm-11">
                  <input type="text" id="NIP" name="NIP" class="form-control" placeholder="Masukkan NIP ...">
              </div>
                  <div class="invalid-feedback errorPetugas"></div>
      </div>
  
        
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Nama Pegawai</label>
              <div class="col-sm-11">
                  <input type="text" class="form-control" id="Nama_pegawai" name="Nama_pegawai" value="" placeholder="Masukkan Nama Pegawai ...">
              </div>
                  <div class="invalid-feedback errorDokter"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-11">
                <select name="Jenis_kelamin" id="Jenis_kelamin" class="form-control">
                    <option value="">--Pilih--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div>
                  <div class="invalid-feedback errorDokter"></div>
      </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Alamat</label>
            <div class="col-sm-11">
               <textarea class="form-control" name="Alamat" id="Alamat" cols="30" rows="3"></textarea>
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>
    
    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">No Hp</label>
            <div class="col-sm-11">
                <input type="text" id="No_hp" name="No_hp" value="" class="form-control">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Jabatan</label>
            <div class="col-sm-11">
                <input type="text" id="Jabatan" name="Jabatan" value="" class="form-control">
            </div>
                <div class="invalid-feedback errorDokter"></div>
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
    function getdatape(id)
        {
            console.log(id)
            var url = $('#url_getdata').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
    
                    $('#NIP').val(id);
                    $('#Nama_pegawai').val(response.Nama_pegawai);
                    $('#Jenis_kelamin').val(response.Jenis_kelamin);
                    $('#Alamat').val(response.Alamat);
                    $('#No_hp').val(response.No_hp);
                    $('#Jabatan').val(response.Jabatan);
                    
                }
            });    
        }
    </script>