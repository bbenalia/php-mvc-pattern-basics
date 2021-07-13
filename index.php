<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

require_once "config/constants.php";

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.

// $employees = getAllEmployees();

if (!isset($_GET['controller'])) {
    require_once VIEWS . "/main/main.php";
    exit;
}

if ($_GET['controller'] == 'employees') {
    require_once CONTROLLERS . "/employeeController.php";
    exit;
}