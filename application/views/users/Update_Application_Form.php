<div class="container px-4 py-2">
    <div class="row my-3">
        <div class="col">
            <h1 class="display-4">Update Your Application</h1>
            <p class=" text-justify">Fill in the form to update your vehicle sticker application.</p>
        </div>
    </div>
    <?php if (isset($user_data) && is_array($user_data) && !empty($user_data) && $user_data !== false) {
        if (isset($sticker_data) && is_array($sticker_data) && !empty($sticker_data) && $sticker_data !== false) { ?>
            <form action="<?php echo base_url(); ?>sticker/apply/update" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="form-group">
                            <h5 class="border-bottom pb-1">Student Detail</h5>
                        </div>
                        <div class="form-group pb-2">
                            <small>Full Name</small>
                            <input type="text" class="form-control text-uppercase" name="name" value="<?php echo $user_data['fullName']; ?>" disabled>
                        </div>
                        <div class="form-group pb-2">
                            <small>Matric ID / Staff ID</small>
                            <input type="text" class="form-control text-uppercase" name="id" value="<?php echo $user_data['cardID']; ?>" disabled>
                        </div>
                        <div class="form-group pb-2">
                            <small>Residential Address</small>
                            <textarea class="form-control text-uppercase" row="3" max="150" name="address" disabled><?php echo $user_data['address']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <h5 class="border-bottom pb-1">Vehicle Detail</h5>
                        </div>
                        <div class="form-group pb-2">
                            <small>Vehicle</small>
                            <select class="form-select" name="type" required>
                                <option value="CAR" <?php if ($sticker_data['vehicleType'] === 'CAR') echo 'selected'; ?>>CAR</option>
                                <option value="MOTOCYCLE" <?php if ($sticker_data['vehicleType'] === 'MOTOCYCLE') echo 'selected'; ?>>MOTOCYCLE</option>
                            </select>
                        </div>
                        <div class="form-group pb-2">
                            <small>Brand</small>
                            <input type="text" class="form-control" placeholder="PERODUA MYVI" name="brand" value="<?php echo $sticker_data['vehicleBrand']; ?>" required>
                        </div>
                        <div class="form-group pb-2">
                            <small>Registration No.</small>
                            <input type="text" class="form-control" placeholder="AAA 8888" name="reg" value="<?php echo $sticker_data['vehicleRegistrationNo']; ?>" required>
                        </div>
                        <div class="form-group pb-2">
                            <small>Colour</small>
                            <input type="text" class="form-control" placeholder="SILVER" name="colour" value="<?php echo $sticker_data['vehicleColour']; ?>" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <h5 class=" border-bottom pb-1">Roadtax & Licence Detail</h5>
                        </div>
                        <div class="form-group pb-2">
                            <small>Roadtax's Valid Date</small>
                            <input type="date" class="form-control" placeholder="02/02/2020" name="tax_date" value="<?php echo $sticker_data['roadTaxDate']; ?>" required>
                        </div>
                        <div class="form-group pb-2">
                            <small>Licence's Valid Date</small>
                            <input type="date" class="form-control" placeholder="20/04/2020" name="licence_date" value="<?php echo $sticker_data['licenceDate']; ?>" required>
                        </div>
                        <div class="form-group pb-2">
                            <small>Licence's No.</small>
                            <input type="text" class="form-control" placeholder="JEA20018917" name="licence_no" value="<?php echo $sticker_data['licenceNo']; ?>" required>
                        </div>
                        <div class="form-group pb-2">
                            <small>Licence's Class</small>
                            <select class="form-select" name="licence_class" required>
                                <option value="B" <?php if ($sticker_data['licenceClass'] === 'B') echo 'selected'; ?>>B</option>
                                <option value="B2" <?php if ($sticker_data['licenceClass'] === 'B2') echo 'selected'; ?>>B2</option>
                                <option value="C" <?php if ($sticker_data['licenceClass'] === 'C') echo 'selected'; ?>>C</option>
                                <option value="D" <?php if ($sticker_data['licenceClass'] === 'D') echo 'selected'; ?>>D</option>
                                <option value="E" <?php if ($sticker_data['licenceClass'] === 'E') echo 'selected'; ?>>E</option>
                                <option value="F" <?php if ($sticker_data['licenceClass'] === 'F') echo 'selected'; ?>>F</option>
                            </select>
                        </div>
                        <div class="form-group pb-2">
                            <small>Upload Vehicle Grant</small>
                            <input type="file" class="form-control" id="inputGroupFile01" name="grant" required>
                            <small class="text-muted" id="file_info">*Only .jpg/jpeg file allowed</small>
                        </div>
                    </div>
                    <div class="col-12 text-center py-3">
                        <div class="form-group">
                            <input type="hidden" name="vehicle_id" value="<?php echo $sticker_data['vehicleID']; ?>">
                            <a href="<?php echo base_url() . 'sticker/apply/delete/' . $sticker_data['vehicleID']; ?>" class="btn btn-danger">
                                <i class="fas fa-trash fa-fw fa-xs"></i> Delete Sticker
                            </a>
                            <button type="submit" class="btn btn-primary" name="submit">
                                <i class="fas fa-chevron-right fa-fw fa-xs"></i> Confirm Details & Update Sticker
                            </button>
                        </div>
                    </div>
                </div>
            </form>
    <?php
        } else {
            redirect(base_url() . 'logout');
        }
    } ?>
</div>