<!DOCTYPE html>
<html>
<head>
 <title>Add New Lease</title>
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

        <form class="px-3 py-3 row g-3" action="<?php echo e(route ('lease.store')); ?>" method="post">
            <legend style="text-align: center;"><strong>Add New Lease</strong></legend>
            <hr style="border-top: dashed 1px; margin-bottom: 1rem;">
            <?php echo csrf_field(); ?>
            
            <div class="col-12">
                <label for="lease_num" class="form-label"> Lease Number</label>
                <input type="text" class="form-control" id="lease_num" name="lease_num" placeholder ="0234">
            </div>
            <div class="col-12">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="text" class="form-control" id="start_date" name="start_date" placeholder ="DD-MM-YYYY">
            </div>

            <div class="col-12">
                <label for="end_date" class="form-label">End Date</label>
                <input type="text" class="form-control" id="end_date" name="end_date" placeholder="DD-MM-YYYY">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Total Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Price">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Security</label>
                <input type="text" class="form-control" id="security" name="security" placeholder="Enter Security">
            </div>
            <div class="col-12">
                <label for="property" class="form-label">Property:</label>
                <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="payment">
                    <option selected>Select payments</option>
                    <?php $__currentLoopData = $pay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($payment->id); ?>"><?php echo e($payment->pro_num); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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


<?php /**PATH C:\xampp\htdocs\PMS\resources\views/lease/create.blade.php ENDPATH**/ ?>