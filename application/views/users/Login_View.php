<div class="container">
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
    <div class="row d-flex vh-100 align-items-center justify-content-center">
        <div class="col border-right">
            <h1 class="display-3">UMP Vehicle Violation System</h1>
            <h4 class="text-muted">Manage your vehicle summon and sticker in UMP easily.</h4>
        </div>
        <div class="col-4">
            <div class=" rounded-3 bg-white shadow p-5">
                <form method="post" action="<?php echo base_url(); ?>login">
                    <div class="form-group pb-2 text-center">
                        <h3 class="fw-bold">Saman-On-The-GO</h3>
                    </div>
                    <div class="form-group pb-2">
                        <input type="text" class="form-control" name="username" placeholder="Matric/Staff ID" required>
                    </div>
                    <div class="form-group pb-2">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group pb-2 text-center">
                        <button type="submit" class="form-control btn btn-primary" name="submit">Login</button>
                    </div>
                    <div class="form-group pt-4 text-center">
                        <input type="hidden" name="login">
                        <small>New user please register <a href="register" value="Manage">here</a>.</small><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>