<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bank DashBord</title>
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
    <script
            src="http://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, <?php echo $_SESSION['userName']?> !</span>
              <img class="img-xs rounded-circle" src="https://cdn1.iconfinder.com/data/icons/business-users/512/circle-512.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item" onclick="logout()">
                <div id = "log_out">
                  Sign Out
                </div>
              </a>
<!--                <script>
                </script>-->
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
                  <p class="profile-name"><?php echo $_SESSION['userName']?></p>
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
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cash-multiple text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Balance</p>
                      <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0"><div id="bal"></div></h3>
                      </div>
                    </div>
                  </div>
<!--              <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
                  </p>-->
                </div>
              </div>
            </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                      <div class="card-body">
                          <div class="clearfix">
                              <div class="float-left">
                                  <i class="mdi mdi-account-card-details text-warning icon-lg"></i>
                              </div>
                              <div class="float-right">
                                  <p class="mb-0 text-right">Account Number</p>
                                  <div class="fluid-container">
                                      <h3 class="font-weight-medium text-right mb-0"><?php echo $_SESSION['accountNumber'];?></h3>
                                  </div>
                              </div>
                          </div>
                        <!--  <p class="text-muted mt-3 mb-0">
                              <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
                          </p>-->
                      </div>
                  </div>
              </div>
          </div>
            <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Credit History</h4>
                  <div class="table-responsive">
                    <table class="table table-{color}">
                      <thead>
                        <tr>
                          <th>
                            Transaction ID
                          </th>
                          <th>
                            Account Holder name
                          </th>
                          <th>
                            Account number
                          </th>
                            <th>
                                Description
                            </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Transaction Date
                          </th>
                        </tr>
                      </thead>
                      <tbody id="credit">
                          <!--<td class="font-weight-medium">
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>

                          </td>
                          <td>
                            &#x20b9; 77.99
                          </td>
                          <td>
                          </td>-->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <script>
                $("document").ready(function (){
                    let accnum = <?php echo $_SESSION['accountNumber']?>;
                    console.log("Ready Steate");
                    $.ajax({
                        url : "\submit.php",
                        type : "get",
                        dataType : "json",
                        data : {acc_det_num :  accnum},
                        success : function (data) {
                            console.log(data);
                            console.log(data['accountbalance']);
                            let a =0;
                            a = data['accountbalance'];
                            $("#bal").html("&#8377;"+ a);
                            /*$.each(data, function (index,element) {
                                console.log(element['accountbalance']);
                                $("#bal").html(element['accountbalance']);
                            });*/
                        },
                        error : function (r,s,e) {
                            console.log("Request Failed"+e);
                        }
                    });
                $.ajax({
                    url : "\submit.php",
                    type : "get",
                   data : {credit_accnum : accnum},
                    dataType : "json",
                    success : function (data) {
                        $.each(data,function (index,element){
                            $("#credit").append("<tr><td class=\"font-weight-medium\">"+element['transaction_id']+"</td><td>"+element['depositer_name']+"</td><td>"+element['deposit_account_no']+"</td><td>"+element['transaction_desc']+"</td><td>&#x20b9; "+element['deposit_amount']+"</td><td>"+element['transaction_date']+"</td></tr>");
                        });
                    },
                    error : function () {
                        alert("Error in sending Data1");
                    }
                });
                $.ajax({
                        url : "\submit.php",
                        type : "get",
                        data : {debit_accnum : accnum},
                        dataType : "json",
                        success : function (data) {
                            $.each(data,function (index,element){
                                $("#debit").append("<tr><td class=\"font-weight-medium\">"+element['transaction_id']+"</td><td>"+element['depositer_name']+"</td><td>"+element['deposit_account_no']+"</td><td>"+element['transaction_desc']+"</td><td>&#x20b9; "+element['deposit_amount']+"</td><td>"+element['transaction_date']+"</td></tr>");
                            })
                        },
                        error : function (xmlreq,status,error) {
                            alert("Error in sending Data2");
                            console.log(error);
                        }
                    });
                });
            </script>
            <div class="row">
                <div class="col-lg-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Debit History</h4>
                            <div class="table-responsive">
                                <table class="table table-{color}">
                                    <thead>
                                    <tr>
                                        <th>
                                            Transaction ID
                                        </th>
                                        <th>
                                            Account Holder name
                                        </th>
                                        <th>
                                            Account number
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            Transaction Date
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="debit">
<!--                                    <tr>
                                        <td class="font-weight-medium">
                                            1
                                        </td>
                                        <td>
                                            Herman Beck
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            &#x20b9; 77.99
                                        </td>
                                        <td>
                                        </td>
                                    </tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
  <script>

  </script>
<!--  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
-->  <!-- endinject -->
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