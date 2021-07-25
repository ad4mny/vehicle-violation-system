<div class="container my-5">
    <div id="alert" class="w-75 position-absolute start-50 translate-middle mt-5" style="z-index: 1; top: 10%;">
        <?php
        if ($this->session->tempdata('notice') != NULL) {
            echo '<div class="alert alert-success border-0 shadow alert-dismissible fade show" role="alert">';
            echo '<i class="fas fa-info-circle fa-fw"></i> ' . $this->session->tempdata('notice');
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        if ($this->session->tempdata('error') != NULL) {
            echo '<div class="alert alert-danger border-0 shadow alert-dismissible fade show" role="alert">';
            echo '<i class="fas fa-exclamation-circle fa-fw"></i> ' . $this->session->tempdata('error');
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        ?>
    </div>
    <div class="row">
        <form method="post" action="<?php echo base_url(); ?>register/submit">
            <div class="col-6 offset-3 bg-white rounded-3 shadow p-5">
                <div class="">
                    <h4>Create a new user account</h4>
                    <div class="form-group py-2">
                        <small class="">Matric ID/Staff ID</small>
                        <input type="text" class="form-control" name="username" placeholder="AZ18180" required>
                    </div>
                    <div class="form-group pb-2">
                        <small class="">Full Name</small>
                        <input type="text" class="form-control" name="name" placeholder="Ali bin Abu" required>
                        <select class="form-select mt-1" name="status">
                            <option value="Student" selected>Student</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </div>
                    <div class="form-group pb-2">
                        <small class="">Residential Address</small>
                        <div class="input-group">
                            <textarea type="textarea" class="form-control" row="3" max="150" name="address" placeholder="No 4 Jalan Lingkaran 6 Putrajaya" required></textarea>
                        </div>
                    </div>
                    <div class="form-group pb-2">
                        <small class="">Phone Number</small>
                        <input type="text" class="form-control" name="phone" placeholder="0123456789" required>
                    </div>
                    <div class="form-group pb-2">
                        <small class="">Choose a password</small>
                        <input type="password" class="form-control" name="password" id="pwd" placeholder="Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Minimum 8 characters, at least one letter and one number." required>
                        <input type="password" class="form-control mt-1" name="confirm_password" id="c_pwd" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group pt-4 text-center d-flex justify-content-between align-items-center">
                        <a href="<?php echo base_url(); ?>" class=""><i class="fas fa-chevron-left fa-fw fa-sm"></i>Login</a>
                        <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-sign-in-alt fa-fw fa-sm"></i> Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>