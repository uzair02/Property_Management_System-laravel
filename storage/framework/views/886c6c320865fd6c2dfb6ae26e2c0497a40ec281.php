<nav class="sidebar">
      <div class="sidebar-header">
        <img src="<?php echo e(asset('assets/auth/images/fevi.png')); ?>" alt="PMS" height="45" width="45">
        <a href="#" class="sidebar-brand">
          PMS
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="<?php echo e(url('layouts/dash')); ?>" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
            <i class="fa-solid fa-file-pen"></i>
            <span class="link-title">Create New Data</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo e(url('tenant/create')); ?>" class="nav-link">Tenant</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('property/create')); ?>" class="nav-link">Property</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('lease/create')); ?>" class="nav-link">Lease</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('monthlypayment/create')); ?>" class="nav-link">Monthly Payments</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('rent/create')); ?>" class="nav-link">Rents</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
            <i class="fa-solid fa-table"></i>
              <span class="link-title">Read Data</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="authPages">
              <ul class="nav sub-menu">
              <li class="nav-item">
                  <a href="<?php echo e(url('tenant/read')); ?>" class="nav-link">Tenant</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('property/read')); ?>" class="nav-link">Property</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('lease/read')); ?>" class="nav-link">Lease</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('monthlypayment/read')); ?>" class="nav-link">Monthly Payments</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('rent/read')); ?>" class="nav-link">Rents</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('file/show_file')); ?>" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Display Files</span>
            </a>
          </li>
          <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="<?php echo e(url('layouts/document')); ?>" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Documentation</span>
            </a>
          </li>
        </ul>
      </div>
    </nav><?php /**PATH C:\xampp\htdocs\PMS\resources\views/layouts/body/sidebar.blade.php ENDPATH**/ ?>