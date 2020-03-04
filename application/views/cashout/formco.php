              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Input Cash Out</h6>
                </div>
                <div class="card-body">

                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Description</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Category</label>
                        <select id="inputState" class="form-control">
                          <option selected>Pilih</option>
                          <option>Suka Cita</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Jumlah</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Tanggal</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?php echo base_url('cashout')?>" class="btn btn-info">Back</a>
                  </form>
                </div>
              </div>