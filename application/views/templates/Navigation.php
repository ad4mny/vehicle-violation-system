<div class="d-flex" id="wrapper">
    
    <div class="bg-white border-right shadow" id="sidebar-wrapper">
        <div class="sidebar-heading">
            <h3 class="font-weight-bold">
                SUVSS<br>
                <small class="text-capitalize">Welcome.</small>
            </h3>
        </div>
        <div class="list-group list-group-flush">
            <a href="<?php echo base_url(); ?>dashboard" class="list-group-item list-group-item-action <?php if ($this->uri->segment(1) == 'dashboard') echo 'active'; ?>">
                <i class="fas fa-chevron-right fa-fw fa-xs"></i> Dashboard
            </a>
            <a href="<?php echo base_url(); ?>sticker" class="list-group-item list-group-item-action <?php if ($this->uri->segment(1) == 'sticker') echo 'active'; ?>">
                <i class="fas fa-chevron-right fa-fw fa-xs"></i> Manage Sticker
            </a>
            <a href="<?php echo base_url(); ?>violation" class="list-group-item list-group-item-action <?php if ($this->uri->segment(1) == 'violation') echo 'active'; ?>">
                <i class="fas fa-chevron-right fa-fw fa-xs"></i> Manage Violation
            </a>
            <a href="<?php echo base_url(); ?>report" class="list-group-item list-group-item-action <?php if ($this->uri->segment(1) == 'report') echo 'active'; ?>">
                <i class="fas fa-chevron-right fa-fw fa-xs"></i> Manage Report
            </a>
            <a href="<?php echo base_url(); ?>logout" class="list-group-item list-group-item-action text-danger" onclick="return confirm('Logout?');">
                <i class="fas fa-sign-out-alt fa-fw fa-xs"></i> Logout
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