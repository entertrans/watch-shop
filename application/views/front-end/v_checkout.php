<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Data Penerima</h4>
            <form class="needs-validation" novalidate="">

                <div class="mb-3">
                    <label for="lastName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Nama Anda" value="" required>
                    <div class="invalid-feedback">
                        Tulis Nama Anda
                    </div>
                </div>

                <div class="mb-3">
                    <label for="lastName">No Whatsap</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Nomor Whatsap Anda" value="" required onkeypress="return checknumber()">
                    <div class="invalid-feedback">
                        Tulis Nomor Whatsapp Anda
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="country">Pilih Provinsi</label>
                        <select class="custom-select d-block w-100 form-control" name="propinsi_tujuan" id="propinsi_tujuan">
                            <option value="" selected="" disabled="">Pilih Provinsi</option>
                            <?php $this->load->view('rajaongkir/getProvince'); ?>
                        </select>
                        <div class="invalid-feedback">
                            Pilih provinsi
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Pilih Kota</label>
                        <select class="custom-select d-block w-100 form-control" name="destination" id="destination">
                            <option value="" selected="" disabled="">Pilih Kota</option>
                        </select>
                        <div class="invalid-feedback">
                            Pilih Kota
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="courier">Pilih Kurir</label>
                        <select class="form-control" name="courier" id="courier">
                            <option value="" disabled selected>Pilih Kurir</option>
                            <option value="jne">JNE</option>
                            <option value="pos">POS</option>
                            <option value="tiki">TIKI</option>
                        </select>
                        <div class="invalid-feedback">
                            Pilih Kurir
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Alamat Lengkap</label>
                    <br>
                    <textarea class="form-control" name="" cols="80" rows="3"></textarea>
                    <!-- <input type="text" class="form-control" id="lastName" placeholder="Nomor Whatsap Anda" value="" required onkeypress="return checknumber()"> -->
                    <div class="invalid-feedback">
                        Tulis Alamat Lengkap Anda
                    </div>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">Check Ongkir</h4>
                
                <!-- LOKASI -->
                <div class="row">
                    <div class="col-md-6" style="visibility: hidden; position: absolute;">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            <h3 class="panel-title">Asal</h3>
                        </div>
                        <div class="panel-body">
                            <select class="form-control" name="propinsi_asal" id="propinsi_asal">
                                <option value="3" selected>Banten</option>
                                <!-- <?php $this->load->view('rajaongkir/getProvince'); ?> -->
                            </select>
                            <br>
                            <select class="form-control" name="origin" id="origin">
                                <option value="457" selected>Pilih Kota</option>
                            </select>
                        </div>
                    </div>
                </div>
<!--                 <div class="col-md-6">
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">Tujuan</h3>
                    </div>
                    <div class="panel-body">
                        <select class="form-control" name="propinsi_tujuan" id="propinsi_tujuan">
                            <option value="" selected="" disabled="">Pilih Provinsi</option>
                            <?php $this->load->view('rajaongkir/getProvince'); ?>
                        </select>
                        <br>
                        <select class="form-control" name="destination" id="destination">
                            <option value="" selected="" disabled="">Pilih Kota</option>
                        </select>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- END OF LOKASI -->

        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Berat</h3>
                </div>
                <div class="panel-body">
                    <input type="text" name="berat" placeholder="gram" id="berat" class="form-control">
                    <br>
                    <!-- <select class="form-control" name="courier" id="courier">
                        <option value="" disabled selected>Pilih Kurir</option>
                        <option value="jne">JNE</option>
                        <option value="pos">POS</option>
                        <option value="tiki">TIKI</option>
                    </select> -->
                    <br>
                    <button type="button" onclick="tampil_data('data')" class="btn btn-info">Cek Ongkir</button>
                </div>
            </div>
            <script>
                function tampil_data(act){
                  var w = $('#origin').val();
                  var x = $('#destination').val();
                  var y = $('#berat').val();
                  var z = $('#courier').val();

                  $.ajax({
                      url: "<?= site_url('rajaongkir/getCost') ?>",
                      type: "GET",
                      data : {origin: w, destination: x, berat: y, courier: z},
                      success: function (ajaxData){
                                  //$('#tombol_export').show();
                                  //$('#hasilReport').show();
                                  $("#hasil").html(ajaxData);
                              }
                          });
              };
          </script>
      </div>
      <div class="col-md-8">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Hasil</h3>
        </div>
        <div class="panel-body">
            <ol>
                <div id="hasil">

                </div>
            </ol>
        </div>
    </div>
</div>  
</div>

<!-- RESI -->
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <h3 class="panel-title">Cek Resi</h3>
        </div>
        <div class="panel-body">
            <input type="text" name="no_resi" placeholder="No Resi" id="no_resi" class="form-control">
            <br>
            <button type="button" onclick="tampil_resi('data')" class="btn btn-info">Cek Resi</button>

        </div>
    </div>
    <script>
        function tampil_resi(act){
          var resi = $('#no_resi').val();

          if(resi == ""){
            alert("harap isi data dengan lengkap");
        }else{
            $.ajax({
              url: "rajaongkir/getResi",
              type: "GET",
              data : {waybill: resi},
              success: function (ajaxData){
                                  //$('#tombol_export').show();
                                  //$('#hasilReport').show();
                                  $("#hasil_resi").html(ajaxData);
                              }
                          });
        }


    };
</script>
</div>
<div class="col-md-8">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Cek Resi</h3>
    </div>
    <div class="panel-body">
        <ol>
            <div id="hasil_resi">

            </div>
        </ol>
    </div>
</div>
</div>
</div>
<!-- END OF RESI -->






<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
</form>
</div>
</div>

</div>

<?php $this->load->view('layout/front-end/footer'); ?>