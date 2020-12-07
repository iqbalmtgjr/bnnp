<!-- Modal -->
<div class="modal fade" id="pengurus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Petugas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/pengurus/update" method="POST">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
            <input type="hidden" class="form-control" id="NIK_P" name="NIK" value="" readonly> 
            <input type="hidden" id="url_getdata3" name="url_getdata3" value="{{url('getdatapengurus/')}}"> 

      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Kepala BNN</label>
              <div class="col-sm-11">
                    <!--<input name="Kepala_bnn" id="Kepala_bnn" value="H. Abdulhadi s.pd., M.E" class="form-control">-->
                    <select name="Kepala_bnn" id="Kepala_bnn" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="H. Abdulhadi s.pd., M.E">H. Abdulhadi s.pd., M.E</option>
                    </select>
              </div>
                  <div class="invalid-feedback errorPetugas"></div>
      </div>
  
        
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Dokter Pemeriksa</label>
              <div class="col-sm-11">
                  <input type="text" class="form-control" id="Dokter_pemeriksa" name="Dokter_pemeriksa" value="" placeholder="Dokter Pemeriksa">
              </div>
                  <div class="invalid-feedback errorDokter"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-5 col-form-label">Petugas Urin</label>
              <div class="col-sm-11">
                  <input type="text" id="Nama_pegawai_u" name="Nama_pegawai_u" value="" class="form-control" placeholder="Petugas Urin">
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
    function getdata3(id)
        {
            console.log(id)
            var url = $('#url_getdata3').val() + '/' + id
            // var url = $('#url_getdataa').val() + '/' + id
            // var url = $('#url_getdata_hvps_v').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
    
                    $('#NIK_P').val(id);
                    $('#Kepala_bnn').val(response.Kepala_bnn);
                    $('#Dokter_pemeriksa').val(response.Dokter_pemeriksa);
                    $('#Nama_pegawai_u').val(response.Nama_pegawai_u);
                    
                }
            });    
        }
    </script>