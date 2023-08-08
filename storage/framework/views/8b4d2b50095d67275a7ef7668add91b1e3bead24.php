<!DOCTYPE html>
<html>
<head>
 <title>Add New Monthly Payment</title>
 <!-- For Success alert that appears after deletion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 <style>
    body{
        font-family: cursive;
    }
    .container{
        border: 2px solid grey;
        border-radius: 10px; 
        margin-top: 30px;
    }
    h2{
        padding-top: 5px;
        padding-bottom: 5px;
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

    <h2 class="py-3" style="background-color:DodgerBlue; text-align:center; Font-size: 1.6rem; padding-bottom">
            Add New Monthly Payment Of Lease
    </h2>
    <div class="container my-5">

        <form class="px-3 py-3 row g-3" action="<?php echo e(route ('monthly_payment.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="col-12">
                <label for="paytype" class="form-label">Pay Date</label>
                <input type="text" class="form-control" id="paytype" name="paytype" placeholder ="Enter payment date">
            </div>

            <div class="col-12">
                <label for="end_date" class="form-label">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Pay Type</label>
                <input type="text" class="form-control" id="paytype" name="paytype" placeholder="Enter pay type">
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $leases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lease): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a class="dropdown-item" href="#" value="<?php echo e($lease->id); ?>"><?php echo e($lease->start_date); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
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


<?php /**PATH C:\xampp\htdocs\PMS\resources\views/monthly_payment/create.blade.php ENDPATH**/ ?>