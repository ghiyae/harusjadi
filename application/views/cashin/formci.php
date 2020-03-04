
<!-- Basic Card Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Input Cash In</h6>
  </div>
  <div class="card-body">

    <form method="post" action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama">Nama</label>
          <select id="nama" name="nama" class="form-control">
            <option selected hidden>Pilih Nama...</option>
            <?php foreach ($member as $dt) : ?>
              <option value ="<?= $dt->member_id ?>" <?=set_value('nama')=="$dt->member_id"?"selected":'' ?>> <?=$dt->nama;?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="golongan">Golongan</label>
          <input type="text" class="form-control" id="golongan" name="golongan" readonly>

        </div>
        <div class="form-group col-md-3">
          <label for="jumlah">Jumlah</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah" readonly>
        </div>
        <div class="form-group col-md-3">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control fo" id="tanggal" name="tanggal">
        </div>
        <div class="form-group col-md-9">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
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