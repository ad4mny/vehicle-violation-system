<div class="container-fluid p-5 bg-white">
  <div class="container px-5">
  <div class="row pb-1">
        <div class="col">
            <h1 class="fw-light d-flex align-items-center">Dashboard</h1>
        </div>
    </div>
    <?php if (isset($dashboards) && is_array($dashboards) && $dashboards !== false) { ?>
        <div class="row bg-white rounded-3 shadow mb-2 p-4">
            <div class="col">
                <p class="mb-0">Total Violation Issued</p>
                <h3 class="fw-bold mb-0"><?php echo $dashboards['violation']['value']; ?> Violation(s)</h3>
            </div>
        </div>
        <div class="row bg-white rounded-3 shadow mb-2 p-4">
            <div class="col">
                <p class="mb-0">Total Paid Violation</p>
                <h3 class="fw-bold mb-0"><?php echo $dashboards['paid']['value']; ?> Violation(s) Paid</h3>
            </div>
        </div>
        <div class="row bg-white rounded-3 shadow mb-2 p-4">
            <div class="col">
                <p class="mb-0">Total Registered Vehicle</p>
                <h3 class="fw-bold mb-0"><?php echo $dashboards['vehicle']['value']; ?> Vehicle(s) </h3>
            </div>
        </div>
        <div class="row bg-white rounded-3 shadow mb-2 p-4">
            <div class="col">
                <p class="mb-0">Total Registered User</p>
                <h3 class="fw-bold mb-0"><?php echo $dashboards['user']['value']; ?> User(s) </h3>
            </div>
        </div>
        <div class="row bg-white rounded-3 shadow mb-2 p-4">
            <div class="col">
                <p class="mb-0">Total Approved Sticker Application</p>
                <h3 class="fw-bold mb-0"><?php echo $dashboards['approve']['value']; ?> Approve(s) </h3>
            </div>
        </div>
        <div class="row bg-white rounded-3 shadow mb-2 p-4">
            <div class="col">
                <p class="mb-0">Total Rejected Sticker Application</p>
                <h3 class="fw-bold mb-0"><?php echo $dashboards['reject']['value']; ?> Reject(s) </h3>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="row bg-white rounded-3 shadow mb-2 p-4">
            <div class="col">
                <p class="mb-0">No dashboard data available.</p>
            </div>
        </div>
    <?php
    } ?>
  </div>
</div>