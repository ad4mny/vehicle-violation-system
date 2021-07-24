<div class="container px-4 py-2">
    <div class="row my-3">
        <div class="col">
            <h1 class="display-4">Vehicle Sticker List</h1>
            <p class=" text-justify">List of all your vehicle sticker applications.</p>
        </div>
        <div class="col-3 my-auto text-end">
            <a href="<?php echo base_url(); ?>sticker/apply" class="btn btn-primary">
                <i class="fas fa-plus fa-fw fa-xs"></i> Apply New Sticker
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class=" border-bottom pb-1">Current Applications Status</h5>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Vehicle Detail</th>
                        <th>Apply Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($sticker_list) && is_array($sticker_list) && !empty($sticker_list) && $sticker_list !== false) {
                        $i = 0;
                        foreach ($sticker_list as $list) { ?>
                            <tr class="text-uppercase ">
                                <td><?php echo ++$i; ?></td>
                                <td>
                                    <?php echo $list["vehicleRegistrationNo"]; ?>
                                    <small class="text-muted"><?php echo $list["vehicleBrand"]; ?></small>
                                </td>
                                <td><?php echo $list["date"]; ?> </td>
                                <td>
                                    <?php
                                    if ($list["status"] == 'Reject') {
                                        echo '<div class="text-danger">' . $list["status"] . '</div>';
                                        echo '<div class="text-muted"><small>' . $list["comment"] . '</small></div>';
                                    } else if ($list["status"] == 'Incomplete') {
                                        echo '<div class="text-info">' . $list["status"] . '</div>';
                                        echo '<div class="text-muted"><small>' . $list["comment"] . '</small></div>';
                                    } else if ($list["status"] == 'Approve') {
                                        echo '<div class="text-success">' . $list["status"] . '</div>';
                                        echo '<div class="text-muted"><small>' . $list["comment"] . '</small></div>';
                                    } else {
                                        echo '<div class="text-muted">' . $list["status"] . '</div>';
                                    }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    if ($list["status"] != 'Approve') {
                                        echo '<a href="' . base_url() . 'sticker/update/' . $list['vehicleID'] . '" class="btn btn-warning btn-sm me-1"><i class="fas fa-edit fa-fw fa-sm"></i></a>';
                                        echo '<a href="' . base_url() . 'sticker/view/' . $list['vehicleID'] . '" class="btn btn-primary btn-sm me-1"><i class="fas fa-eye fa-fw fa-sm"></i></a>';
                                        echo '<a href="' . base_url() . 'sticker/apply/delete/' . $list['vehicleID'] . '" class="btn btn-danger btn-sm"><i class="fas fa-trash fa-fw fa-sm"></i></a>';
                                    } else {
                                        echo '<a href="' . base_url() . 'sticker/download/' . $list['vehicleID'] . '" class="btn btn-info btn-sm"><i class="fas fa-download fa-fw fa-sm"></i></a>';
                                    }
                                    ?>
                                </td>
                            </tr>

                    <?php }
                    } else {
                        echo '<tr><td colspan="5">No sticker found.</td></tr>';
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>