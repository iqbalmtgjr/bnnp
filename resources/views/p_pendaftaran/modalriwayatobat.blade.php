<!-- Modal -->
<div class="modal fade" id="riwayatobat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Riwayat Penggunaan Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{url('/riwayatobat/update')}}" method="POST">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
            <input type="hidden" id="NIK_R" name="NIK" value=""> 
            <input type="hidden" id="url_getdata1" name="url_getdata1" value="{{url('getdatariwayatobat/')}}"> 

      
                  <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Penggunaan Obat</label>
              <div class="col-sm-11">
                  <select name="Penggunaan_obat" id="Penggunaan_obat" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Ada">Ada</option>
                      <option value="Tidak Ada">Tidak Ada</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorAmphetamine"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-10 col-form-label">Jenis obat</label>
              <div class="col-sm-11">
                  <input type="text" min="0" class="form-control" id="Jenis_obat" name="Jenis_obat" value="">
                  <div class="invalid-feedback errorJenisobat"></div>
              </div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-10 col-form-label">Asal obat</label>
              <div class="col-sm-11">
                  <input type="text" min="0" class="form-control" id="Asal_obat" name="Asal_obat" value="">
                  <div class="invalid-feedback errorAsalobat">
                  </div>
              </div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-10 col-form-label">Terakhir minum</label>
              <div class="col-sm-11">
                  <input type="text" min="0" class="form-control" id="Terakhir_minum" name="Terakhir_minum" value="">
                  <div class="invalid-feedback errorTerakhirminum"></div>
              </div>
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
    function getdata1(id)
        {
            console.log(id)
            var url = $('#url_getdata1').val() + '/' + id
            // var url = $('#url_getdataa').val() + '/' + id
            // var url = $('#url_getdata_hvps_v').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
    
                    $('#NIK_R').val(id);
                    $('#Penggunaan_obat').val(response.Penggunaan_obat);
                    $('#Jenis_obat').val(response.Jenis_obat);
                    $('#Asal_obat').val(response.Asal_obat);
                    $('#Terakhir_minum').val(response.Terakhir_minum);
                    
                }
            });    
        }
    </script>
  