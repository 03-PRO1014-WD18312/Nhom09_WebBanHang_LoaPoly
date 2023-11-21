  <?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  if(!isset($_SESSION['Email'])){
    ?>
        <script>
            window.location="/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php?_LayoutWeb=Login";
        </script>
    <?php   
}
    include "../Assets/ConnectDB.php";  

    $sqlOrderDetail = "SELECT * FROM OrderDetail where StatusOrderDetail = 0"; 
    $dem = 0; 
    $resultOrderDetail = $conn->query($sqlOrderDetail); 
    while($rowOrder = $resultOrderDetail->fetch_assoc()) {
      $dem += 1; 
    }
    if(isset($_SESSION['Email'])){
        $Email = $_SESSION['Email']; 
        $sql = "SELECT * FROM User Where Email = '$Email'"; 
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) {
                if($row['Role'] != 0){
                $_SESSION['ID'] = $row['UserID'];
                header('location:/Nhom09_WebBanHang_LoaPoly/WebPage/_LayoutWebPage.php');
                }else{
                    $_SESSION['ID'] = $row['UserID'];
                }
            }
        }
    }

  ?>
   <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Dashboard - SB Admin</title>
            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="css/styles.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        </head>
        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-3" href="#">Admin</a>
                <!-- Sidebar Toggle-->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <!-- Navbar Search-->
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">
                                <?php
                                  if(isset($_SESSION['Email'])){
                                      echo $_SESSION['Email'];
                                  } 
                               ?></a></li>
                            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="Nhom09_WebBanHang_LoaPoly/ProcessLogoutAD.php?id=0">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <div class="sb-sidenav-menu-heading">Interface</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                   
                                </a>
                                                 
                                        <a class="nav-link" href="/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=ProductList">Product</a>
                                        <a class="nav-link" href="/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=listCate">Category</a>
                                        <a class="nav-link" href="/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=Order">Order</a>
                                        <a id="ProcessOrder" class="nav-link" href="Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=ProcessOrder">Customer Order(<span style="color:red;font-weight:bold" id="quantityOR"><?php echo $dem ?></span>)</a>
                                      
                                        <a class="nav-link" href="/Nhom09_WebBanHang_LoaPoly/myAdmin/_LayoutAdmin.php?myLayout=myComment">Comment</a>
                                        
                             
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                   
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                            Authentication
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                        
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                            Error
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="401.html">401 Page</a>
                                                <a class="nav-link" href="404.html">404 Page</a>
                                                <a class="nav-link" href="500.html">500 Page</a>
                                            </nav>
                                        </div>
                                    </nav>
                                </div>
                                <div class="sb-sidenav-menu-heading">Addons</div>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Charts
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Tables
                                </a>
                            </div>
                        </div>
                        <!-- <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            Start Bootstrap
                        </div> -->
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    
                    <?php   
                        if(isset($_GET["myLayout"])){
                            switch($_GET["myLayout"]){
                                case 'ProductList' :include_once './ProductList.php';
                                break;
                                case 'ProductCreate':include_once './ProductCreate.php';
                                break; 
                                case 'ProductUpdate':include_once './ProductUpdate.php';
                                break;
                                case 'ProductDelete':include_once './ProductDelete.php';
                                break;
                                case 'CategoryCreate':include_once './CategoryCreate.php';
                                break;
                                case 'CategoryUpdate':include_once './CategoryUpdate.php';
                                break;
                                case 'listCate':include_once './CategoryList.php';
                                break;
                                case 'CategoryDelete':include_once './CategoryDelete.php';
                                break;
                                case'Logout':include_once './Logout.php';
                                break;
                                case 'OrderList':include_once './OrderList.php';
                                break; 
                                case 'ProcessOrder':include_once './ProcessOrder.php'; 
                                break;
                                case 'myComment':include_once './CommentList.php'; 
                                break;
                                case 'Order':include_once './Order.php'; 
                                break;
                            }
                        }else{
                            include_once './ProductList.php'; 
                        }          
                    
                    ?>

                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="../Assets/Admin/js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="../Assets/Admin/assets/demo/chart-area-demo.js"></script>
            <script src="../Assets/Admin/assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
        </body>
    </html>
        

 