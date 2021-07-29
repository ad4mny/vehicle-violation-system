<div class="container-fluid p-5 bg-white">

    <div class="row pb-4">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo base_url(); ?>admin/applications/search">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search vehicle registration number..">
                    <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="row pb-3">
        <div class="col-10 offset-1">
            <table class="table table-hover table-striped text-uppercase">
                <thead>
                    <th>No.</th>
                    <th>Vehicle Information</th>
                    <th>Date Applied</th>
                    <th>Status</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                    if (isset($application_list) && is_array($application_list) && !empty($application_list) && $application_list !== false) {
                        $i = 0;
                        foreach ($application_list as $list) {
                    ?>
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
                                <td class="text-center">
                                    <?php
                                    if ($list["status"] != 'Approve') {
                                        echo ' <a href="' . base_url() . 'admin/applications/' . $list['applicationID'] . '" class="btn btn-primary btn-sm"><i class="fas fa-eye fa-fw"></i></a>';
                                    }
                                    ?>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo '<tr><td colspan="5">No application found.</td></td>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>