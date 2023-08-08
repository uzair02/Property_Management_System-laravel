<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">

					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-pk mt-1" title="pak"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
							</a>
                        </li>



						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="<?php echo e(asset('assets/auth/images/others/admin.jpg')); ?>" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="<?php echo e(asset('assets/auth/images/others/admin.jpg')); ?>" alt="">
									</div>
									<div class="text-center">
										<p class="tx-16 fw-bolder"><?php echo e(Auth::user()->name); ?></p>
										<p class="tx-12 text-muted"><?php echo e(Auth::user()->email); ?></p>
									</div>
								</div>
								<ul class="list-unstyled p-1">
								<li class="dropdown-item py-2">
									<a href="<?php echo e(url('user/profile')); ?>" class="text-body ms-0">
									<i class="me-2 icon-md" data-feather="user"></i>
									<span>Profile</span>
									</a>
								</li>
								<li class="dropdown-item py-2">
									<a href="<?php echo e(url('/logout')); ?>" class="text-body ms-0">
									<i class="me-2 icon-md" data-feather="log-out"></i>
									<span>Log Out</span>
									</a>
								</li>
								</ul>
				
							</div>
						</li>
					</ul>
				</div>
			</nav><?php /**PATH C:\xampp\htdocs\PMS\resources\views/layouts/body/nav.blade.php ENDPATH**/ ?>