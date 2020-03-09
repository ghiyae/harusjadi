
<!-- Basic Card Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Cash Out</h6>
  </div>
  <div class="card-body">

    <form method="post" action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="description">Description</label>
          <textarea type="text" class="form-control <?php echo form_error('description')?'is-invalid':'' ?>" id="description" name="description"><?=$this->input->post('description')? $this->input->post('description'):$cashout->description?></textarea>
          <div class="invalid-feedback">
            <?php echo form_error('description') ?>
          </div>
        </div>

        <div class="form-group col-md-3">
          <label for="category">Category</label>
          <input type="hidden" value="<?=$cashout->cashout_id?>" class="form-control" id="cashout_id" name="cashout_id">
          <select id="category" name="category" class="form-control <?php echo form_error('category')?'is-invalid':'' ?>">
            <option selected hidden value="">Pilih Category...</option>
            <?php $cat= $this->input->post('category')? $this->input->post('category'):$cashout->category_id?>
            <?php foreach ($category as $dt) : ?>
              <option value ="<?=$dt->category_id?>"<?=$cat== $dt->category_id? "selected": ''?>><?= $dt->category ?></option>
            <?php endforeach ?>
          </select>
          <div class="invalid-feedback">
            <?php echo form_error('category') ?>
          </div>
        </div>

        <div class="form-group col-md-3">
          <label for="jumlah">Jumlah</label>
          <input type="text" class="form-control <?php echo form_error('jumlah')?'is-invalid':'' ?>" id="jumlah" name="jumlah" value="<?=$this->input->post('jumlah')? $this->input->post('jumlah'):$cashout->jumlah_co?>">
          <div class="invalid-feedback">
            <?php echo form_error('jumlah') ?>
          </div>
        </div>
        <div class="form-group col-md-3">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control <?php echo form_error('tanggal')?'is-invalid':'' ?>" id="tanggal" name="tanggal" value="<?=$this->input->post('tanggal')? $this->input->post('tanggal'):$cashout->tanggal_co?>">
          <div class="invalid-feedback">
            <?php echo form_error('tanggal') ?>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?php echo base_url('cashout')?>" class="btn btn-info">Back</a>
    </form>
  </div>
</div>