<!DOCTYPE html>
<html lang="en">
<head>
    <title>MAIL PAGE</title>
</head>
<body>
    <h4>Details</h4>

    <p>Sender: <?php echo e($details['sender_name']); ?></p>
    <p>Message:<?php echo e($details['body']); ?></p>
    <br>
    <p>Attached File: <a href="<?php echo e($message->embed($details['file_path'])); ?>"><?php echo e($details['file_name']); ?></a></p>
    <br>
    <p>Regards:<br>
    Chemsa PMS PVT (LTD)
    </p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PMS\resources\views/mail/mail.blade.php ENDPATH**/ ?>