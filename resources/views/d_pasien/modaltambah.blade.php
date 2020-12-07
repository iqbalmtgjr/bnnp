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
        <form action="/input/pasien" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
                  <input type="hidden" class="form-control" id="id_pasien" name="id_pasien" value="" readonly> 

  
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">NIK</label>
              <div class="col-sm-11">
                  <input type="text" id="NIK" name="NIK" class="form-control" placeholder="Masukkan NIK ...">
              </div>
                  <div class="invalid-feedback errorPetugas"></div>
      </div>
  
        
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Nama</label>
              <div class="col-sm-11">
                  <input type="text" class="form-control" id="Nama" name="Nama" value="" placeholder="Masukkan Nama Pasien ...">
              </div>
                  <div class="invalid-feedback errorDokter"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-11">
                <select name="Jenis_kelamin" id="Jenis_kelamin" class="form-control">
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div>
                  <div class="invalid-feedback errorDokter"></div>
      </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-11">
                <input type="date" id="Tanggal_lahir" name="Tanggal_lahir" value="" class="form-control">
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
        <label for="" class="col-sm-5 col-form-label">Agama</label>
            <div class="col-sm-11">
                {{-- <input type="text" id="Agama" name="Agama" value="" class="form-control" placeholder="Masukkan Agama ..."> --}}
                <select name="Agama" id="Agama" class="form-control">
                    <option value="">--Pilih Agama--</option>
                    <option value="Islam">Agama Islam</option>
                    <option value="Hindu">Agama Hindu</option>
                    <option value="Budha">Agama Budha</option>
                    <option value="Kristen Protestan">Agama Kristen Protestan</option>  
                    <option value="Katolik">Agama Katolik</option>
                    <option value="Kong Hu Cu">Agama Kong Hu Cu</option>
                </select>
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Kewarganegaraan</label>
            <div class="col-sm-11">
                <input type="text" id="Kewarganegaraan" name="Kewarganegaraan" value="" class="form-control" placeholder="Masukkan Kewarganegaraan ...">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Wali Pasien</label>
            <div class="col-sm-11">
                <input type="text" id="Wali_pasien" name="Wali_pasien" value="" class="form-control" placeholder="Masukkan Nama Wali Pasien ...">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>
    
    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">No Hp Wali Pasien</label>
            <div class="col-sm-11">
                <input type="number" id="No_hp_wali" name="No_hp_wali" value="" class="form-control" placeholder="Masukkan No Hp Wali Pasien ...">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Status</label>
            <div class="col-sm-11">
                <input type="text" id="Status_p" name="Status" value="" class="form-control" placeholder="Masukkan Status ...">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Foto</label>
            <div class="col-sm-11">
                <input type="file" id="foto" name="foto" value="" class="form-control">
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