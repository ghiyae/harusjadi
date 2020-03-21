              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Input Cash Out</h6>
                </div>

                <div class="card-body">

                  <form method="post" action="">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control <?php echo form_error('tanggal')?'is-invalid':'' ?>" id="tanggal" name="tanggal">
                        <div class="invalid-feedback">
                          <?php echo form_error('tanggal') ?>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="description">Description</label>
                        <input type="text" class="form-control <?php echo form_error('description')?'is-invalid':'' ?>" id="description" name="description">
                        <div class="invalid-feedback">
                          <?php echo form_error('description') ?>
                        </div>
                      </div>
                    </div>
                      <div class="form-group col-md-6">
                        <label for="tran_in">Tran_out</label>
                        <input type="text" class="form-control <?php echo form_error('tran_in')?'is-invalid':'' ?>" id="tran_in" name="tran_in">
                        <div class="invalid-feedback">
                          <?php echo form_error('tran_in') ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?php echo base_url('transaksi')?>" class="btn btn-info">Back</a>
                  </form>
                </div>
              </div>