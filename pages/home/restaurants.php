<?php include"../includes/nav-start.php"?>

<div class="d-flex align-item-start flex-column main-text-color h-100 px-4">
    <div class="pt-4">
        <section class="row g-0 mb-4">
            <div class="col-10">
                <input type="text" name="search" id="" class="form-control fs-6 third-text-color search p-3" placeholder="Search">
            </div>
            <div class="col-2 ps-2">
                <div class="dropdown">
                    <a class="btn search-filter main-color w-100" href="#" role="button" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-sliders main-icon-color"></i>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownFilter">
                        <li><a class="dropdown-item" href="#">Option A</a></li>
                        <li><a class="dropdown-item" href="#">Option B</a></li>
                        <li><a class="dropdown-item" href="#">Option C</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Restaurants module -->
        <section class="restaurants">
            <div class="d-flex justify-content-between">
                <h6 class="fw-bold mb-3">Restaurants</h6>
                <a href="home.php" class="text-decoration-none main-text-color">
                    <i class="bi bi-arrow-left fa-lg"></i>
                </a>
            </div>

            <section>
                <div class="card shadow-sm mb-3">
                    <div class="restaurant-card">
                        <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                        <div class="card-body p-2 restaurant-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title fw-bold main-text-color mb-0">Lorem, ipsum.</h6>
                                    <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                </div>
                                <a href="#" class="btn fourth-text-color view-more">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="restaurant-card">
                        <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                        <div class="card-body p-2 restaurant-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title fw-bold main-text-color mb-0">Lorem, ipsum.</h6>
                                    <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                </div>
                                <a href="#" class="btn fourth-text-color view-more">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="restaurant-card">
                        <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                        <div class="card-body p-2 restaurant-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title fw-bold main-text-color mb-0">Lorem, ipsum.</h6>
                                    <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                </div>
                                <a href="#" class="btn fourth-text-color view-more">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="restaurant-card">
                        <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                        <div class="card-body p-2 restaurant-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title fw-bold main-text-color mb-0">Lorem, ipsum.</h6>
                                    <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                </div>
                                <a href="#" class="btn fourth-text-color view-more">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="restaurant-card">
                        <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                        <div class="card-body p-2 restaurant-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title fw-bold main-text-color mb-0">Lorem, ipsum.</h6>
                                    <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                </div>
                                <a href="#" class="btn fourth-text-color view-more">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </section>
    </div>
</div>

<?php include"../includes/nav-end.php"?>