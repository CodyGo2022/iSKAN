<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>iSKAN</title>

    <!-- Extensions -->
    <link rel="stylesheet" href="../../dist/styles/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cb6ef89073.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body>
    <main class="meal-content">
        <nav class="navbar fixed-bottom second-bg">
            <div class="container d-flex justify-content-around">
                <a href="daily_meal.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color active-icon">
                    <i class="bi bi-house"></i>
                    <p class="mb-0">Home</p>
                </a>
                <a href="../scan/qr_scan.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-fullscreen"></i>
                    <p class="mb-0">Scan</p>
                </a>
                <a href="../history/history.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-receipt"></i>
                    <p class="mb-0">History</p>
                </a>
                <a href="../profile/my_profile.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-person"></i>
                    <p class="mb-0">Profile</p>
                </a>
            </div>
        </nav>

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
                
                <!-- Breakfast meal module -->
                <section class="meal">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold mb-3">Breakfast Meal</h6>
                        <a href="../dashboard.php" class="text-decoration-none main-text-color">
                            <i class="bi bi-arrow-left fa-lg"></i>
                        </a>
                    </div>

                    <section>
                        <div class="card shadow-sm mb-3">
                            <div class="d-flex flex-row food-card">
                                <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="img-size-md" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div class="mb-2">
                                        <a href="#" class="card-title fw-bold stretched-link text-decoration-none main-text-color">Lorem, ipsum.</a>
                                        <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text fs-md second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm mb-3">
                            <div class="d-flex flex-row food-card">
                                <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="img-size-md" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div class="mb-2">
                                        <a href="#" class="card-title fw-bold stretched-link text-decoration-none main-text-color">Lorem, ipsum.</a>
                                        <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text fs-md second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm mb-3">
                            <div class="d-flex flex-row food-card">
                                <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="img-size-md" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div class="mb-2">
                                        <a href="#" class="card-title fw-bold stretched-link text-decoration-none main-text-color">Lorem, ipsum.</a>
                                        <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text fs-md second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm mb-3">
                            <div class="d-flex flex-row food-card">
                                <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="img-size-md" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div class="mb-2">
                                        <a href="#" class="card-title fw-bold stretched-link text-decoration-none main-text-color">Lorem, ipsum.</a>
                                        <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text fs-md second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm mb-3">
                            <div class="d-flex flex-row food-card">
                                <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="img-size-md" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div class="mb-2">
                                        <a href="#" class="card-title fw-bold stretched-link text-decoration-none main-text-color">Lorem, ipsum.</a>
                                        <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text fs-md second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card shadow-sm mb-3">
                            <div class="d-flex flex-row food-card">
                                <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="img-size-md" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div class="mb-2">
                                        <a href="#" class="card-title fw-bold stretched-link text-decoration-none main-text-color">Lorem, ipsum.</a>
                                        <p class="card-text fs-sm second-text-color text-nowrap overflow-hidden">Olympus Arcade, 95 Zabarte Rd.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text fs-md second-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </section>
            </div>
        </div>
    </main>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>