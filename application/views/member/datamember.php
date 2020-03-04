
<!-- DataTales Example -->
<div class="card shadow mb-4">
 <!-- Card Header - Dropdown -->
 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Member Purchasing</h6>
  <a href="<?php echo base_url('member/add')?>" class="btn btn-primary btn-icon-split">
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
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Golongan</th>
            <th>Jumlah</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no=1;
          foreach ($member as $key) {?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $key->nama ?></td>
              <td><?php echo $key->jabatan ?></td>
              <td><?php echo $key->golongan ?></td>
              <td><?php echo $key->jumlah ?></td>
              <td>

                <a href="<?php echo base_url('member/edit/'.$key->member_id)?>" class="btn btn-success btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                  </span>
                  <span class="text">Edit</span></a>
                  <a onclick="deleteConfirm('<?=site_url('member/delete/'.$key->member_id)?>')" href="#!" class="btn btn-danger btn-icon-split">
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