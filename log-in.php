<?php include 'includes/header.php'; ?>



<section class="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-6 information">
                <h1>Log In</h1><br>
            </div>
            <div class="col-md-6">
                <div class="">
                    <article class="card-body mx-auto" style="max-width: 400px;">
                        <form>

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                <input name="" class="form-control" placeholder="Email address" type="email" required>
                            </div> <!-- form-group// -->

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" placeholder="Create password" type="password" required>
                            </div> <!-- form-group// -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Remember me!
                                </label>
                            </div>
                            <br>
                            <div class="form-group">
                                <a type="submit" href="properties-after.php" class="btn-general btn-outline btn-block"> Log In </a>
                            </div> <!-- form-group// -->



                            <p class="text-center">Don't have an account? <a href="sign-up.php">Sign up</a> </p>
                            <p class="text-center"> <button class="btn btn-link" type="button"  data-toggle="modal" data-target="#forgotPassword" >Forgot Password?</button> </p>

                        </form>
                    </article>
                </div> <!-- card.// -->

            </div>
        </div>
    </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>