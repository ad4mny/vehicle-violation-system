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
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $row["vd_reg_no"]; ?> <small class="text-muted"><?php echo $row["vd_brand"]; ?></small></td>
                                <td><?php echo $row["rd_apply_date"]; ?> </td>
                                <td>
                                    <?php
                                    if ($row["rd_apply_status"] == 'Reject') {
                                        echo '<div class="text-danger">' . $row["rd_apply_status"] . '</div>';
                                        echo '<div class="text-muted"><small>' . $row["rd_comment"] . '</small></div>';
                                    } else if ($row["rd_apply_status"] == 'Incomplete') {
                                        echo '<div class="text-info">' . $row["rd_apply_status"] . '</div>';
                                        echo '<div class="text-muted"><small>' . $row["rd_comment"] . '</small></div>';
                                    } else if ($row["rd_apply_status"] == 'Approve') {
                                        echo '<div class="text-success">' . $row["rd_apply_status"] . '</div>';
                                    } else {
                                        echo '<div class="text-info">' . $row["rd_apply_status"] . '</div>';
                                    }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    if ($row["rd_apply_status"] != 'Approve') {
                                        echo '<a href="apply?act=update&id=' . $row['vd_id'] . '">Update</a><br>';
                                        echo '<a href="view?id=' . $row['vd_id'] . '">View</a><br>';
                                        echo '<a href="apply?act=delete&id=' . $row['vd_id'] . '">Delete</a><br>';
                                    } else {
                                        echo '<a href="system/action?id=' . $row['vd_id'] . '&data=download">Download Sticker</a><br>';
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