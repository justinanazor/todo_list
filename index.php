<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList | Home</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
    <!-- <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap local css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap online js  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body>
     <!-- ... Your existing HTML content ... -->

    <!-- Display error messages if they exist -->
    <?php
    session_start();
    if (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger mt-3">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']); // Clear the error message
    }
    ?>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-2 mt-4"><a href="#" class="teru_to_do">Teru To-Do</a></div>
                <div class="col-md-10 text-end mt-5">
                    <span class="contact_sales">Contact Sales</span>
                    <button class="btn btn-success my-2 my-sm-0" id="login_btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">log in</button>
                    <button class="btn btn-light my-2 my-sm-0" id="signup_btn" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">sign up</button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="headline">One app to replace them all.</p>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-1"></div>

                <div class="col-md-4">
                    <p class="about">About us</p>
                    <p class="about_txt">Lorem ipsum dolor sit amet consectetur. Dictum vitae augue tellus mattis cursus
                        porttitor nisl praesent. Cursus cras est pellentesque phasellus egestas massa. Pharetra ut
                        sociis erat magnis nisi justo nunc lectus egestas.
                    </p>
                    <a class="btn btn-success my-2 my-sm-0" id="get_started" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>
                    <ul class="txt">
                        <li>FREE FOREVER.</li>
                        <li>NO CREDIT CARD</li>
                    </ul>
                    <span class="txt1">All your work in one place:</span>
                </div>

                <div class="col-md-1"></div>
                <div class="col-md-1"></div>

                <div class="col-md-5 mt-4">
                    <a class="btn btn-light my-2 my-sm-0" id="task" data-bs-toggle="modal" data-bs-target="#exampleModal">Task<span class="badge"><svg width="19" height="18"
                                viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVG" clip-path="url(#clip0_1_625)">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.565 0H4.05005C2.98918 0 1.97177 0.421427 1.22162 1.17157C0.471476 1.92172 0.0500488 2.93913 0.0500488 4L0.0500488 14C0.0500488 15.0609 0.471476 16.0783 1.22162 16.8284C1.97177 17.5786 2.98918 18 4.05005 18H14.05C15.1109 18 16.1283 17.5786 16.8785 16.8284C17.6286 16.0783 18.05 15.0609 18.05 14V10.485L16.05 12.485V14C16.05 14.5304 15.8393 15.0391 15.4643 15.4142C15.0892 15.7893 14.5805 16 14.05 16H4.05005C3.51962 16 3.01091 15.7893 2.63584 15.4142C2.26076 15.0391 2.05005 14.5304 2.05005 14V4C2.05005 3.46957 2.26076 2.96086 2.63584 2.58579C3.01091 2.21071 3.51962 2 4.05005 2H9.56505L11.565 0Z"
                                        fill="#7B68EE" />
                                    <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.7571 2.29303C17.9446 2.48056 18.0499 2.73487 18.0499 3.00003C18.0499 3.26519 17.9446 3.5195 17.7571 3.70703L9.75709 11.707C9.56956 11.8945 9.31525 11.9998 9.05009 11.9998C8.78493 11.9998 8.53062 11.8945 8.34309 11.707L4.34309 7.70703C4.16093 7.51843 4.06014 7.26583 4.06242 7.00363C4.06469 6.74143 4.16986 6.49062 4.35527 6.30521C4.54068 6.1198 4.79149 6.01463 5.05369 6.01236C5.31589 6.01008 5.56849 6.11087 5.75709 6.29303L9.05009 9.58603L16.3431 2.29303C16.5306 2.10556 16.7849 2.00024 17.0501 2.00024C17.3153 2.00024 17.5696 2.10556 17.7571 2.29303Z"
                                        fill="#7B68EE" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_625">
                                        <rect width="18" height="18" fill="white" transform="translate(0.0500488)" />
                                    </clipPath>
                                </defs>
                            </svg></span></a>
                    <button class="btn btn-light my-2 my-sm-0" id="dashboard" data-bs-toggle="modal" data-bs-target="#exampleModal">Dashboard <span class="badge"><svg
                                width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V8C0 8.53043 0.210714 9.03914 0.585786 9.41421C0.960859 9.78929 1.46957 10 2 10H8C8.53043 10 9.03914 9.78929 9.41421 9.41421C9.78929 9.03914 10 8.53043 10 8V2C10 1.46957 9.78929 0.960859 9.41421 0.585786C9.03914 0.210714 8.53043 0 8 0H2ZM2 8V2H8V8H2ZM2 11C1.46957 11 0.960859 11.2107 0.585786 11.5858C0.210714 11.9609 0 12.4696 0 13V16C0 16.5304 0.210714 17.0391 0.585786 17.4142C0.960859 17.7893 1.46957 18 2 18H5C5.53043 18 6.03914 17.7893 6.41421 17.4142C6.78929 17.0391 7 16.5304 7 16V13C7 12.4696 6.78929 11.9609 6.41421 11.5858C6.03914 11.2107 5.53043 11 5 11H2ZM2 16V13H5V16H2ZM10 11C9.46957 11 8.96086 11.2107 8.58579 11.5858C8.21071 11.9609 8 12.4696 8 13V16C8 16.5304 8.21071 17.0391 8.58579 17.4142C8.96086 17.7893 9.46957 18 10 18H16C16.5304 18 17.0391 17.7893 17.4142 17.4142C17.7893 17.0391 18 16.5304 18 16V13C18 12.4696 17.7893 11.9609 17.4142 11.5858C17.0391 11.2107 16.5304 11 16 11H10ZM10 16V13H16V16H10ZM13 0C12.4696 0 11.9609 0.210714 11.5858 0.585786C11.2107 0.960859 11 1.46957 11 2V8C11 8.53043 11.2107 9.03914 11.5858 9.41421C11.9609 9.78929 12.4696 10 13 10H16C16.5304 10 17.0391 9.78929 17.4142 9.41421C17.7893 9.03914 18 8.53043 18 8V2C18 1.46957 17.7893 0.960859 17.4142 0.585786C17.0391 0.210714 16.5304 0 16 0H13ZM13 8V2H16V8H13Z"
                                    fill="#49CCF9" />
                            </svg></span></button>
                </div>
            </div>
        </div>
    </main>
    <?php include_once "signup.php" ?>
    <?php include_once "signin.php" ?>
  

<footer>
    <?php include_once "footer.php" ?>
</footer>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap local Js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap online Js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"> -->
    </script>
    <!-- javascript local -->
    <script src="javascript/js.js"></script>
</body>

</html>