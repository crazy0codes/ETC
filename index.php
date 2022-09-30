<?php
    include 'submit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><?php echo $details['name'] ?></a>
            <button class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><button class="btn btn-primary" onclick="logout()">Logout
                    </button>
                </ul>
            </div>
        </div>
    </nav>
    <br/>
    <div class="container-lg text-center">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <td>Admission</td>
                <td>Physics</td>
                <td>Chemistry</td>
            </tr>
        </thead>
        <tr>
            <td><?php echo $details['admission'] ?></td>
            <td><?php echo $details['phy'] ?></td>
            <td><?php echo $details['maths1'] ?></td>
        </tr>
    </table>
    </div>
    <script src="/dashboard/htdocs/Madhan_ETC/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
