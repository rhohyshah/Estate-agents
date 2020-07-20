<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Agenestate</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="img/logo2.png">

  <!-- style css -->
  <link rel="stylesheet" href="css/style.css" class="css">
  <!-- bootstrap css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- google font - open sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
  <!-- fontawesome css -->
  <script src="https://kit.fontawesome.com/a6ec3b4c5f.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- property valuation -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><span>Property valuation</span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h3>Want to make an appointment for a home valuation?</h3>
              <p>Call us to book an appointment. <span>You can also report a fault</span></p>
              <p><i class="fas fa-phone"></i> +39983729719287</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      
  <!-- forgot password Modal -->
  <div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Forgot Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Reset Code</label>
            <input type="text" class="form-control" id="exampleInputFirstName1" aria-describedby="emailHelp" placeholder="">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="email" class="form-control" id="exampleInputSurname1" aria-describedby="emailHelp" placeholder="johnathan@example.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="email" class="form-control" id="exampleInputSurname1" aria-describedby="emailHelp" placeholder="johnathan@example.com">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="landing-page.php"><img src="img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">







        <li class="nav-item">
          <a class="nav-link" href="saved-properties.php">Saved properties</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="properties-after.php">Propery Search</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="Jobs-after.php">Jobs</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="myportal.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cog"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="my-profile.php">My Profile</a>
            <a class="dropdown-item" href="log-in.php">Log out</a>


          </div>
        </li>

      </ul>

      <a class=" btn-general btn-solid" role="button" data-toggle="modal" data-target="#exampleModal" href="">Property Valuation</a>
     
  </nav>