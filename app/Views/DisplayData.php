<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('studentData.css'); ?>"> 
</head>
<body class="bg-light">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-lg" style="max-width: 500px; border-radius: 15px; padding: 20px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4" style="font-weight: bold; color: #1877f2;">Student Data</h2>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Student ID:</strong></td>
                            <td><?= esc($studID) ?: 'No Student ID provided'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>First Name:</strong></td>
                            <td><?= esc($fname) ?: 'No first name provided'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Last Name:</strong></td>
                            <td><?= esc($lname) ?: 'No last name provided'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Address:</strong></td>
                            <td><?= esc($address) ?: 'No address provided'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Birthday:</strong></td>
                            <td><?= esc($birthday) ?: 'No birthday provided'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Gender:</strong></td>
                            <td><?= esc($gender) ?: 'No gender specified'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Mobile Phone:</strong></td>
                            <td><?= esc($mobile) ?: 'No mobile number provided'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td><?= esc($email) ?: 'No email provided'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Status:</strong></td>
                            <td><?= esc($status) ?: 'No status provided'; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>