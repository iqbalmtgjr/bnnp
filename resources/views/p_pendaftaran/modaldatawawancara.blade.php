<!-- Modal -->
<div class="modal fade" id="tambahwawancara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Wawancara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{url('/wawancara/update')}}" method="POST">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
      <input type="hidden" id="NIK" name="NIK" value="">
      <input type="hidden" id="url_getdata" name="url_getdata" value="{{url('getdatawawancara/')}}"> 
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Kesadaran</label>
              <div class="col-sm-11">
                  <select name="Kesadaran" id="Kesadaran" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Sangat Baik">Sangat Baik</option>
                      <option value="Baik">Baik</option>
                      <option value="Cukup Baik">Cukup Baik</option>
                      <option value="Buruk">Buruk</option>
                      <option value="Sangat Buruk">Sangat Buruk</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorKesadaran"></div>
      </div>
  
        
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Keadaan Umum</label>
              <div class="col-sm-11">
                  <select name="Keadaan_umum" id="Keadaan_umum" class="form-control">
                  <option value="">-Pilih-</option>
                      <option value="Sangat Baik">Sangat Baik</option>
                      <option value="Baik">Baik</option>
                      <option value="Cukup Baik">Cukup Baik</option>
                      <option value="Buruk">Buruk</option>
                      <option value="Sangat Buruk">Sangat Buruk</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorKeadaan"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Tekanan Darah</label>
              <div class="col-sm-11">
                  <input type="text" min="0" class="form-control" id="Tekanan_darah" name="Tekanan_darah">
                  <div class="invalid-feedback errorTekanandarah">
                  </div>
              </div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Nadi</label>
              <div class="col-sm-11">
                  <input type="text" min="0" class="form-control" id="Nadi" name="Nadi">
                  <div class="invalid-feedback errorNadi">
                  </div>
              </div>
              
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Pernafasan</label>
              <div class="col-sm-11">
                  <input type="text" min="0" class="form-control" id="Pernafasan" name="Pernafasan" value="">
                  <div class="invalid-feedback errorPernafasan">
                  </div>
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
function getdata(id)
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

                $('#NIK').val(id);
                $('#Kesadaran').val(response.Kesadaran);
                $('#Keadaan_umum').val(response.Keadaan_umum);
                $('#Tekanan_darah').val(response.Tekanan_darah);
                $('#Nadi').val(response.Nadi);
                $('#Pernafasan').val(response.Pernafasan);
                
            }
        });    
    }
</script>