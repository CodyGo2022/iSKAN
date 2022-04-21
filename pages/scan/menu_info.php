<?php include"../includes/nav-start.php"?>

<div class="d-flex align-item-start flex-column main-text-color h-100 px-4">
    <div class="pt-4">

        <!-- Menu info module -->
        <section class="menu">
            <div class="d-flex justify-content-end">
                <a href="menu.php" class="text-decoration-none main-text-color mb-3">
                    <i class="bi bi-arrow-left fa-lg"></i>
                </a>
            </div>

            <section class="d-flex flex-column justify-content-between">
                <div class="menu-info">
                    <div id="food-gallery" class="carousel slide mb-2" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#food-gallery" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#food-gallery" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- Food name & price -->
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-bold main-text-color">Lorem, ipsum</h5>
                        <p class="card-title fw-bold main-text-color"><span class="me-1">&#8369;</span>99.00</p>
                    </div>

                    <!-- food info -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-star fa-md me-2 third-color"></i>
                            <p class="card-text fs-sm second-text-color">4.9</p>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="bi bi-stopwatch fa-md me-2 third-color"></i>
                            <p class="card-text fs-sm second-text-color">15-20 minutes</p>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="bi-shop-window fa-md me-2 third-color"></i>
                            <p class="card-text fs-sm second-text-color">Lorem, ipsum.</p>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <i class="bi bi-geo-alt fa-md me-2 third-color"></i>
                            <p class="card-text fs-sm second-text-color">Olympus Arcade, 95 Zabarte Rd.</p>
                        </div>
                    </div>

                    <!-- about food -->
                    <div class="">
                        <h6 class="fw-bold main-text-color">About</h6>
                        <p class="card-text fs-sm second-text-color">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, asperiores ad exercitationem iure, 
                            odio reiciendis minus non tempore inventore iste ipsam officiis totam, eius atque numquam repudiandae 
                            laudantium obcaecati similique.
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between m-0 mt-3">
                    <div>
                        <div class="d-flex">
                            <button class="w-50 fill-main-color"><i class="bi bi-dash"></i></button>
                            <input type="text" class="input-group" placeholder="0" style="width: 50px; border: none; text-align: center">
                            <button class="w-50 fill-main-color"><i class="bi bi-plus"></i></button>
                        </div>
                        <!-- <div class="input-group">
                            <button class="fill-main-color" type="button"><i class="bi bi-plus"></i></button>
                            <input type="text" class="form-control" placeholder="" aria-label="Quantity">
                            <button class="fill-main-color" type="button"><i class="bi bi-dash"></i></button>
                        </div> -->
                    </div>
                    <a href="my_list.php" class="btn w-50 d-flex align-items-center fs-sm view-more main-color">Add to List</a>
                </div>
            </section>
        </section>
    </div>
</div>

<?php include"../includes/nav-end.php"?>