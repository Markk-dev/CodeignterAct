<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('styles.css'); ?>"> 
</head>
<body>
    <div class="container mt-5">
        <h1>Student Data</h1>
        <p><strong>First Name:</strong> <?= esc($fname) ?: 'No first name provided'; ?></p>
        <p><strong>Last Name:</strong> <?= esc($lname) ?: 'No last name provided'; ?></p>
        <p><strong>Address:</strong> <?= esc($address) ?: 'No address provided'; ?></p>
        <p><strong>Birthday:</strong> <?= esc($birthday) ?: 'No birthday provided'; ?></p>
        <p><strong>Gender:</strong> <?= esc($gender) ?: 'No gender specified'; ?></p>
        <p><strong>Mobile Phone:</strong> <?= esc($mobile) ?: 'No mobile number provided'; ?></p>
        <p><strong>Email:</strong> <?= esc($email) ?: 'No email provided'; ?></p>
        <p><strong>Status:</strong> <?= esc($status) ?: 'No status provided'; ?></p>
    </div>
</body>
</html>
