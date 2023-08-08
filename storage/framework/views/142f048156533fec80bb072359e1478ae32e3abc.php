<!DOCTYPE html>
<html lang="en">
<head>
<title>Display City</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    body{
        font-family: cursive;
    }
</style>
</head>
<body>
    <!-- Alert when item is deleted successsfully -->
    <?php if(session('success')): ?>
    <div class="alert alert-success" style="font-weight:bold; text-align:center; Font-size: 1.1rem;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <h2 class="py-3" style="background-color:#d4d4d4; text-align:center; Font-size: 1.6rem; padding-bottom">
        Display All Cities
    </h2>
    <div class="container my-5">
        <table class="px-5 table table-striped">
        <thead>
        <tr>
        <th scope="col">City</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cities->name); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PMS\resources\views/city/read.blade.php ENDPATH**/ ?>