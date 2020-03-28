  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view('dashboard/sidebar'); ?>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

              <!-- Topbar -->
              <?php $this->load->view('dashboard/topbar'); ?>
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">

                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                  </div>

                  <!-- Content Row -->
                  <div class="row">
                      <div class="col-md-12">
                          <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modal_product"><i class="fa fa-fw fa-plus"></i> Product</button>
                          <table class="table table-bordered table-hover" id="tbl_product">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>ID</th>
                                      <th>Gambar Produk</th>
                                      <th>Nama Produk</th>
                                      <th>Ketegori</th>
                                      <th>Stok</th>
                                      <th colspan="2">Harga</th>
                                      <th>Terjual</th>
                                      <th class="text-center">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>

                                  <tr>
                                      <td>1</td>
                                      <td>2</td>
                                      <td>3</td>
                                      <td>4</td>
                                      <td>5</td>
                                      <td>6</td>
                                      <td style="border-right: 0px">Rp.</td>
                                      <td class="text-right" style="border-left: 0px">7</td>
                                      <td>8</td>
                                      <td class="text-center">X</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>

              </div>
              <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <?php $this->load->view('dashboard/footer'); ?>

  <!-- Modal -->
  <form enctype="multipart/form-data" id="form_product" autocomplete="off">
      <div class="modal fade" id="modal_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label">Nama Produk</label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="nm_produk" id="nm_produk">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label">Gambar Produk</label>
                          <div class="col-md-6">
                              <div class="custom-file">
                                  <input type="file" name="img_produk" id="img_produk" class="custom-file-input" accept="image/*" style="cursor: pointer">
                                  <label class="custom-file-label">Choose file</label>
                              </div>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="offset-md-2 col-md-6">
                              <img id="prev_foto" width="300px" src="" class="img-responsive img-thumbnail" alt="Preview Image">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label">Kategori</label>
                          <div class="col-md-6">
                              <select name="kategori" id="ketegori" class="form-control">
                                  <option selected disabled>-- Please Select --</option>
                                  <option value="1">Baju Pria</option>
                                  <option value="2">Baju Wanita</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label">Stok Produk</label>
                          <div class="col-md-2">
                              <input type="text" name="stok" id="stok" class="form-control" onkeypress="return CheckNumeric()" onkeyup="FormatCurrency(this)">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label">Harga Produk</label>
                          <div class="col-md-3">
                              <input type="text" name="harga" id="harga" class="form-control" onkeypress="return CheckNumeric()" onkeyup="FormatCurrency(this)">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label">Diskon Harga</label>
                          <div class="col-md-2">
                              <input type="text" name="diskon" id="diskon" class="form-control" onkeypress="return CheckNumeric()" onkeyup="FormatCurrency(this)">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label">Deskripsi</label>
                          <div class="col-md-6">
                              <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="2"></textarea>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </div>
          </div>
      </div>
  </form>

  <?php $this->load->view('layout/dashboard/footer'); ?>

  <script>
      $(document).ready(function() {
          $('#img_produk').change(function() {
              readURL(this);
          });

          $('#modal_product').on('hidden.bs.modal', function() {
              $('#form_product')[0].reset();
              $('#prev_foto').attr('src', '');
              $('.custom-file-label').text('Choose file');
          });

          $('#form_product').on('submit', function(e) {
              e.preventDefault();
              $.ajax({
                  url: "<?= site_url('dashboard/produk/add_produk') ?>",
                  type: "post",
                  data: new FormData(this),
                  processData: false,
                  contentType: false,
                  cache: false,
                  async: false,
                  success: function(respon) {
                      swal("Sukses", respon, "success");
                  }
              });
          });
      });

      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function(e) {
                  $('#prev_foto').attr('src', e.target.result);
                  $('.custom-file-label').text(input.files[0]['name']);
              }

              reader.readAsDataURL(input.files[0]);
          }
      }
  </script>