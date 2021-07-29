<div class="container-fluid p-5 bg-white">

    <div class="row pb-4">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo base_url(); ?>admin/users/search">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search card id..">
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
                    <th>Name</th>
                    <th>ID</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                    if (isset($user_list) && is_array($user_list) && !empty($user_list) && $user_list !== false) {
                        $i = 0;
                        foreach ($user_list as $list) {
                    ?>
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $list["fullName"]; ?></td>
                                <td><?php echo $list["cardID"]; ?></td>
                                <td><?php echo $list["address"]; ?> </td>
                                <td><?php echo $list["phone"]; ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url() . 'admin/users/delete/' . $list['userID']; ?>" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo '<tr class="row p-3 bg-white border-bottom text-uppercase"><td class="col">No user found.</td></td>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>