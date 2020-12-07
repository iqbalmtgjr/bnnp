<!-- Modal -->
<div class="modal fade" id="input" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Data Pasien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/input/pegawai" method="POST">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">NIP</label>
              <div class="col-sm-11">
                  <input type="text" id="NIP" name="NIP" class="form-control" placeholder="Masukkan NIP Pegawai ...">
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
        <label for="" class="col-sm-5 col-form-label">No Hp Pegawai</label>
            <div class="col-sm-11">
                <input type="text" id="No_hp" name="No_hp" value="" class="form-control" placeholder="Masukkan No Hp Pegawai ...">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Jabatan</label>
            <div class="col-sm-11">
                <input type="text" id="Jabatan" name="Jabatan" value="" class="form-control" placeholder="Masukkan Jabatan Pegawai ...">
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