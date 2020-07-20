<?php include 'includes/header.php'; ?>
<!-- change email -->
<section class="contact-us">
    <div class="title text-center">
        <h1>Contact us</h1>
    </div>
    <div class="container">
        <div class="background">
            <div class="row">
                <div class="col-md-12 ">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control " id="exampleInputname1" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="Email" aria-describedby="emailHelp" placeholder="Johndoe@example.com" required>
                            <small id="emailHelp" class="form-text text-mute">Please check email before sending!</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" placeholder="Message..." name="message" id="exampleFormControlTextarea1" rows="5" required></textarea>
                        </div>
                        <button type="submit" href="#" class="btn-outline btn-general">Send</button>
                    </form>
                </div>
            </div>
        </div>
</section>

<?php include 'includes/footer.php'; ?>