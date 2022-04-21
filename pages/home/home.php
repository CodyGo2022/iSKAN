<?php include"../includes/nav-start.php"?>

<section class="d-flex align-item-start flex-column main-text-color">
    <div class="pt-4">
        <section class="row g-0 mb-4 px-4">
            <div class="col-10">
                <input type="text" name="search" id="" class="form-control fs-6 third-text-color search p-3" placeholder="Search">
            </div>
            <div class="col-2 ps-2">
                <div class="dropdown">
                    <a class="btn search-filter main-color w-100" href="#" role="button" id="dropdownFilter" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-sliders main-icon-color"></i>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownFilter">
                        <li><a class="dropdown-item fs-sm" href="#">Top Selling</a></li>
                        <li><a class="dropdown-item fs-sm" href="#">Budget Friendly</a></li>
                        <li><a class="dropdown-item fs-sm" href="#">Meal</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Top selling section -->
        <section class="top-selling mb-4">
            <h6 class="fw-bold mb-3 px-4">Top Selling</h6>
            <div class="wrapper">
                <div class="card shadow-sm ms-4">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm img-fluid" alt="...">
                    <div class="card-body">
                        <a href="food_info.php" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-star-fill fa-sm me-2 third-color"></i>
                            <p class="card-text fs-sm second-text-color">4.5</p>
                        </div>
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="food_info.php" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-star-fill fa-sm me-2 third-color"></i>
                            <p class="card-text fs-sm second-text-color">4.5</p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="food_info.php" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-star-fill fa-sm me-2 third-color"></i>
                            <p class="card-text fs-sm second-text-color">4.5</p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm me-4">
                    <div class="card-body d-flex justify-content-center align-items-center h-100 p-2">
                        <a href="top_selling.php" class="card-title stretched-link text-decoration-none second-text-color view-all">View all</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Restaurant section -->
        <section class="restaurants mb-4">
            <h6 class="fw-bold mb-3 px-4">Restaurants</h6>
            <div class="wrapper">
                <div class="card shadow-sm ms-4">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="restaurant_profile.php" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="#" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                    </div>
                </div>

                <div class="card shadow-sm me-4">
                    <div class="card-body d-flex justify-content-center align-items-center h-100 p-2">
                        <a href="restaurants.php" class="card-title stretched-link text-decoration-none second-text-color view-all">View all</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Budget friendly section -->
        <section class="budget-friendly mb-4">
            <h6 class="fw-bold mb-3 px-4">Budget Friendly</h6>
            <div class="wrapper">
                <div class="card shadow-sm ms-4">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="budget_friendly_info.php" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <div class="d-flex align-items-center">
                            <p class="card-text fs-sm second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                        </div>
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="#" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <div class="d-flex align-items-center">
                            <p class="card-text fs-sm second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm me-4">
                    <div class="card-body d-flex justify-content-center align-items-center h-100 p-2">
                        <a href="budget_friendly.php" class="card-title stretched-link text-decoration-none second-text-color view-all">View all</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Breakfast meal section -->
        <section class="meal">
            <h6 class="fw-bold mb-3 px-4">Breakfast Meal</h6>
            <div class="wrapper">
                <div class="card shadow-sm ms-4">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="daily_meal_info.php" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <div class="d-flex align-items-center">
                            <p class="card-text fs-sm second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                        </div>
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="#" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <div class="d-flex align-items-center">
                            <p class="card-text fs-sm second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mr-2">
                    <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top img-size-sm" alt="...">
                    <div class="card-body">
                        <a href="#" class="card-title stretched-link text-decoration-none main-text-color fs-md fw-sb">Lorem, ipsum.</a>
                        <div class="d-flex align-items-center">
                            <p class="card-text fs-sm second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm me-4">
                    <div class="card-body d-flex justify-content-center align-items-center h-100 p-2">
                        <a href="daily_meal.php" class="card-title stretched-link text-decoration-none second-text-color view-all">View all</a>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</section>

<?php include"../includes/nav-end.php"?>