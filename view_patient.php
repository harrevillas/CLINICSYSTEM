<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff; 
        }
        .sidebar {
            background-color: #aad8e6;
        }
        .panel {
            border-radius: 10px;
        }
        .panel-heading {
            background-color: #0066cc;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .btn-primary {
            background-color: #0066cc;
            border: none;
        }
        .btn-primary:hover {
            background-color: #004b99;
        }
        .error, .text-danger {
            color: red;
        }
        .header {
        background-color: #20B2AA;
        color: white;
        padding: 20px;
        display: flex; 
        align-items: center; 
        justify-content: flex-start;
        }
        .logo {
        width: 70px; 
        height: auto;
        margin-right: 10px;
        }
        .header h1 {
            display: inline-block;
            margin-left: 20px;
        }
    </style>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "clinic_data";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection Failed: " . $connection->connect_error);
    }
?>
<div class="header d-flex align-items-center">
    <img src="images/UDMCLINIC_LOGO.png" alt="Logo" class="logo">
    <h1>UDM Clinic</h1>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-user"></span> View Patient</h4>
                </div>
                <div class="panel-body">
                    <?php if ($patient): ?>
                        <table class="table table-striped">
                            <tr>
                                <th>Last Name</th>
                                <td><?= htmlspecialchars($patient['LastName']) ?></td>
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td><?= htmlspecialchars($patient['FirstName']) ?></td>
                            </tr>
                            <tr>
                                <th>Middle Name</th>
                                <td><?= htmlspecialchars($patient['MiddleInitial']) ?></td>
                            </tr>
                            <tr>
                                <th>Sex</th>
                                <td><?= htmlspecialchars($patient['Sex']) ?></td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td><?= htmlspecialchars($patient['age']) ?></td>
                            </tr>
                            <tr>
                                <th>Civil Status</th>
                                <td><?= htmlspecialchars($patient['civil_status']) ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?= htmlspecialchars($patient['Address']) ?></td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td><?= htmlspecialchars($patient['ContactNumber']) ?></td>
                            </tr>
                            <tr>
                                <th>Emergency Number</th>
                                <td><?= htmlspecialchars($patient['emergency_number']) ?></td>
                            </tr>
                            <tr>
                                <th>Guardian</th>
                                <td><?= htmlspecialchars($patient['guardian']) ?></td>
                            </tr>
                            <tr>
                                <th>Height</th>
                                <td><?= htmlspecialchars($patient['height']) ?> cm</td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td><?= htmlspecialchars($patient['weight']) ?> kg</td>
                            </tr>
                        </table>
                    <?php else: ?>
                        <p class="text-danger">Patient not found or invalid ID.</p>
                    <?php endif; ?>
                    <a href="patient_list.php" class="btn btn-primary">Back to Patient List</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>