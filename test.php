<?php
 $servername = "amusemgadmin.mysql.db";

// REPLACE with your Database name
$dbname = "amusemgadmin";
// REPLACE with Database user
$username = "amusemgadmin";
// REPLACE with Database user password
$password = "EdwardVictor2504";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, sensor, location, tempin, tempout, tempext, humidxt, reading_time FROM SensorData ORDER BY id DESC";
if ($result = $conn->query($sql)) {
while ($row = $result->fetch_assoc()) {
$row_id = $row["id"];
$row_sensor = $row["sensor"];
$row_location = $row["location"];
$row_tempin = $row["tempin"];
$row_tempout = $row["tempout"];
$row_tempext = $row["tempext"];
$row_humidxt = $row["humidxt"];
$row_reading_time = $row["reading_time"]
 $dataPoints = array(
    array("x" => 1451586600000 , "y" => array(30.840000, 27.480000)),
    array("x" => 1454265000000 , "y" => array(29.610001, 27.100000)),
    array("x" => 1456770600000 , "y" => array(32.049999, 29.309999)),
    array("x" => 1459449000000 , "y" => array(32.020000, 30.309999)),
    array("x" => 1462041000000 , "y" => array(30.990000, 29.059999)),
    array("x" => 1464719400000 , "y" => array(31.500000, 29.170000)),
    array("x" => 1467311400000 , "y" => array(33.000000, 31.080000)),
    array("x" => 1469989800000 , "y" => array(31.570000, 31.000000)),
    array("x" => 1472668200000 , "y" => array(31.450001, 29.400000)),
    array("x" => 1475260200000 , "y" => array(29.750000, 28.330000)),
    array("x" => 1477938600000 , "y" => array(31.490000, 28.190001)),
    array("x" => 1480530600000 , "y" => array(32.380001, 30.620001))
 );
 
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gestionnaire Patinoire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="150">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo_sm.png" alt="" height="150">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="150">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo_sm_dark.png" alt="" height="150">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">



                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                  

                   
                        

                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Temp. Ext.</h5>
                                                
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <!-- A COMPLETER -->
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
        
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Humidité</h5>
                                                
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <!-- A COMPLETER -->
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Temp. Entrée</h5>
                                                
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <!-- A COMPLETER -->
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Temp. Sortie</h5>
                                                
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                   <!-- A COMPLETER --> 
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                            </div>
                                        </div>

                                        <h4 class="header-title mb-1">[Moyenne des Flux]</h4>

                                        <div id="dash-campaigns-chart" class="apex-charts" data-colors="#ffbc00,#727cf5,#0acf97"></div>

                                        <div class="row text-center mt-2">
                                            <div class="col-md-4">
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
    
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                            </div>
                                        </div>
                                        
                                        <h4 class="header-title mb-3"></h4>

                                        <div class="chart-content-bg">
                                            <div class="row text-center">
                                                
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                        </div>

                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->


                       

                        
                                       
                          
                               

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © amusements.fr
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar="">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1">

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
       

                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>
        

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
            
                        <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- Apex js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>

        <!-- Todo js -->
        <script src="assets/js/ui/component.todo.js"></script>

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard-crm.js"></script>
        <!-- end demo js-->
    </body>
</html> 
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer1", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Evolution de la Température"
    },
    subtitles: [{
        text: "High and Low Prices - 2016"
    }],
    axisX: {
        valueFormatString: "MMM",
        intervalType: "month",
        interval: 1
    },
    axisY: {
        title: "Stock Price (in USD)",
        prefix: "$"
    },
    data: [{
        type: "rangeSplineArea",
        xValueType: "dateTime",
        xValueFormatString: "MMMM",
        yValueFormatString: "$#,##0.00",
        toolTipContent: "{x}<br><b>High:</b> {y[0]}<br><b>Low:</b> {y[0]}",
        dataPoints: <?php echo json_encode($dataPoints); ?>
    }]
});
 
chart.render();
 
}
</script>
</head>
<body>

</body>
<html>
