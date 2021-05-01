<?php


    if(isset($_POST['update'])){
        $n=$_POST["name"];
        $s=$_POST["description"];
        $u=$_POST["university"];
        $d=$_POST['date'];
        
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "base1";
        $id=$_GET['edit'];
            
        $connect = mysqli_connect($hostname,$username,$password,$databaseName);
            
        
        

        
               
                $req1= "UPDATE  events SET name='$n',description='$s',university='$u',date='$d' where idv='$id' "   ;
                $res = mysqli_query($connect,$req1)  ; 
                header("location: eventslist.php"); 
        
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
        <title>Dashboard</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
    
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">TuniEvents</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                    
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="dashboard.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div>
                            
                            
                            
                            </div>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
        
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="users.html">Users </a>
                                    <a class="nav-link" href="request.html">Requested Events  </a>
                                    <a class="nav-link" href="eventsList.html">Events List  </a>
                                 </nav>
                            </div>
                        
                        
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Previous Events
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        admin name+logo
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Events List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Events List</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Events List
                            </div>



                    
    
   
    <div class="row justifiy-content-center">
    <form  method="POST">
    <table class="table">
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Name</th>
                <th>Description</th>
                <th>University</th>
                <th>Date</th>
                
                <th>submit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="text" class="form-control" name="identifiant" id="identifiant" placeholder="<?php echo $_GET['edit']; ?>" required readonly></td>
                <td><input type="text" class="form-control" name="name" id="name"  value="" required ></td>
                <td><input type="text" class="form-control" name="description" id="description"  aria-describedby="inputGroupPrepend" required ></td>
                <td><input type="text" class="form-control" name="university" id="university" required></td>
                <td><input type="date" class="form-control" name="date" id="date"  required></td>
                <td><button class="btn btn-info"  name="update"  id="sub" type="submit"  >update</button></td> 
                
            </tr>
          
        </tbody>
    </table>
    </form>
    </div>

    </body> 
    </html>
