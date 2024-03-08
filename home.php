<?php require_once('includes/header.php');?>

    <!--Carousel Home-->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide carousel-home">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active bg-img-1">
                    <div class="carousel-caption">
                        <div class="container">
                            <h2>Buy more easily!</h2>
                            <p class="py-4">Discover a world of possibilities in our store, where every click<br> is a new shopping adventure!</p>
                            <a href="#" class="btn-carousel">Find out more</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item bg-img-2">
                    <div class="carousel-caption">
                        <div class="container">
                            <h2>Buy more easily!</h2>
                            <p class="py-4">Discover a world of possibilities in our store, where every click<br> is a new shopping adventure!</p>
                            <a href="#" class="btn-carousel">Find out more</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item bg-img-1">
                    <div class="carousel-caption">
                        <div class="container">
                            <h2>Buy more easily!</h2>
                            <p class="py-4">Discover a world of possibilities in our store, where every click<br> is a new shopping adventure!</p>
                            <a href="#" class="btn-carousel">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Cards-->
    <section>
        <div class="container my-5">
            <h2>Featured Products</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 my-5">
                <?php
                    for($i =0; $i < 4; $i++) { require('includes/components/products-item.php'); }
                ?>
            </div>
        </div>
    </section>

    <!--LIMITED OFFER-->
    <section>
        <div class="bg-image">
            <div class="bg-image-mask">
                <div class="container">
                    <h5>LIMITED OFFER</h5>
                    <div class="d-flex justify-content-center">
                        <div>
                            <p class="offer"> 50% off today and get a special gift</p>

                            <div class="btn-limited-offer">
                                <a href="#" >
                                    <p>Grab It Now</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once('includes/footer.php');?>