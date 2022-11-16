<script>
    function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= $this->session->flashdata('message'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Report Data</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
<<<<<<< HEAD
                                    <th>Name</th>                            
                                    <th>UqID</th>
=======
                                    <th>Reporters Name</th>                            
                                    <th>UqID</th>
                                    <th>Accused Name</th>
>>>>>>> 7392ddf32b7c42a3a21269af76bb78ddf008a2ab
                                    <th>Report Title</th>
                                    <th>Report Type</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                        </thead>
                    <tbody>
                        <?php $index = 1; ?>
                        <?php foreach($reports as $r) : ?>
                            <tr>
                                <td><?= $index; ?></td>
                                <?php if($r['status'] == "Cancelled") : ?> 
                                    <td><a class="badge badge-secondary badge-center" style="font-size:14px;" href="#!" disabled><?= $r['status']; ?></a></td>                                 
                                <?php endif; ?>
                                <?php if($r['status'] == "Pending") : ?> 
                                    <td><a class="badge badge-warning badge-center" style="font-size:14px;" href="#!" disabled><?= $r['status']; ?></a></td>                                 
                                <?php endif; ?>
                                <?php if($r['status'] == "Process") : ?> 
                                    <td><a class="badge badge-primary" style="font-size:14px;" href="#!" disabled><?= $r['status']; ?></a></td>                                 
                                <?php endif; ?>
                                <?php if($r['status'] == "Done") : ?> 
                                    <td><a class="badge badge-success" style="font-size:14px;" href="#!" disabled><?= $r['status']; ?></a></td> 
                                <?php endif; ?>   
                                <td><?= $r['name']; ?></td>
                                <td><?= $r['uqid']; ?></td>
<<<<<<< HEAD
                                <td><?= $r['title']; ?></td>
                                <td><?= $r['type']; ?></td>
                                <td><?= date('d F y', $r['date_reported'])?></td>
                                <td>
                                    <a class="badge badge-primary" style="font-size:14px;" href="<?= site_url('report/update_detail/'.$r['id']); ?>">Detail</a>
                                    <a class="badge badge-danger" style="font-size:14px;" href="#!" onclick="deleteConfirm('<?= site_url('report/deletereport/'.$r['id']); ?>')">Delete</a>
=======
                                <td><?= $r['accused_name']; ?></td>
                                <td><?= $r['title']; ?></td>
                                <td><?= $r['type']; ?></td>
                                <td><?= $r['date_reported']?></td>
                                <td>
                                    <a class="badge badge-primary" style="font-size:14px;" href="<?= site_url('report/update_detail/'.$r['id']); ?>">Detail</a>
                                  
>>>>>>> 7392ddf32b7c42a3a21269af76bb78ddf008a2ab
                                </td>
                            </tr>
                        <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Deleted data cannot be recovered!</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Remove</a>
      </div>
    </div>
  </div>
</div>