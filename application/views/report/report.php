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
        <div class="form-row">
          <div class="form-group col-md-3">
            <!-- <label for="blnawal">Bulan Awal</label> -->
            <select id="blnawal" class="form-control <?php echo form_error('blnawal')?'is-invalid':'' ?>" name="blnawal">
              <option hidden value="" selected>Pilih Bulan Awal</option>
              <option>Januari</option>
              <option>Februari</option>
              <option>Maret</option>
              <option>April</option>
              <option>Mei</option>
              <option>Juni</option>
              <option>Juli</option>
              <option>Agustus</option>
              <option>September</option>
              <option>Oktober</option>
              <option>November</option>
              <option>Desember</option>
            </select>
            <div class="invalid-feedback">
              <?php echo form_error('blnawal') ?>
            </div>
          </div>
          <div class="form-group col-md-3">
            <!-- <label for="blnakhir">Bulan Akhir</label> -->
            <select id="blnakhir" class="form-control <?php echo form_error('blnakhir')?'is-invalid':'' ?>" name="blnakhir">
              <option hidden value="" selected>Pilih Bulan Akhir</option>
              <option>Januari</option>
              <option>Februari</option>
              <option>Maret</option>
              <option>April</option>
              <option>Mei</option>
              <option>Juni</option>
              <option>Juli</option>
              <option>Agustus</option>
              <option>September</option>
              <option>Oktober</option>
              <option>November</option>
              <option>Desember</option>
            </select>
            <div class="invalid-feedback">
              <?php echo form_error('blnakhir') ?>
            </div>
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-primary ">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>