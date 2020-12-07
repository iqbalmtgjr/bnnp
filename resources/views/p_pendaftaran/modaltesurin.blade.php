<!-- Modal -->
<div class="modal fade" id="tesurin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Tes Urin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="/hasiltesurin/update" method="POST">
            {{ csrf_field() }}
        <div class="modal-body center">
  
            <input type="hidden" id="NIK_U" name="NIK" value=""> 
            <input type="hidden" id="url_getdata2" name="url_getdata2" value="{{url('getdatahasiltesurin/')}}"> 
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Metode</label>
              <div class="col-sm-11">
                  <input type="text" min="0" class="form-control" id="Metode" name="Metode" value="" placeholder="Metode">
                  <div class="invalid-feedback errorMetode"></div>
              </div>
              
      </div>
  
       
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Amphetamine</label>
              <div class="col-sm-11">
                  <select name="Amphetamine" id="Amphetamine" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Positif">Positif</option>
                      <option value="Negatif">Negatif</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorAmphetamine"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Benzodiazepine</label>
              <div class="col-sm-11">
                  <select name="Benzodiazepine" id="Benzodiazepine" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Positif">Positif</option>
                      <option value="Negatif">Negatif</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorBenzodiazepine"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">THC</label>
              <div class="col-sm-11">
                  <select name="THC" id="THC" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Positif">Positif</option>
                      <option value="Negatif">Negatif</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorThc"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Metamphetamin</label>
              <div class="col-sm-11">
                  <select name="Metamphetamin" id="Metamphetamin" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Positif">Positif</option>
                      <option value="Negatif">Negatif</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorMetamphetamin"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">Morphin</label>
              <div class="col-sm-11">
                  <select name="Morphin" id="Morphin" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Positif">Positif</option>
                      <option value="Negatif">Negatif</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorMetamphetamin"></div>
      </div>
  
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">COC</label>
              <div class="col-sm-11">
                  <select name="COC" id="COC" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Positif">Positif</option>
                      <option value="Negatif">Negatif</option>
                  </select>
              </div>
                  <div class="invalid-feedback errorCoc"></div>
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
    function getdata2(id)
        {
            console.log(id)
            var url = $('#url_getdata2').val() + '/' + id
            // var url = $('#url_getdataa').val() + '/' + id
            // var url = $('#url_getdata_hvps_v').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
    
                    $('#NIK_U').val(id);
                    $('#Metode').val(response.Metode);
                    $('#Amphetamine').val(response.Amphetamine);
                    $('#Benzodiazepine').val(response.Benzodiazepine);
                    $('#THC').val(response.THC);
                    $('#Metamphetamin').val(response.Metamphetamin);
                    $('#Morphin').val(response.Morphin);
                    $('#COC').val(response.COC);
                    
                }
            });    
        }
    </script>