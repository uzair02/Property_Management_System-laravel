<!DOCTYPE html>
<html lang="en">
<head>
<title>Display Files</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
</style>
</head>
<body>

    <!-- Alert for successful delete -->

    <?php if(session('success')): ?>
    <div class="alert alert-success" style="font-weight:bold; text-align:center; Font-size: 1.1rem;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <!-- ************************** -->
    
    <h2 class="py-3" style="background-color:#E2E2E2; text-align:center; Font-size: 1.6rem; padding-bottom">
        <strong>Display Files</strong>
    </h2>
    <div class="container my-5">
        <table class="px-5 table table-striped">
        <thead>
        <tr>
        <th scope="col">File Name</th>
        <th scope="col">View</th>
        <th scope="col">Download</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($file->file); ?></td>
                <td><a class="btn" href="<?php echo e(URL::to('file/view_file', $file->id)); ?>"><i class="fa-solid fa-expand"></i></a></td>
                <td><a class="btn" href="<?php echo e(URL::to('file/download_file', $file->file)); ?>"><i class="fa-solid fa-download"></i></a></td>
            </t>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="container my-5">
        <a href="<?php echo e(url('layouts/dash')); ?>" class="btn btn-secondary" role="button" aria-disabled="true">< Go to Dashboard</a>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PMS\resources\views/file/show_file.blade.php ENDPATH**/ ?>