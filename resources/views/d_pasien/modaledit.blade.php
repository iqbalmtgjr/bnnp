<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Pasien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/datapasien/update" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
                  <input type="hidden" class="form-control" id="id_pasien" name="id_pasien" value="" readonly> 
                  <input type="hidden" class="form-control" id="url_getdata" name="url_getdata" value="{{url('getdatapasien/')}}" readonly> 

  
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
                    <option value="">--Pilih--</option>
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
                <input type="text" id="Agama" name="Agama" value="" class="form-control">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Kewarganegaraan</label>
            <div class="col-sm-11">
                <input type="text" id="Kewarganegaraan" name="Kewarganegaraan" value="" class="form-control">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Wali Pasien</label>
            <div class="col-sm-11">
                <input type="text" id="Wali_pasien" name="Wali_pasien" value="" class="form-control">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>
    
    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">No Hp Wali Pasien</label>
            <div class="col-sm-11">
                <input type="text" id="No_hp_wali" name="No_hp_wali" value="" class="form-control">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Status</label>
            <div class="col-sm-11">
                <input type="text" id="Status_p" name="Status" value="" class="form-control">
            </div>
                <div class="invalid-feedback errorDokter"></div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-5 col-form-label">Foto</label>
            <div class="col-sm-11">
                <div class="row">
                    <div class="col-md-8">
                <input type="file" id="fotosss" name="foto" class="form-control">
                    </div>
                    <div class="col-md-4">
                <input type="text" id="foto123" class="form-control" disabled>
                    </div>
                </div>
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
    function getdatap(id)
        {
            console.log(id)
            var url = $('#url_getdata').val() + '/' + id
            // var url = $('#url_getdataa').val() + '/' + id
            // var url = $('#url_getdata_hvps_v').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
    
                    $('#id_pasien').val(id);
                    $('#NIK').val(response.NIK);
                    $('#Nama').val(response.Nama);
                    $('#Jenis_kelamin').val(response.Jenis_kelamin);
                    $('#Tanggal_lahir').val(response.Tanggal_lahir);
                    $('#Alamat').val(response.Alamat);
                    $('#Agama').val(response.Agama);
                    $('#Kewarganegaraan').val(response.Kewarganegaraan);
                    $('#Wali_pasien').val(response.Wali_pasien);
                    $('#No_hp_wali').val(response.No_hp_wali);
                    $('#Status_p').val(response.Status);
                    $('#foto123').val(response.Foto);
                    
                }
            });    
        }
    </script>

    <script>
        $('.custom-file-input').on('change', function(){
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>