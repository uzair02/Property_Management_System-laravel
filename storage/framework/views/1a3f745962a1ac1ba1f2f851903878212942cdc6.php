<!DOCTYPE html>
<html lang="en">
<head>
<title>Display Rent</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300&family=Maven+Pro&family=Roboto+Slab:wght@300&family=Varela+Round&display=swap" rel="stylesheet">    
 

     <!-- Include DataTables CSS -->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

 <style>
    body{
        font-family: 'Archivo', sans-serif;
        font-family: 'Maven Pro', sans-serif;
        font-family: 'Roboto Slab', serif;
        font-family: 'Varela Round', sans-serif;
    }
</style>
</head>
<body>

    <!-- Alert for successful delete -->

    <?php if(session('success')): ?>
    <div class="alert alert-success" style="font-weight:bold; text-align:center; Font-size: 1.1rem;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <!-- ************************** -->
    
    <h2 class="py-3" style="background-color:#E2E2E2; text-align:center; Font-size: 1.6rem; padding-bottom">
      <strong>Display Rents</strong>  
    </h2>
    <div class="container my-5">
        <table class="px-5 table table-striped py-5" id="rent_table">
        <thead>
        <tr>
        <th scope="col">Rent Number</th>
        <th scope="col">Tenant Name</th>
        <th scope="col">Property Number</th>
        <th scope="col">Lease Number</th>
        <th scope="col">payment Number</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Rent Status</th>
        <th scope="col">Lease Term</th>
        <th scope="col">Edit/Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $rents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($rent->rent_num); ?></td>
                <td><?php echo e($rent->tenant->fullname); ?></td>
                <td><?php echo e($rent->property->pro_num); ?></td>
                <td><?php echo e($rent->property->lease->lease_num); ?></td>
                <td><?php echo e($rent->property->lease->payment->paynum); ?></td>
                <td><?php echo e($rent->pay_status); ?></td>
                <td><?php echo e($rent->rent_status); ?></td>
                <td><?php echo e($rent->lease_term); ?></td>
                <td><a class="btn" href="<?php echo e(URL::to('rent/edit', $rent->id+4436)); ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a class="btn" href="<?php echo e(URL::to('rent/delete', $rent->id)); ?>" onclick="return confirm ('Are you sure to delete this Payment <?php echo e($rent->id); ?> having Payment number <?php echo e($rent->id); ?>?')" ><i class="fa-regular fa-trash-can"></i></a></td>
            </t>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="container my-5">
        <a href="<?php echo e(url('layouts/dash')); ?>" class="btn btn-secondary" role="button" aria-disabled="true">< Go to Dashboard</a>
    </div>


    
    <script>
        $(document).ready(function() {
            $('#rent_table').DataTable();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PMS\resources\views/rent/read.blade.php ENDPATH**/ ?>