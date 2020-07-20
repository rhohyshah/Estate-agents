<?php include 'includes/header-after.php'; ?>

<!-- this will be inputted via admin panel -->
<section class="jobs">
    <div class="col-md-12 title text-center">
        <h1>Jobs</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <img src="img/logo2.png" alt=""><br>
                        <h5 class="card-title"><span>Manager</span></h5>
                        <p class="card-text"><i class="fas fa-map-marked-alt"></i> New York.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eveniet ex repudiandae nostrum fugit. Nemo porro totam doloremque? Accusamus cupiditate inventore accusantium ea eveniet debitis numquam nisi amet? Ullam, asperiores?</p>
                        <p class="card-text text-muted">Salary-$20,000</p>
                        <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="btn-general btn-outline"><i class="fas fa-info "></i></a>
                    </div>
                    <div class="card-footer text-muted text-center">
                        2 days ago
                    </div>

                    <!-- Modal for job content -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"><span>Manager</span></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam accusantium dolorem id eum maxime suscipit deleniti ea modi explicabo repudiandae, ab amet tempora, fugiat praesentium inventore, doloribus provident magnam.
                                </div>
                                <div class="modal-footer">
                                    <a data-dismiss="modal" type="button" class="btn-general btn-outline">Close</a>
                                    <!-- this will the the person to another website where they can apply -->
                                    <a type="button" class="btn-general btn-solid">Apply</a>


                                    <!-- change to anchor tags -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>