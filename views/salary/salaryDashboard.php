<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Employees</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="?">MVC Basics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=employees&action=getAllEmployees">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?controller=salaries&action=getAllEmployees">Salaries</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="px-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">emp_no</th>
                    <th scope="col">first_name</th>
                    <th scope="col">last_name</th>
                    <th scope="col">salary</th>
                    <!-- <th scope="col">from_date</th>
                    <th scope="col">to_date</th> -->
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salaryEmployees as $salaryEmployee) : ?>
                    <tr>
                        <th scope="row"><?= $salaryEmployee['emp_no'] ?></th>
                        <td><?= $salaryEmployee['first_name'] ?></td>
                        <td><?= $salaryEmployee['last_name'] ?></td>
                        <td><?= $salaryEmployee['salary'] ?></td>
                        <!-- <td><?= $salaryEmployee['from_date'] ?></td>
                        <td><?= $salaryEmployee['to_date'] ?></td> -->
                        <td>
                            <?php
                            $link = "?controller=salaries&action=getEmployeeSalary&id=" . $salaryEmployee['emp_no'];
                            ?>
                            <a class="btn btn-primary btn-sm" href="<?= $link ?>">Details</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>

</html>