<!-- Modal -->
<div class="modal fade" id="email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kirim Email</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/email/update" method="POST">
            {{ csrf_field() }}
  <div class="modal-body center">
  
  
            <input type="hidden" class="form-control" id="NIK_E" name="NIK" value="" readonly> 
            <input type="hidden" id="url_getdata4" name="url_getdata4" value="{{url('getdatapendaftar/')}}"> 

      <div class="form-group row">
          <label for="" class="col-sm-8 col-form-label">Masukkan Tanggal Datang</label>
              <div class="col-sm-11">
                    <input type="date" name="Tanggal_datang" id="Tanggal_datang" value="" class="form-control">
              </div>
                  <div class="invalid-feedback errorPetugas"></div>
      </div>
  
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary btnsimpan">Kirim</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
  
              
      </div>
    </form>
      </div>
    </div>
  </div>
  
   <script>
    function getdata4(id)
        {
            console.log(id)
            var url = $('#url_getdata4').val() + '/' + id
            // var url = $('#url_getdataa').val() + '/' + id
            // var url = $('#url_getdata_hvps_v').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
    
                    $('#NIK_E').val(id);
                    $('#Tanggal_datang').val(response.Tanggal_datang);
                    
                }
            });    
        }
    </script>