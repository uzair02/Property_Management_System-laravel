<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo e($data->file); ?></title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: #f2f2f2;
    }
    
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: #f2f2f2;
      margin-top: 30px;
      margin-bottom: 50px;
    }
    
    .iframe-wrapper {
      width: 90%;
      max-width: 1300px;
      border-radius: 6px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      background-color: #ffffff; /* Change to a consistent background color */
    }
    
    .iframe-wrapper iframe {
      width: 100%;
      height: 80vh;
      border: none;
    }
    
    .back-link {
      margin-top: 20px;
      color: #ffffff; /* Change button text color to white */
      text-decoration: none;
      font-weight: bold;
      background-color: #333333; /* Change button background color */
      padding: 12px 24px; /* Increase button padding for more prominent appearance */
      border-radius: 4px;
      transition: background-color 0.3s ease; /* Add transition for smoother hover effect */
    }
    
    .back-link:hover {
      background-color: #555555; /* Change button background color on hover */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="iframe-wrapper">
      <iframe src="<?php echo e(asset('uploads/' . $data->file)); ?>" frameborder="0"></iframe>
    </div>
    <a class="back-link" href="<?php echo e(route('file.show_file')); ?>">&larr; BACK</a>
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PMS\resources\views/file/view_file.blade.php ENDPATH**/ ?>