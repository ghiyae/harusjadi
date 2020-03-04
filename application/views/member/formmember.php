              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Input Member</h6>
                </div>

                <div class="card-body">

                  <form method="post" action="">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control <?php echo form_error('nama')?'is-invalid':'' ?>" id="nama" name="nama">
                        <div class="invalid-feedback">
                          <?php echo form_error('nama') ?>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control <?php echo form_error('jabatan')?'is-invalid':'' ?>" id="jabatan" name="jabatan">
                        <div class="invalid-feedback">
                          <?php echo form_error('jabatan') ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="golongan">Golongan</label>
                        <select id="golongan" class="form-control <?php echo form_error('golongan')?'is-invalid':'' ?>" name="golongan">
                          <option hidden value="" selected>Pilih</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                        </select>
                        <div class="invalid-feedback">
                          <?php echo form_error('golongan') ?>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control <?php echo form_error('jumlah')?'is-invalid':'' ?>" id="jumlah" name="jumlah">
                        <div class="invalid-feedback">
                          <?php echo form_error('jumlah') ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?php echo base_url('member')?>" class="btn btn-info">Back</a>
                  </form>
                </div>
              </div>