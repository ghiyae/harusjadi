               <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Input Category</h6>
                  </div>

                  <div class="card-body">

                    <form method="post" action="">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="category">Category</label>
                          <input type="text" class="form-control <?php echo form_error('category')?'is-invalid':'' ?>" id="category" name="category" >
                          <div class="invalid-feedback">
                            <?php echo form_error('category') ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                      <a href="<?php echo base_url('category')?>" class="btn btn-info">Back</a>
                    </form>
                  </div>
                </div>