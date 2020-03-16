
<!-- Basic Card Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Input Transaksi</h6>
  </div>
  <div class="card-body">

    <form method="post" action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama">Nama</label>
          <select id="nama" name="nama" class="form-control <?php echo form_error('nama')?'is-invalid':'' ?>">
            <option selected hidden value="">Pilih Nama...</option>
            <?php foreach ($member as $dt) : ?>
              <option value ="<?= $dt->member_id ?>" <?=set_value('nama')=="$dt->member_id"?"selected":'' ?>> <?=$dt->nama;?></option>
            <?php endforeach ?>
          </select>
          <div class="invalid-feedback">
            <?php echo form_error('nama') ?>
          </div>
        </div>
        <div class="form-group col-md-3">
          <label for="golongan">Golongan</label>
          <input type="text" class="form-control <?php echo form_error('golongan')?'is-invalid':'' ?>" id="golongan" name="golongan" readonly>
          <div class="invalid-feedback">
            <?php echo form_error('golongan') ?>
          </div>
        </div>
        <div class="form-group col-md-3">
          <label for="jumlah">Jumlah</label>
          <input type="text" class="form-control <?php echo form_error('jumlah')?'is-invalid':'' ?>" id="jumlah" name="jumlah" readonly>
          <div class="invalid-feedback">
            <?php echo form_error('jumlah') ?>
          </div>
        </div>
        <div class="form-group col-md-3">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control <?php echo form_error('tanggal')?'is-invalid':'' ?>" id="tanggal" name="tanggal">
          <div class="invalid-feedback">
            <?php echo form_error('tanggal') ?>
          </div>
        </div>
        <div class="form-group col-md-9">
          <label for="description">Description</label>
          <textarea class="form-control <?php echo form_error('description')?'is-invalid':'' ?>" id="description" name="description"></textarea>
          <div class="invalid-feedback">
            <?php echo form_error('description') ?>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="<?php echo base_url('cashin')?>" class="btn btn-info">Back</a>
    </form>
  </div>
</div>