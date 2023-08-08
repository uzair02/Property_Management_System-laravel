<!DOCTYPE html>
<html>
<head>
 <title>Update Monthly Payment</title>
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
    .container{
        border: 2px solid grey;
        border-radius: 10px; 
        margin-top: 30px;
        width:70%;
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
    <div class="container my-5">

        <form class="px-3 py-3 row g-3" action="<?php echo e(route ('monthlypayment.update', $payments->id)); ?>" method="post">
            <legend style="text-align: center;"><strong>Update Monthly Payment Of Lease</strong></legend>
            <hr style="border-top: dashed 1px; margin-bottom: 1rem;">
            <?php echo csrf_field(); ?>
            <div class="col-12">
                <label for="id" class="form-label">Payment Number</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo e($payments->id); ?>" readonly>
            </div>
            <div class="col-12">
                <label for="paynum" class="form-label">Payment Number</label>
                <input type="text" class="form-control" id="paynum" name="paynum" value="<?php echo e($payments->paynum); ?>">
            </div>
            <div class="col-12">
                <label for="paydate" class="form-label">Pay Date</label>
                <input type="text" class="form-control" id="paydate" name="paydate" value="<?php echo e($payments->paydate); ?>">
            </div>
            <div class="col-12">
                <label for="end_date" class="form-label">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" value="<?php echo e($payments->amount); ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Pay Type</label>
                <input type="text" class="form-control" id="paytype" name="paytype" value="<?php echo e($payments->paytype); ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Lease:</label>
                <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="lease">
                    <?php $__currentLoopData = $leases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lease): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($lease->id); ?>"><?php echo e($lease->lease_num); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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


<?php /**PATH C:\xampp\htdocs\PMS\resources\views/monthlypayment/update.blade.php ENDPATH**/ ?>