<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card col-md-8 shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('report') ?>"><i class="fas fa-arrow-left"></i> Back</a></h6>
        </div>
        <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">    
            <div class="form-group">
                <input class="form-control" type="hidden" name="id" value="<?= $ureport['id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="uqid">UQID</label>
                <input class="form-control" type="text" name="uqid" value="<?= $ureport['uqid']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="name">Reporter's Name</label>
                <input class="form-control" type="text" name="name" value="<?= $ureport['name']; ?>" readonly>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="report">Status of Report</label>
                        <select class="form-control" name="status"> 
                            <option class="text-warning text-center" value="Pending" <?php if( $ureport['status'] == "Pending") echo 'selected = "selected"';?>>Pending</option>
                            <option class="text-primary text-center" value="Process" <?php if( $ureport['status'] == "Process") echo 'selected = "selected"';?>>Process</option>
                            <option class="text-success text-center" value="Done" <?php if( $ureport['status'] == "Done") echo 'selected = "selected"';?>>Done</option>
                        </select>
                    </div>
                </div>
            </div>  
            <div class="form-group">
                <label for="address">Address</label>
                <input class="form-control" type="text" name="address" value="<?= $ureport['address']; ?>" readonly>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input class="form-control" type="text" name="age" value="<?= $ureport['age']; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contactnum">Contact Number</label>
                        <input class="form-control" type="text" name="contactnum" value="<?= $ureport['contactnum']; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Report Title</label>
                <input class="form-control" type="text" name="title" value="<?= $ureport['title']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="description">Report Description*</label>
                <textarea class="form-control" id="description" name="description" rows="3" readonly><?= $ureport['description']; ?></textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="type">Report Type</label>
                        <input class="form-control" type="text" name="type" value="<?= $ureport['type']; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_reported">Reported On</label>
                        <input class="form-control" type="text" name="date_reported" value="<?= date('d F Y' , $ureport['date_reported']); ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a target="_blank" class="badge badge-primary" style="font-size:16px;" href="<?= base_url('assets/img/report/').$ureport['file']; ?>"><i class="fas fa-image"></i> Check Attachment</a>
            </div>
            <!-- btn -->
            <div class="row">            
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="btn" value="Change" />
                    </div>
                </div>                                    
                <div class="col-md-6">
                    <div class="form-group">            
                        <input class="btn btn-danger" type="button" name="cancel" value="Cancel" onClick="window.location='http://localhost/ComplaintMS-CI/report';" />
                    </div>
                </div>
            </div>                    
            </form> 
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->