<!DOCTYPE html>
<html>
<head>
 <title>Update rent</title>
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
    }
    .container {
            border: 2px solid #d3d3d3;
            border-radius: 10px;
            margin-top: 30px;
            width: 70%;
            background-color: white;
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

        <form class="px-3 py-3 row g-3" action="<?php echo e(route ('rent.update', $rents->id)); ?>" method="post">
            <legend style="text-align: center;"><strong>Update Rents</strong></legend>
            <hr style="border-top: dashed 1px; margin-bottom: 1rem;">
            <?php echo csrf_field(); ?>
            <div class="col-12">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo e($rents->id); ?>" readonly>
            </div>
            <div class="col-12">
                <label for="rent_num" class="form-label">Rent Number</label>
                <input type="text" class="form-control" id="rent_num" name="rent_num" value="<?php echo e($rents->rent_num); ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Tenant:</label>
                <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="tenant">
                    <?php $__currentLoopData = $tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tenant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tenant->id); ?>"><?php echo e($tenant->fullname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Property:</label>
                <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="property">
                    <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($property->id); ?>"><?php echo e($property->pro_num); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-12">
                <label for="pay_status" class="form-label">Payment Status</label>
                <input type="text" class="form-control" id="pay_status" name="pay_status" value="<?php echo e($rents->pay_status); ?>">
            </div>
            <div class="col-12">
                <label for="rent_status" class="form-label">Rent Status</label>
                <input type="text" class="form-control" id="rent_status" name="rent_status" value="<?php echo e($rents->rent_status); ?>">
            </div>
            <div class="col-12">
                <label for="lease_term" class="form-label">Lease term</label>
                <input type="text" class="form-control" id="lease_term" name="lease_term" value="<?php echo e($rents->lease_term); ?>">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\PMS\resources\views/rent/update.blade.php ENDPATH**/ ?>