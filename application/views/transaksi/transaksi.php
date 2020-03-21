<?php var_dump($transaksi) ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
 <!-- Card Header - Dropdown -->
 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Form Input Transaksi</h6>
  </div>


  <div class="card-body">
    <div class="table-responsive">

      <a href="<?php echo base_url('transaksi/add')?>" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-sign-in-alt"></i>
        </span>
        <span class="text">Add Cash In</span></a> 
        <a href="<?php echo base_url('transaksi/add')?>" class="btn btn-warning btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-sign-out-alt"></i>
          </span>
          <span class="text">Add Cash Out</span></a>  
          <hr>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Description</th>
                <th>In</th>
                <th>Out</th>
                <th>Saldo</th>
              </tr>
            </thead>
            <tbody>
                        <?php 
          $no=1;
          foreach ($transaksi as $key) {?>
              <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $key->tanggal ?></td>
              <td><?php echo $key->description ?></td>
              <td><?php echo $key->tran_in ?></td>
              <td><?php echo $key->tran_out ?></td>
                <td>
                <a href="<?php echo base_url('transaksi/edit/'.$key->tran_id)?>" class="btn btn-success btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                  </span>
                  <span class="text">Edit</span></a>
                  <a onclick="deleteConfirm('<?=site_url('transaksi/delete/'.$key->tran_id)?>')" href="#!" class="btn btn-danger btn-icon-split">
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

</div>
<!-- End of Main Content -->
