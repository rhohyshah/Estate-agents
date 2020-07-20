<?php include 'includes/header-after.php'; ?>
<!-- there will be a before and after for property details -->
<section class="details">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/success1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>bathroom</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/success2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>kitchen</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/success3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>garden</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" role="tab" data-toggle="tab" href="#description">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#floorplan">Floor plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#map">Map and street view</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#school">School checker</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#market">Market Info</a>

                            </li>
                        </ul>

                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <div class="card-body text-left">
                                <h5 class="card-title">Key Features</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <h5 class="card-title">Full Description</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, ipsa dolore architecto laudantium non exercitationem cupiditate velit voluptatibus quibusdam molestias deserunt totam, eveniet veritatis accusantium illo porro, sequi ullam soluta.</p>


                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="floorplan">
                            <img src="img/floorplan.jpg" width="300" alt=""> </div>
                        <div role="tabpanel" class="tab-pane " id="map">
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

                            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

                        </div>
                        <div role="tabpanel" class="tab-pane " id="school">
                            <div id="googleMap" style="width:100%;height:400px;"></div>




                        </div>
                        <!-- inputted by sql -->
                        <div role="tabpanel" class="tab-pane " id="market">
                            <div class="card-body text-left">
                                <h5 class="card-title">Property sale history</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <table style="width:100%">
                                    <tr>
                                        <th>Year</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td>2007</td>
                                        <td>$200,000</td>
                                    </tr>
                                    <tr>
                                        <td>2001</td>
                                        <td>$180,000</td>
                                    </tr>
                                </table>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="col-md-12 text-center"><br><br>
                <h3>Want more information?</h3>
                <p>Call us to book an house tour</p>
                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal" class="btn-general btn-solid"><i class="fas fa-phone"></i> +39983729719287</a>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Call us today!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span>Contact this number to get a hold of us whether you want to buy/sell/rent or let a property. We guaruntee the best service in the nation!</span><br>
                            +39983729719287
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-general btn-solid" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>