<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 05-Mar-19
 * Time: 6:42 PM
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <script>

    </script>
</head>

<body>
<div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Hello, <?php echo $_SESSION['userName'];?> !</span>
                        <img class="img-xs rounded-circle" src="https://cdn1.iconfinder.com/data/icons/business-users/512/circle-512.png" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown" onclick="logout()">
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <img src="https://cdn1.iconfinder.com/data/icons/business-users/512/circle-512.png" alt="profile image">
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name"><?php echo $_SESSION['userName'];?></p>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="netbanking.php">
                        <i class="menu-icon mdi mdi-bank"></i>
                        <span class="menu-title">NetBanking</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="deposit.php">
                        <i class="menu-icon mdi mdi-chart-bar"></i>
                        <span class="menu-title">Deposit</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Transaction</h4>
                            <p class="card-description">
                                Transfer Amount to Another Account
                            </p>
                            <form method="get" action="submit.php" autocomplete="off">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-account text-white"></i>
                            </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Account Holder Name" aria-label="Username" name="username" aria-describedby="colored-addon1">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi mdi-account-card-details text-white"></i>
                            </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Account Number" aria-label="Username" name="accountnumber" aria-describedby="colored-addon2">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Description" aria-label="Username" name="desc" aria-describedby="colored-addon3">
                                    <div class="input-group-append bg-primary border-primary">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-note text-white"></i>
                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend bg-primary border-primary">
                                        <span class="input-group-text bg-transparent text-white">&#8377;</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Amount for transaction" name="amount" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append bg-primary border-primary">
                                        <span class="input-group-text bg-transparent text-white">.00</span>
                                    </div>
                                </div>
                            </div>
                                <br>
                                <input type="submit" class="btn btn-warning btn-fw btn-lg" name="transfer" value="Transfer">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>
