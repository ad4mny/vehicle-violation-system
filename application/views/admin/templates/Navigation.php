<div class="d-flex" id="wrapper">

    <div class="bg-white border-right shadow" id="sidebar-wrapper">
        <div class="sidebar-heading">
            <h3 class="fw-bold">
                Saman-On-The-Go
            </h3>
            <p class="text-capitalize">Welcome,
                <?php $nick = explode(' ', $_SESSION['name']);
                echo $nick[0]; ?>.
            </p>
        </div>
        <div class="list-group list-group-flush">
            <a href="<?php echo base_url(); ?>dashboard" class="list-group-item list-group-item-action <?php if ($this->uri->segment(1) == 'dashboard') echo 'active'; ?>">
                <i class="fas fa-columns fa-fw me-2"></i> Dashboard
            </a>
            <a href="<?php echo base_url(); ?>sticker" class="list-group-item list-group-item-action <?php if ($this->uri->segment(1) == 'sticker') echo 'active'; ?>">
                <i class="fas fa-copy fa-fw me-2"></i> Manage Sticker
            </a>
            <a href="<?php echo base_url(); ?>violation" class="list-group-item list-group-item-action <?php if ($this->uri->segment(1) == 'violation') echo 'active'; ?>">
                <i class="fas fa-file-invoice-dollar fa-fw me-2"></i> Manage Violation
            </a>
            <a href="<?php echo base_url(); ?>logout" class="list-group-item list-group-item-action text-danger" onclick="return confirm('Logout?');">
                <i class="fas fa-sign-out-alt fa-fw me-2"></i> Logout
            </a>
        </div>
    </div>

    <div id="page-content-wrapper">

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