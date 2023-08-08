<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300&family=Maven+Pro&family=Roboto+Slab:wght@300&family=Varela+Round&display=swap" rel="stylesheet">    

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.7);
            background-image: url(<?php echo e(asset("assets/img/bg.jpg")); ?>);
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        .description {
            margin-top: 20px;
        }

        .name {
            font-weight: bold;
            color: #333;
        }

        .email {
            color: #666;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .avatar img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="avatar">
        <img src="<?php echo e(asset('assets/auth/images/others/admin.jpg')); ?>" alt="User Avatar">
    </div>
    <h1>Welcome, <span class="name"><?php echo e(Auth::user()->name); ?></span>!</h1>
    <p class="email">Email: <?php echo e(Auth::user()->email); ?></p>
    <div class="description">
        <p>This is your user profile page. You can update your personal information and manage your account settings here.</p>
        <p>Feel free to explore the features and customize your profile to make it truly yours!</p>
    </div>
        <a href="<?php echo e(url('layouts/dash')); ?>" class="btn btn-secondary" role="button" aria-disabled="true">< Go to Dashboard</a>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PMS\resources\views/user/profile.blade.php ENDPATH**/ ?>