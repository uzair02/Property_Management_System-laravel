<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin Dashboard</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300&family=Maven+Pro&family=Roboto+Slab:wght@300&family=Varela+Round&display=swap" rel="stylesheet">    
 
 <style>
    body{
        font-family: 'Archivo', sans-serif;
        font-family: 'Maven Pro', sans-serif;
        font-family: 'Roboto Slab', serif;
        font-family: 'Varela Round', sans-serif;
    }
	</style> 
	<!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/auth/vendors/core/core.css')); ?>">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/auth/vendors/flatpickr/flatpickr.min.css')); ?>">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/auth/fonts/feather-font/css/iconfont.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/auth/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?php echo e(asset('assets/auth/css/demo2/style.css')); ?>">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?php echo e(asset('assets/auth/images/fevi.png')); ?>" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
    <?php echo $__env->make('layouts.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
      <?php echo $__env->make('layouts.body.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- partial -->

      <?php echo $__env->yieldContent('admin'); ?>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.google.com" target="_blank">Chemsa</a>.</p>
				<p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="<?php echo e(asset('assets/auth/vendors/core/core.js')); ?>"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="<?php echo e(asset('assets/auth/vendors/flatpickr/flatpickr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/auth/vendors/apexcharts/apexcharts.min.js')); ?>"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="<?php echo e(asset('assets/auth/vendors/feather-icons/feather.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/auth/js/template.js')); ?>"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="<?php echo e(asset('assets/auth/js/dashboard-dark.js')); ?>"></script>
	<!-- End custom js for this page -->

</body>
</html>    <?php /**PATH C:\xampp\htdocs\PMS\resources\views/layouts/dash.blade.php ENDPATH**/ ?>