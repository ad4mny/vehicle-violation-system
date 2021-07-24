<div class="container px-4 py-2">
    <div class="row my-3">
        <div class="col">
            <h1 class="display-4">Vehicle & Sticker Information</h1>
            <p class=" text-justify">View your vehicle sticker infromation, and print it to save a copy.</p>
        </div>
    </div>
    <?php if (isset($user_data) && is_array($user_data) && !empty($user_data) && $user_data !== false) {
        if (isset($sticker_data) && is_array($sticker_data) && !empty($sticker_data) && $sticker_data !== false) { ?>
            <div class="row mb-3">
                <div class="col-4">
                    <div class="form-group">
                        <h5 class="border-bottom pb-1">Student Detail</h5>
                    </div>
                    <div class="form-group ">
                        <small>Full Name</small>
                        <p class="text-uppercase fw-bold"><?php echo $user_data['fullName']; ?></p>
                    </div>
                    <div class="form-group ">
                        <small>Matric ID / Staff ID</small>
                        <p class="text-uppercase fw-bold"><?php echo $user_data['cardID']; ?></p>
                    </div>
                    <div class="form-group ">
                        <small>Residential Address</small>
                        <p class="text-uppercase fw-bold"><?php echo $user_data['address']; ?></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <h5 class="border-bottom pb-1">Vehicle Detail</h5>
                    </div>
                    <div class="form-group ">
                        <small>Vehicle</small>
                        <p class="text-uppercase fw-bold"><?php echo $sticker_data['vehicleType']; ?></p>
                    </div>
                    <div class="form-group ">
                        <small>Brand</small>
                        <p class="text-uppercase fw-bold"><?php echo $sticker_data['vehicleBrand']; ?></p>
                    </div>
                    <div class="form-group ">
                        <small>Registration No.</small>
                        <p class="text-uppercase fw-bold"><?php echo $sticker_data['vehicleRegistrationNo']; ?></p>
                    </div>
                    <div class="form-group ">
                        <small>Colour</small>
                        <p class="text-uppercase fw-bold"><?php echo $sticker_data['vehicleColour']; ?></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <h5 class=" border-bottom pb-1">Roadtax & Licence Detail</h5>
                    </div>
                    <div class="form-group ">
                        <small>Roadtax's Valid Date</small>
                        <p class="text-uppercase fw-bold"><?php echo $sticker_data['roadTaxDate']; ?></p>
                    </div>
                    <div class="form-group ">
                        <small>Licence's Valid Date</small>
                        <p class="text-uppercase fw-bold"><?php echo $sticker_data['licenceDate']; ?></p>
                    </div>
                    <div class="form-group ">
                        <small>Licence's No.</small>
                        <p class="text-uppercase fw-bold"><?php echo $sticker_data['licenceNo']; ?></p>
                    </div>
                    <div class="form-group ">
                        <small>Licence's Class</small>
                        <p class="text-uppercase fw-bold"><?php echo $sticker_data['licenceClass']; ?></p>
                    </div>
                </div>
                <div class="col-6 text-center py-3">
                    <div class="form-group ">
                        <small>Uploaded Vehicle Grant</small>
                        <?php if ($sticker_data['vehicleGrant'] !== NULL) {
                            echo '<img src="' . base_url() . 'assets/upload/vehicle-grant/' . $sticker_data['vehicleGrant'] . '" class="img-fluid" alt="No Image">';
                        } else {
                            echo '<img src="https://dummyimage.com/640x640/f0f0f0/aaa" class="img-fluid" alt="No Image">';
                        } ?>
                    </div>
                </div>
                <div class="col-6 text-center py-3">
                    <div class="form-group ">
                        <small>Vehicle Sticker</small>
                        <?php if ($sticker_data['vehicleStickerPath'] !== NULL) {
                            echo '<img src="' . base_url() . 'assets/upload/vehicle-sticker/' . $sticker_data['vehicleStickerPath'] . '" class="img-fluid" alt="No Image">';
                        } else {
                            echo '<img src="https://dummyimage.com/640x640/f0f0f0/aaa" class="img-fluid" alt="No Image">';
                        } ?>
                    </div>
                </div>
            </div>
    <?php
        } else {
            redirect(base_url() . 'logout');
        }
    } ?>
</div>