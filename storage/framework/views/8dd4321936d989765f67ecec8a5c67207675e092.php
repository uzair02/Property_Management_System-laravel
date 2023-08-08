<!DOCTYPE html>
<html>
<head>
 <title>Add New City</title>
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
            Add New City
    </h2>
    <div class="container my-5">
    
        <form class="px-3 py-3 row g-3" action="<?php echo e(route ('city.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="col-12">
                <label for="name" class="form-label">City Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder ="City Name">
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


<?php /**PATH C:\xampp\htdocs\PMS\resources\views/city/create.blade.php ENDPATH**/ ?>