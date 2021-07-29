<div class="container-fluid p-5 bg-white">

    <div class="row pb-4">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo base_url(); ?>admin/violations/search">
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
                    <th>Violation</th>
                    <th>Location</th>
                    <th>Datetime</th>
                    <th>Status</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                    if (isset($violation_list) && is_array($violation_list) && !empty($violation_list) && $violation_list !== false) {
                        $i = 0;
                        foreach ($violation_list as $list) {
                    ?>
                            <tr class="text-uppercase ">
                                <td><?php echo ++$i; ?></td>
                                <td>
                                    <?php echo $list["vehicleRegistrationNo"]; ?>
                                    <small class="text-muted"><?php echo $list["vehicleBrand"]; ?></small>
                                </td>
                                <td><?php echo $list["type"]; ?> </td>
                                <td><?php echo $list["location"]; ?> </td>
                                <td><?php echo $list["date"]; ?> </td>
                                <td>
                                    <?php
                                    if ($list["status"] == 'Paid') {
                                        echo '<div class="text-success">' . $list["status"] . '</div>';
                                    } else {
                                        echo '<div class="text-danger">' . $list["status"] . '</div>';
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if ($list["status"] == 'Not Paid') {
                                        echo '<a href="' . base_url() . 'admin/violations/pay/' . $list['violationID'] . '" class="btn btn-success btn-sm"><i class="fas fa-dollar-sign fa-fw"></i></a>';
                                    }
                                    ?>
                                    <a href="<?php echo base_url();?>admin/violations/pay/<?php echo $list['violationID']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo '<tr><td colspan="7">No application found.</td></td>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>