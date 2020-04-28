<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Phulkari Photo Studio</title>
  </head>
<style media="screen">
  .navbar-custom{
    background-color:;
  }
  .nav-item{
    color: black;
     font-size:20px;
      font-weight:bold;
      padding-right: 40px;
  }
  a:hover a:active
  {
color: black;
  }
  .nav-link
  {
    color:black;
  }
  </style>
   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary"  >
<section>
  <a class="navbar-brand" href="#"><center><img src="images/final.png" style="height:40px; width:200px; " ></center></a>

</section>
  </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="basicExampleNav" >
        <ul class="navbar-nav ml-auto" >

          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
          </li>
          <li class="nav-item dropdown">
          <a  class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
          </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item " data-toggle="modal" data-target="#client" >Client Login</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item " data-toggle="modal" data-target="#admin" >Admin Login</a>
          </div>
        </li>
        <li class="nav-item" >
            <a class="nav-link" href="admin.php" >admin</a>
          </li>
        <li class="nav-item" >
            <a class="nav-link" href="#" >Contact Us</a>
          </li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="modal fade" id="client" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <strong><h3 class="modal-title">Login to Phulkari Photo Studio</h3></strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                          <strong><p>Please enter your Username and Password to access your account.</p></strong>
                          <div class="col-md-12 ">
                            <div class="jumbotron" style="margin-top:20px;">
                              <form method="post" onsubmit="openModal()" id="myForm">
                                <div class="form-group">
                                   <strong><lable>Username</lable></strong>
                                   <input type="text" name="name" class="form-control" placeholder="Enter Username" required>
                                   <center><?php echo $errormsg1 ?></center>
                                 </div>
                                <div class="form-group">
                                   <strong><lable>Password</lable></strong>
                                   <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                   <center><?php echo $errormsg2 ?></center>
                                     </div>
                                  <div class="form-group">
                                  <center><input type="submit" name="clientbutton" value="Login" class=" btn btn-success" style="width:100%;"></center>
                                  <br>
                                  <strong><center><p>Don't have an account? &nbsp<a data-toggle="modal" data-target="#signup" style="color:dodgerblue">Register an account today</a></p></center><strong>
                                </div>
                              </form>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </body>
</html>
