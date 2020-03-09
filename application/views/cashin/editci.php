<!-- Basic Card Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Cash In</h6>
  </div>
  <div class="card-body">

    <form method="post" action="">
      <div class="form-row">
       <div class="form-group col-md-6">
        <label for="nama">Pilih Nama</label>
        <input type="hidden" value="<?=$cashin->cashin_id?>" class="form-control" id="cashin_id" name="cashin_id">
        <select id="nama" class="form-control <?php echo form_error('nama')?'is-invalid':'' ?>"  name="nama">
          <div class="invalid-feedback">
            <?php echo form_error('nama') ?>
          </div>
          <?php $nama= $this->input->post('nama')? $this->input->post('nama'):$cashin->member_id?>
          <?php foreach ($member as $dt) : ?>
          <option value="<?= $dt->member_id ?>" <?=$nama== $dt->member_id? "selected": ''?>><?= $dt->nama ?></option>
            <?php endforeach ?>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="golongan">Golongan</label>
        <input type="text" class="form-control <?php echo form_error('golongan')?'is-invalid':'' ?>" id="golongan" name="golongan" value="<?=$this->input->post('golongan')? $this->input->post('golongan'):$cashin->golongan?>" readonly>
        <div class="invalid-feedback">
          <?php echo form_error('golongan') ?>
        </div>
      </div>
      <div class="form-group col-md-3">
        <label for="jumlah">Jumlah</label>
        <input type="text" class="form-control <?php echo form_error('jumlah')?'is-invalid':'' ?>" id="jumlah" name="jumlah" value="<?=$this->input->post('jumlah')? $this->input->post('jumlah'):$cashin->jumlah?>" readonly>
        <div class="invalid-feedback">
          <?php echo form_error('jumlah') ?>
        </div>
      </div>
      <div class="form-group col-md-3">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control <?php echo form_error('tanggal')?'is-invalid':'' ?>" id="tanggal" name="tanggal" value="<?=$this->input->post('tanggal')? $this->input->post('tanggal'):$cashin->tanggal_ci?>">
        <div class="invalid-feedback">
          <?php echo form_error('tanggal') ?>
        </div>
      </div>
      <div class="form-group col-md-9">
        <label for="description">Description</label>
        <textarea class="form-control <?php echo form_error('description')?'is-invalid':'' ?>" id="description" name="description"><?=$this->input->post('description')? $this->input->post('description'):$cashin->description?></textarea>
        <div class="invalid-feedback">
          <?php echo form_error('description') ?>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?php echo base_url('cashin')?>" class="btn btn-info">Back</a>
  </form>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  $('#nama').change(function(){
      var id=$(this).val();
      $.ajax({
        url : "<?php echo base_url('cashin/getMember'); ?>",
        method : "POST",
        data : {id: id},
        dataType : 'json',
        success:function(data){ 
          var   obj= data;
          $('#golongan').val(obj.golongan);
          $('#jumlah').val(obj.jumlah);
        }
      });
    });
  });
</script>