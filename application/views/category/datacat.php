<!-- DataTales Example -->
<div class="card shadow mb-4">
 <!-- Card Header - Dropdown -->
 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Data Category</h6>
  <a href="<?php echo base_url('category/add')?>" class="btn btn-primary btn-icon-split">
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
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
          <?php 
          $no=1;
          foreach ($category as $key) {?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $key->category ?></td>
              <td>
                <a href="<?php echo base_url('category/edit/'.$key->category_id)?>" class="btn btn-success">Edit</a>
                <a onclick="deleteConfirm('<?=site_url('category/delete/'.$key->category_id)?>')" href="#!" class="btn btn-danger">Delete</a></td>
              </tr>
            <?php } ?>  
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
        <!-- /.container-fluid -->