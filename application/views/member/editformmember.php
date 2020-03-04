
<!-- Basic Card Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data Member</h6>
  </div>

  <div class="card-body">

    <form method="post" action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama">Nama</label>
          <input type="hidden" value="<?=$member->member_id?>" class="form-control" id="member_id" name="member_id">
          <input type="text" value="<?=$this->input->post('nama')? $this->input->post('nama'):$member->nama?>" class="form-control <?php echo form_error('nama')?'is-invalid':'' ?>" id="nama" name="nama" >
          <div class="invalid-feedback">
            <?php echo form_error('nama') ?>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="jabatan">Jabatan</label>
          <input type="text" value="<?=$this->input->post('jabatan')? $this->input->post('jabatan'):$member->jabatan?>" class="form-control <?php echo form_error('jabatan')?'is-invalid':'' ?>"  id="jabatan" name="jabatan">
          <div class="invalid-feedback">
            <?php echo form_error('jabatan') ?>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="golongan">Golongan</label>
          <select id="golongan" class="form-control <?php echo form_error('golongan')?'is-invalid':'' ?>"  name="golongan">
            <div class="invalid-feedback">
              <?php echo form_error('golongan') ?>
            </div>
            <?php $golongan= $this->input->post('golongan')? $this->input->post('golongan'):$member->golongan?>
            <option value="1" <?=$golongan=="1"? "selected": ''?>>1</option>
            <option value="2" <?=$golongan=="2"? "selected": ''?>>2</option>
            <option value="3" <?=$golongan=="3"? "selected": ''?>>3</option>
            <option value="4" <?=$golongan=="4"? "selected": ''?>>4</option>
            <option value="5" <?=$golongan=="5"? "selected": ''?>>5</option>
            <option value="6" <?=$golongan=="3"? "selected": ''?>>6</option>
            <option value="7" <?=$golongan=="3"? "selected": ''?>>7</option>
            <option value="8" <?=$golongan=="3"? "selected": ''?>>8</option>
            <option value="9" <?=$golongan=="3"? "selected": ''?>>9</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="jumlah">Jumlah</label>
          <input type="text" value="<?=$this->input->post('jumlah')? $this->input->post('jumlah'):$member->jumlah?>" class="form-control <?php echo form_error('jumlah')?'is-invalid':'' ?>"  id="jumlah" name="jumlah">
          <div class="invalid-feedback">
            <?php echo form_error('jumlah') ?>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?php echo base_url('member')?>" class="btn btn-info">Back</a>
    </form>
  </div>
</div>