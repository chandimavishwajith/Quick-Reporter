<!DOCTYPE html>
<html lang="en">
<head>

     <title>Quick Reporter | Report</title>
<!-- -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS --> 
     <link rel="stylesheet" href="css/style.css">
     <style>
     .overlay {
          background: #00F260;
          background: -webkit-linear-gradient(to right, #aa4b6b, #6b6b83,#3b8d99);
          background: linear-gradient(to right, #aa4b6b, #6b6b83,#3b8d99);
          opacity: 0.5;
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          right: 0;
          left: 0;
}
     </style>
</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Quick <span style="font-weight: bold;">Reporter</span></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.html" class="smoothScroll">Home</a></li>
                         <li><a href="about.html" class="smoothScroll">About</a></li>
                         <li><a href="services.html" class="smoothScroll">Services</a></li>
                         <li><a href="contact.html" class="smoothScroll">Contact</a></li>
                         <li><a href="report.php" class="smoothScroll">Report</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         
                         <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Register</a></li>
                    </ul>
               </div>

          </div> 
     </section>

 
     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container" style="background-color: rgba(255, 255, 255, 0.5);">
               <div class="row" style="margin-left:350px;">
                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                            <a href="report1.php"><button class="btn btn-success btn-lg" >Report 1</button></a>&emsp;
                            <a href="report2.php"><button class="btn btn-danger btn-lg" >Report 2</button></a>&emsp;
                            <a href="report3.php"><button class="btn btn-primary btn-lg" href="report3.php">Report 3</button></a>

                             
                         </div>
                    </div>
                   
                    
               </div>
          </div>
     </section>

     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                    <div class="modal-body" >
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <h2>Quick Reporter</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Register</a></li>
                                             <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                                  <form action="API/reg.php" method="post">
                                                       <input type="text" class="form-control" name="name" placeholder="Driver Name" required>
                                                       <input type="text" class="form-control" name="vehicleNo" placeholder="Vehicle Number" required>
                                                       <input type="text" class="form-control" name="insuranceID" placeholder="Insurance Number" required>
                                                       <input type="text" class="form-control" name="insuranceCompany" placeholder="Insurance Company" required>

                                                       <input type="telephone" class="form-control" name="contactNo" placeholder="Contact No" required>
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="password" class="form-control" name="repassword" placeholder="Confirm Password" required>
                                                       <input type="hidden" class="form-control" name="role" placeholder="Confirm Password" value="DRIVER" required>

                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  </form>
                                             </div>

                                             <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                                  <form action="API/auth.php" method="post">
                                                       <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  </form>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
     <!-- ABOUT -->
     

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="col-md-6" style="padding-left: 20px;padding-top: 10px;margin-top:-110px;">
               <h2>QuickReporter</h2>
               <p>Please report your problems to us. We care for you always. We are the best among all.</p>
          </div>
          <div class="col-md-6" style="padding-left: 20px;padding-top: 10px;margin-top:-110px;">
               <h2>Discover</h2>
               <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contacts</a></li>
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#"> Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

               </ul>
          </div>
     </footer>


     <!-- MODAL -->
     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <h2>Quick Reporter</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Register</a></li>
                                             <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                                  <form action="#" method="post">
                                                       <input type="text" class="form-control" name="dname" placeholder="Driver Name" required>
                                                       <input type="text" class="form-control" name="vnum" placeholder="Vehicle Number" required>
                                                       <input type="text" class="form-control" name="inum" placeholder="Insurance Number" required>
                                                       <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="password" class="form-control" name="repassword" placeholder="Confirm Password" required>

                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  </form>
                                             </div>

                                             <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                                  <form action="#" method="post">
                                                       <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  </form>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD72lh9FIkNzZ3XETm4vCMvZITfikxQ-Fw&callback=myMap"></script>
                                                                 

</body>
</html>