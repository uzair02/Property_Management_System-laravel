<!DOCTYPE html>
<html>
<head>
 <title>search Lease</title>
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

    <?php if(session('error')): ?>
    <div class="alert alert-danger" style="font-weight:bold; text-align:center; Font-size: 1.1rem;"><?php echo e(session('error')); ?></div>
    <?php endif; ?>
    <!-- END -->

    <h2 class="py-3" style="background-color:#808080; font-weight:bold; text-align:center; Font-size: 1.6rem; padding-bottom">
            search Lease
    </h2>
    <!-- Form for Update operation -->
    <div class="container my-5">
    
        <form class="px-3 py-3 row g-3" action="<?php echo e(route ('lease.storeSearchud')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="col-12">
                <label for="lease_num" class="form-label">Lease Number</label>
                <input type="text" class="form-control" id="lease_num" name="lease_num" placeholder ="0123">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Search for update</button>
            </div>
        </form>
    </div>

    <!-- Form for Delete operation -->
    <div class="container my-5">
    <form class="px-3 py-3 row g-3" action="<?php echo e(route ('lease.sDelete')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="col-12">
            <label for="lease_num" class="form-label">Lease Number</label>
            <input type="text" class="form-control" id="lease_num" name="lease_num" placeholder ="0123">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\PMS\resources\views/lease/searchud.blade.php ENDPATH**/ ?>