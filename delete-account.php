<?php include 'includes/header-after.php'; ?>
<!-- change email -->
<section class="delete-account">
    <div class="title text-center">
        <h1>Delete account</h1>
    </div>
    <div class="container">
        <div class="background">
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-md-12">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Why are you deleting your account?</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Found a suitable home</option>
                            <option>Unsuitable Information</option>
                            <option>Not getting the support i need</option>
                            <option>Don't need an account</option>
                            <option>Privacy Concern</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="********">
                    </div>
                </div>
                <div class="col-md-12 text-right space">
                    <a class="btn-general btn-outline" href="sign-up.php" role="button" title="cancel">Delete</a>
                    <a class="btn-general btn-solid" href="my-profile.php" role="button" title="cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>