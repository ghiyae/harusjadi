<!-- DataTales Example -->
<div class="card shadow mb-4">
 <!-- Card Header - Dropdown -->
 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Data Cash In</h6>
  <a href="<?php echo base_url('cashin/add')?>" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add</span></a>   
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Golongan</th>
            <th>Jumlah</th>
            <th>Description</th>
            <th>Tanggal</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         <?php 
          $no=1;
          foreach ($cashin as $dt) {?>
            <tr>
              <td><?php echo $dt->nama ?></td>
              <td><?php echo $dt->golongan ?></td>
              <td><?php echo $dt->jumlah_ci ?></td>
              <td><?php echo $dt->description ?></td>
              <td><?php echo $dt->tanggal_ci ?></td>
              <td>
                <a href="<?php echo base_url('cashin/edit/'.$dt->cashin_id)?>" class="btn btn-success btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                  </span>
                  <span class="text">Edit</span></a>
                  <a onclick="deleteConfirm('<?=site_url('cashin/delete/'.$dt->cashin_id)?>')" href="#!" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Delete</span></a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
        <!-- /.container-fluid -->