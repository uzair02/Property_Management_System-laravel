<!DOCTYPE html>
<html>
<head>
 <title>Registeration</title>
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
    legend{
        text-align: center;
    }
    .container{
        border: 2px solid #d3d3d3;
        border-radius: 10px; 
        margin-top: 30px;
        padding-bottom: 20px;
        width: 37%;
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

        <form class="px-3 py-3 row g-3" action="<?php echo e(route ('user.store')); ?>" method="post">
        <legend><strong>Sign Up</strong></legend>
        <hr style="border-top: dashed 1px; margin-bottom: 1rem; text-align: center;">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name='name' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name='email' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name='password'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\PMS\resources\views/user/register.blade.php ENDPATH**/ ?>