<?php
include('session.php');


$servername = "localhost";
$username = "root";
$password = "";
$databasename = "book_form";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


// SQL QUERY
$query = "SELECT * FROM `book_form`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Oasis Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./assets/css/admin.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <!-- <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a> -->
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="Admin-table.php">
                    <i class="bi bi-grid"></i>
                    <span>Users</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="Admin-table-travels.php">
                    <i class="bi bi-grid"></i>
                    <span>Travel Data</span>
                </a>
            </li>



            <!-- End Dashboard Nav -->

            <form action="logout.php" method="post">
            <li class="nav-item">
                <button type="submit" name="submit">
                <a class="nav-link collapsed">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
                </button>
            </li>
            </form>
            <!-- End Login Page Nav -->
        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Booking Registration Table</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Tables</li>
                    <!-- <li class="breadcrumb-item active">General</li> -->
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <!-- <p><a href="https://getbootstrap.com/docs/5.0/utilities/borders/#border-color" target="_blank">Border color utilities</a> can be added to change colors:</p> -->

                    <!-- Primary Color Bordered Table -->
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">id </th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">phone </th>
                                <th scope="col">address</th>
                                <th scope="col">location</th>
                                <th scope="col">guests</th>
                                <th scope="col">arrivals</th>
                                <th scope="col">leaving</th>
                                <th scope="col">Delete Travel</th>
                                <!-- <th scope="col">Time Stamp</th> -->
                            </tr>
                        </thead>
                       
                    
                        
                        <tbody>
                            <?php
                            if ($result->num_rows > 0)
                            {
                                // OUTPUT DATA OF EACH ROW
                                while($rows = $result->fetch_assoc())
                                {
                            ?>
   
                            <tr>
                                <td><?php echo $rows['id'];?></td>
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['email'];?></td>
                                <td><?php echo $rows['phone'];?></td>
                                <td><?php echo $rows['address'];?></td>
                                <td><?php echo $rows['location'];?></td>
                                <td><?php echo $rows['guests'];?></td>
                                <td><?php echo $rows['arrivals'];?></td>
                                <td><?php echo $rows['leaving'];?></td>
                                <td><input type="button" value="Delete User" name="delete"></td>
                            </tr>
                           
                        </tbody>
                        <?php
                        }
                        	}
                        	else {
                        		echo "0 results";
                        	}
                        
                        $conn->close();
                        ?>
            
                    </table>
                    <!-- End Primary Color Bordered Table -->

                </div>
            </div>


            </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>