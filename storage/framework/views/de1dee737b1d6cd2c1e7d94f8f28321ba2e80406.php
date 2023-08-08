<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300&family=Maven+Pro&family=Roboto+Slab:wght@300&family=Varela+Round&display=swap" rel="stylesheet">    
 
    <style>
        body {
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
            padding-top: 7px;
            padding-bottom: 10px;
            text-decoration: underline;
            text-decoration-color: #007bff;
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

        /* Additional Styles */

        .heading {
            text-align: center;
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

<div class="container">
    <h2 class="heading">Contact Us</h2>

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <form action="<?php echo e(route('mail.send_mail')); ?>" method="post" role="form" class="php-email-form"  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row my-3">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" value="xxxxxx@gmail.com" required>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-6 form-group">
                        <input type="hidden" class="form-control" name="cc" id="cc" placeholder="CC">
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="hidden" class="form-control" name="bcc" id="bcc" placeholder="BCC">
                    </div>
                </div>
                <div class="form-group my-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group my-3">
                    <div class="input-group">
                        <input type="file" class="form-control" name="file" id="file">
                    </div>
                </div>
                <div class="form-group my-3">
                    <textarea class="form-control" name="details" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="text-center my-3">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PMS\resources\views/mail/contact.blade.php ENDPATH**/ ?>