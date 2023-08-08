<!DOCTYPE html>
<html>
<head>
    <title>Add New Tenant</title>
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300&family=Maven+Pro&family=Roboto+Slab:wght@300&family=Varela+Round&display=swap" rel="stylesheet">    
 
    <style>
        body{
            font-family: 'Archivo', sans-serif;
            font-family: 'Maven Pro', sans-serif;
            font-family: 'Roboto Slab', serif;
            font-family: 'Varela Round', sans-serif;
            background-color: #333; /* Set dark background color */
            background-image: url(<?php echo e(asset("assets/img/bg.jpg")); ?>); /* Add path to your dark image */
            background-size: cover;
            background-position: center;
        }

        .container {
            border: 2px solid #d3d3d3;
            border-radius: 10px;
            margin-top: 30px;
            width: 70%;
            background-color: rgba(255, 255, 255, 0.9); /* Set slightly transparent white background color */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.5); /* Set slightly transparent white background color for form inputs */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .alert {
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<!-- For Redirecting With Flashed Session Data when 'Submit' button -->
<!-- is pressed in the 'create.blade.php' view which calls the relevant -->
<!-- function 'store' in the StudentController and then this -->
<!-- view, 'create.blade.php' is again called -->
<!-- START -->
<?php if(session('status')): ?>
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>
<!-- END -->

<div class="container my-5">
    <form class="px-3 py-3 row g-3" action="<?php echo e(route('tenant.store')); ?>" method="post">
        <legend style="text-align: center;"><strong>Add New Tenant</strong></legend>
        <hr style="border-top: dashed 1px; margin-bottom: 1rem; text-align: center;">
        <?php echo csrf_field(); ?>
        <div class="col-12">
            <label for="fullname" class="form-label">Fullname</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter FullName">
        </div>
        <div class="col-12">
            <label for="cnic" class="form-label">CNIC</label>
            <input type="text" class="form-control" id="cnic" name="cnic" placeholder="35101-1234567-8">
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="abc@xyz.com">
        </div>
        <div class="col-12">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone number">
        </div>

        <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>



<?php /**PATH C:\xampp\htdocs\PMS\resources\views/tenant/create.blade.php ENDPATH**/ ?>