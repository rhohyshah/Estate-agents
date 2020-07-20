<?php include 'includes/header-after.php'; ?>
<section class="profile">
    <div class="title text-center">
        <h1>My Information</h1>
    </div>
    <div class="container">
        <div class="background">
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-md-12">
                    <h5>Personal Information</h5><br>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First name</label>
                        <input type="firstname" class="form-control" id="exampleInputFirstName1" placeholder="Enter first name" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Surname</label>
                        <input type="surname" class="form-control" id="exampleInputSurname1" placeholder="Enter Surname" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <a class=" btn btn-link" href="change-email.php"  role="button">Change Email</a>
                    <button class=" btn btn-link"  data-toggle="modal" data-target="#forgotPassword"  role="button">Change Password</button>



                </div><br>

                <div class="col-md-12">
                    <br>
                    <p>Manage Account</p>
                </div>
                <div class="col-md-12">
                    <a class=" btn btn-link" href="delete-account.php" role="button" style="margin:0;">Click here to Delete Account</a>

                </div>
                
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>