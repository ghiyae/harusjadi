<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- <h1 class="h3 mb-0 text-gray-800">Report</h1> -->
</div>

<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">Report Kas</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">
      <div class="alert alert-primary" role="alert"><i class="fas fa-info-circle"></i>
        Silahkan masukan tanggal awal dan tanggal akhir untuk menampilkan laporan!
      </div>

      <form action="<?=base_url('report/tampil_report') ?>" method="post">
            <div class="row">
              <div class="col-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
                  <input type="date" class="form-control" id="tglmulai" name="tglmulai">
                </div>
              </div>
              s/d
              <div class="col-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
                  <input type="date" class="form-control" id="tglakhir" name="tglakhir">
                </div>
              </div>
              <div class="col-2">
                <button type="submit" class="btn btn-primary ">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>