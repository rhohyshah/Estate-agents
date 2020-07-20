    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">

                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search for a property by postcode!" aria-label="Search">
                            <button class="btn-general btn-solid" type="submit"><i class="fas fa-search"></i></button>
                        </form>

                    </div>
                    <div class="col-md-4 google-map">
                        <h5>Main Branch</h5>

                        <div id="googleMap" style="width:100%;height:400px;"></div>
                        <script>
                            function myMap() {
                                var mapProp = {
                                    center: new google.maps.LatLng(51.508742, -0.120850),
                                    zoom: 5,
                                };
                                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                            }
                        </script>

                    </div>
                    <div class="col-md-2">
                        <h5>Contact information</h5>
                        <ul>
                            <li>Phone number: <a href="#">34290839028</a></li>
                            <li>Email: <a href="#">doe@example.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5>Important Information</h5>
                        <ul>
                            <li><a target="_blank" href="pdf/terms-and-conditions.pdf">Terms and services</a></li>
                            <li><a target="_blank" href="pdf/privacy-policy.pdf">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5>Our Branches</h5>
                        <ul>
                            <li><a href="branches.php">Middle Brook</a></li>
                            <li><a href="branches.php">West California</a></li>
                            <li><a href="branches.php">West Texas</a></li>
                            <li><a href="branches.php">East Texas</a></li>
                            <li><a href="branches.php">San Fransisco</a></li>
                            <li><a href="branches.php">North California</a></li>

                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5>Pages</h5>
                        <ul>
                            <li><a href="landing-page.php">Home</a></li>
                            <li><a href="buying.php">Buying</a></li>
                            <li><a href="selling.php">Selling</a></li>
                            <li><a href="lettings.php">Lettings</a></li>
                            <li><a href="renting.php">Renting</a></li>
                            <li><a href="branches.php">Branches</a></li>
                            <li><a href="auction.php">Property Services</a></li>
                            <li><a href="log-in.php">About</a></li>
                            <li><a href="log-in.php">My portal</a></li>
                            <li><a href="contact-us.php">Contact us</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="text-center">
                        <p class="copyright">2019-2020 &copy; <a href="http://www.rhohyshah.com">Rhohy Shah</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- google maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>