<nav class="navbar navbar-expand-lg navbar-light">
    <span class="navbar-brand ps-3">Saman-On-The-GO UMP Vehicle Violation System (SUVSS)</span>
    <div class="ms-auto mt-2 pe-3">
        <a href="<?php echo base_url(); ?>logout" class="text-danger" onclick="return confirm('Logout?');"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</nav>

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) == 'dashboard') echo 'active'; ?>" href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) == 'users') echo 'active'; ?>" href="<?php echo base_url(); ?>admin/users">Users List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) == 'applications') echo 'active'; ?>" href="<?php echo base_url(); ?>admin/applications">Applications List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(2) == 'violations') echo 'active'; ?>" href="<?php echo base_url(); ?>admin/violations">Violations List</a>
    </li>
</ul>

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