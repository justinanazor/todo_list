<?php
session_start();

// Check if the user is not logged in (no active session)
if (!isset($_SESSION["username"])) {
    // Redirect the user to the login page
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList | Home</title>
    <!-- Bootstrap local css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
    <link rel="stylesheet" href="css/homecss.css">
    <!-- Bootstrap local css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap online css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="home_body">

    <main class="to_do_content mt-4">
        <div class="head mt-3">
            <span class="dash_logo mx-3">Teru To-Do</span>
            <a href="logout.php" class="btn btn-info mx-3">logout</a>
        </div>
        <div class="text-center mt-5">
            <span class="wellcome mx-3">Welcome Full name</span>
        </div>
        <div class="todo_app">
            <h4>To-Do List <img src="image/icon.png"></h4>
            <div class="search mb-3">
                <input type="text" id="input-box" placeholder="Create task">
                <button id="create-btn">Create</button>
            </div>
            <ul id="list-container">
                <li class="checked">task 1</li>
                <li>task 2</li>
            </ul>
        </div>

    </main>


    <!-- Bootstrap local Js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap online Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- javascript local -->
    <script src="javascript/homejs.js"></script>
</body>

</html>