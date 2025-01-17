<?php


function getAll()
{
    $conn = db_connect();
    $sql = "
    SELECT 
    E.emp_no,E.first_name,E.last_name,S.salary,S.from_date,S.to_date
    FROM employees E
    JOIN salaries S
    ON E.emp_no = S.emp_no";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
    }

    mysqli_close($conn);
    return $employees;
}

function getById($id)
{
    $conn = db_connect();
    $sql = "
    SELECT 
    E.emp_no,E.first_name,E.last_name,S.salary,S.from_date,S.to_date
    FROM employees E
    JOIN salaries S
    ON E.emp_no = S.emp_no
    WHERE E.emp_no=$id";

    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row;
    }

    $err = mysqli_error($conn);
    mysqli_close($conn);
    return $err;
}

function db_connect()
{
    require_once('config/db.php');
    $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
