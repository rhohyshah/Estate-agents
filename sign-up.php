<?php include 'includes/header.php'; ?>
<section class="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-6 information">
                <h1>Sign Up</h1><br>
                <h3>You can save Properties for later and apply for jobs!</h3>


            </div>
            <div class="col-md-6">
                <div class="">
                    <article class="card-body mx-auto" style="max-width: 400px;">
                        <form>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input name="" class="form-control" placeholder="Full name" type="text" required>
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                <input name="" class="form-control" placeholder="Email address" type="email" required>
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                </div>

                                <input name="" class="form-control" placeholder="Phone number" type="number" required>
                            </div> <!-- form-group// -->
                            <!-- form-group end.// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" placeholder="Create password" type="password" required>
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" placeholder="Repeat password" type="password" required>
                            </div> <!-- form-group// -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">I agree to the <a target="_blank" class="btn-underline" href="pdf/privacy-policy.pdf">Privacy policy</a>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2" required>
                                <label class="form-check-label" for="exampleCheck2">I agree to the <a target="_blank" class="btn-underline" href="pdf/terms-and-conditions.pdf">Terms and services</a><br>
                                </label>
                            </div> <br>
                            <div class="form-group">
                                <a type="submit" href="properties-after.php" class="btn btn-primary btn-block"> Create Account </a>
                            </div> <!-- form-group// -->



                            <p class="text-center">Have an account? <a href="log-in.php">Log In</a> </p>
                        </form>
                    </article>
                </div> <!-- card.// -->

            </div>
        </div>
    </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>