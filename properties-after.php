<?php include 'includes/header-after.php'; ?>
<?php include 'includes/header2.php'; ?>


<section class="properties">
    <div class="col-md-12 title text-center">
        <h1>Properties</h1>
    </div>
    <!-- must refresh on select -->
    <div class="container-fluid property-search">
        <div class="row">
            <div class="card">
                <article class="card-group-item">
                    <header class="card-header">
                        <h6>Contract type </h6>
                    </header>
                    <div class="filter-content">
                        <div class="card-body">
                            <form>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label">Rent</span>
                                </label> <!-- form-check.// -->
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label"> Let </span>
                                </label> <!-- form-check.// -->
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label"> Buy </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label"> Auction </span>
                                </label>
                                <!-- form-check.// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div>
                </article> <!-- card-group-item.// -->
                <article class="card-group-item">
                    <header class="card-header">
                        <h6>Bedrooms </h6>
                    </header>
                    <div class="filter-content">
                        <div class="card-body">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label"> 1 </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label">2-3</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label">4-5 </span>
                            </label>
                        </div> <!-- card-body.// -->
                    </div>
                </article>
                <article class="card-group-item">
                    <header class="card-header">
                        <h6> Property type</h6>
                    </header>
                    <div class="filter-content">
                        <div class="card-body">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label"> Detached </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label">Semi-Detached</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label">Terraced </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label">Flat </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label">Bunglow </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label">Land </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                <span class="form-check-label">Park home </span>
                            </label>
                        </div> <!-- card-body.// -->
                    </div>
                </article> <!-- card-group-item.// -->
            </div>

            <div class="col-md-8">
                <div class="card-deck">
                    <div class="card">
                        <img src="img/success1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Widor Lane House</h5>
                            <a class=" btn-general btn-solid" role="button" href="property-details.php">View</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/success2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bigg Manor</h5>
                            <a class=" btn-general btn-solid" role="button" href="property-details.php">View</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/success3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Canal View Home</h5>
                            <a class=" btn-general btn-solid" role="button" href="property-details.php">View</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
</section>
<?php include 'includes/footer.php'; ?>