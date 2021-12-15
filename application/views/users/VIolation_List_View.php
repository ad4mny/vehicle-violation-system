<div class="container px-4 py-2">
    <div class="row my-3">
        <div class="col">
            <h1 class="display-4">Summon Violations List</h1>
            <p class=" text-justify">List of all your vehicle summon and violations.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class=" border-bottom pb-1">Active Violation and Summons</h5>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Violation Detail</th>
                        <th>Penalty Point</th>
                        <th>Location</th>
                        <th>Datetime</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($violation_list) && is_array($violation_list) && !empty($violation_list) && $violation_list !== false) {
                        $i = 0;
                        foreach ($violation_list as $list) { ?>
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td>
                                    <?php echo $list["type"]; ?><br>
                                    <small class="text-muted"><?php echo $list["vehicleRegistrationNo"]; ?></small>
                                </td>
                                <td><?php echo $list["demerit"]; ?> </td>
                                <td><?php echo $list["location"]; ?> </td>
                                <td><?php echo $list["date"]; ?> </td>
                                <td><?php echo $list["status"]; ?></td>
                            </tr>
                    <?php }
                    } else {
                        echo '<tr><td colspan="6">No violation found.</td></tr>';
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>