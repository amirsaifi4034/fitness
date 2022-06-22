<?php include "header.php" ?>

<section class="home_banner position-relative">
    <img src="images/home-banner.jpg" alt="Banner" width="100%">
    <div class="banner_contnet">
        <h1>The better way for <span>Good Health</span></h1>
    </div>
</section>

<section class="service_sec">
    <div class="container shadow position-relative bg-white z-index rounded p-4" style="top: -70px">
        <div class="row">
            <div class="col-sm-4">
                <div class="serv_card">
                    <div class="icons_ser text-center mb-3">
                        <img src="images/checkmark.png" width="60px" alt="move right">
                    </div>
                    <div class="serv_content">
                        <h5 class="mb-0 text-center text-danger">Move Right</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="serv_card">
                    <div class="icons_ser text-center mb-3">
                        <img src="images/willpower.png" width="80px" alt="thin better">
                    </div>
                    <div class="serv_content">
                        <h5 class="mb-0 text-center text-danger">Think Better</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="serv_card">
                    <div class="icons_ser text-center mb-3">
                        <img src="images/bibimbap.png" width="60px" alt="eat smart">
                    </div>
                    <div class="serv_content">
                        <h5 class="mb-0 text-center text-danger">Eat Smart</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_us sec_padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="heading_main">
                    <h2 class="fw-bold mb-4">IT'S TIME TO PUT 
                        <span class="text-danger">YOURSELF</span> FIRST</h2>
                </div>
                <p>We work with men and women that have let fitness slide down their list of priorities, and want to make a change</p>
                <p>We believe fitness should enhance your life, rather than take away from it- every Armoury Transformation starts with an in-depth look at where you currently are, and creates an achievable path to where you want to be.</p>
                <p>​If you feel ready to take action, and put yourself first? <a href="#">Click Here</a>, and claim your free trial</p>
            </div>
        </div>
    </div>
</section>
<section class="trainer_sec sec_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="heading_main mb-3 text-center">
                    <h2 class="fw-bold mb-4">OUR TRAINERS</h2>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="trainer_card text-center border rounded shadow px-2 py-4">
                                    <img src="images/trainer1.jpg" alt="Trainer">
                                    <h6 class="text-danger mt-4">Trainer</h6>
                                    <h5 class="mb-3">Samnta Gain</h5>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="trainer_card text-center border rounded shadow px-2 py-4">
                                    <img src="images/trainer2.jpg" alt="Trainer">
                                    <h6 class="text-danger mt-4">Trainer</h6>
                                    <h5 class="mb-3">Ahil Saif</h5>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="trainer_card text-center border rounded shadow px-2 py-4">
                                    <img src="images/trainer1.jpg" alt="Trainer">
                                    <h6 class="text-danger mt-4">Trainer</h6>
                                    <h5 class="mb-3">Samnta Gain</h5>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="contactus sec_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="heading_main mb-3 text-center">
                    <h2 class="fw-bold mb-4">Contact us*</h2>
                </div>
            </div>
            <div class="col-sm-4 offset-sm-1">
                <div class="contact_box">
                    <div class="con-icons">
                    <p><i class="fas fa-phone-alt"></i> 9990949278</p>
                    <p><i class="fas fa-envelope"></i> info@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> badkhal colony FBD</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="contactform">
                    <form action="submit_form.php" method="post" autocomplete="off">
                        <!-- <form onsubmit="sendmail(); reset(); return false;"> -->
                        <div class="row">
                            <div class="form-floating mb-3 col-sm-6">
                                <input required name="name" type="text" class="form-control" id="floatingName" placeholder="Full Name">
                                <label for="floatingName" style="left: 10px">Full Name</label>
                            </div>
                            <div class="form-floating mb-3 col-sm-6">
                                <input required name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label  style="left: 10px" for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input required name="phoneno" type="tel" pattern="^\d{10}$" class="form-control" id="floatingTel" placeholder="Phone No.">
                            <label for="floatingTel">Phone No.</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea required name="message" class="form-control" rows="4" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn text-white bg-danger button_bg" style="padding: 8px 40px; border-radius: 6px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-body">
        <form action="submit_form.php" method="post" autocomplete="off">
            <!-- <form onsubmit="sendmail(); reset(); return false;"> -->
            <div class="row">
                <div class="form-floating mb-3 col-sm-6">
                    <input required name="name" type="text" class="form-control" id="floatingName" placeholder="Full Name">
                    <label for="floatingName" style="left: 10px">Full Name</label>
                </div>
                <div class="form-floating mb-3 col-sm-6">
                    <input required name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label  style="left: 10px" for="floatingInput">Email address</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input required name="phoneno" type="tel" pattern="^\d{10}$" class="form-control" id="floatingTel" placeholder="Phone No.">
                <label for="floatingTel">Phone No.</label>
            </div>
            <div class="form-floating mb-3">
                <textarea required name="message" class="form-control" rows="4" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn text-white bg-danger button_bg" style="padding: 8px 40px; border-radius: 6px;">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php" ?>