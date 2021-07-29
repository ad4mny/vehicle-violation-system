<div class="container-fluid p-5 bg-white">
    <?php if (isset($application_data) && is_array($application_data) && !empty($application_data) && $application_data !== false) { ?>
        <div class="row mb-3">
            <div class="col-4">
                <div class="form-group">
                    <h5 class="border-bottom pb-1">Student Detail</h5>
                </div>
                <div class="form-group ">
                    <small>Full Name</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['fullName']; ?></p>
                </div>
                <div class="form-group ">
                    <small>Matric ID / Staff ID</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['cardID']; ?></p>
                </div>
                <div class="form-group ">
                    <small>Residential Address</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['address']; ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <h5 class="border-bottom pb-1">Vehicle Detail</h5>
                </div>
                <div class="form-group ">
                    <small>Vehicle</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['vehicleType']; ?></p>
                </div>
                <div class="form-group ">
                    <small>Brand</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['vehicleBrand']; ?></p>
                </div>
                <div class="form-group ">
                    <small>Registration No.</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['vehicleRegistrationNo']; ?></p>
                </div>
                <div class="form-group ">
                    <small>Colour</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['vehicleColour']; ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <h5 class=" border-bottom pb-1">Roadtax & Licence Detail</h5>
                </div>
                <div class="form-group ">
                    <small>Roadtax's Valid Date</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['roadTaxDate']; ?></p>
                </div>
                <div class="form-group ">
                    <small>Licence's Valid Date</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['licenceDate']; ?></p>
                </div>
                <div class="form-group ">
                    <small>Licence's No.</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['licenceNo']; ?></p>
                </div>
                <div class="form-group ">
                    <small>Licence's Class</small>
                    <p class="text-uppercase fw-bold"><?php echo $application_data['licenceClass']; ?></p>
                </div>
            </div>
            <div class="col-6 text-center py-3">
                <div class="form-group ">
                    <small>Uploaded Vehicle Grant</small>
                    <?php if ($application_data['vehicleGrant'] !== NULL) {
                        echo '<img src="' . base_url() . 'assets/upload/vehicle-grant/' . $application_data['vehicleGrant'] . '" class="img-fluid" alt="No Image">';
                    } else {
                        echo '<img src="https://dummyimage.com/640x640/f0f0f0/aaa" class="img-fluid" alt="No Image">';
                    } ?>
                </div>
            </div>
            <div class="col-3 text-center py-3">
                <div class="form-group ">
                    <small>Vehicle Sticker</small>
                    <?php if ($application_data['vehicleStickerPath'] !== NULL) {
                        echo '<img src="' . base_url() . 'assets/upload/vehicle-sticker/' . $application_data['vehicleStickerPath'] . '" class="img-fluid" alt="No Image">';
                    } else {
                        echo '<img src="https://dummyimage.com/640x640/f0f0f0/aaa" class="img-fluid" alt="No Image">';
                    } ?>
                </div>
            </div>
            <div class="col-3 text-center py-3">
                <small>Application Action</small><br>
                <a href="<?php echo base_url(); ?>admin/applications/approve/<?php echo $application_data['applicationID']; ?>" class="btn btn-success btn-sm m-1"><i class="fas fa-check fa-fw"></i> Approve Application</a><br>
                <a href="<?php echo base_url(); ?>admin/applications/reject/<?php echo $application_data['applicationID']; ?>" class="btn btn-danger btn-sm m-1"><i class="fas fa-times fa-fw"></i> Reject Application</a>
            </div>
        </div>
    <?php } else {
        redirect(base_url() . 'admin/applications');
    } ?>
</div>