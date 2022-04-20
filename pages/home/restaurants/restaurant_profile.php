<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>iSKAN</title>

    <!-- Extensions -->
    <link rel="stylesheet" href="../../../dist/styles/style.css">

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
    <main class="restaurants-content">
        <nav class="navbar fixed-bottom second-bg">
            <div class="container d-flex justify-content-around">
                <a href="../../dashboard.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color active-icon">
                    <i class="bi bi-house"></i>
                    <p class="mb-0">Home</p>
                </a>
                <a href="../../scan/qr-scanner/qr_scan.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-fullscreen"></i>
                    <p class="mb-0">Scan</p>
                </a>
                <a href="../../history/history.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-receipt"></i>
                    <p class="mb-0">History</p>
                </a>
                <a href="#" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-person"></i>
                    <p class="mb-0">Profile</p>
                </a>
            </div>
        </nav>

        <div class="d-flex align-item-start flex-column main-text-color h-100">
            <div class="p-0">
                <!-- Restaurant module -->
                <section>
                    <div class="restaurant-header">
                        <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="card-img-top" alt="...">
                        <div class="px-4 header-content">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title fw-bold main-text-color mb-0 fs-5">Restaurant profile</h6>
                                <a href="../../dashboard.php" class="text-decoration-none main-text-color">
                                    <i class="bi bi-arrow-left fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>  

                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div>
                                <h5 class="card-title fw-bold">Lorem, ipsum.</h5>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-star-fill fa-sm me-1 third-color"></i>
                                    <i class="bi bi-star-fill fa-sm me-1 third-color"></i>
                                    <i class="bi bi-star-fill fa-sm me-1 third-color"></i>
                                    <i class="bi bi-star-fill fa-sm me-1 third-color"></i>
                                    <i class="bi bi-star-fill fa-sm me-2 third-color"></i>
                                    <p class="card-text fs-sm second-text-color">48 ratings</p>
                                </div>
                            </div>
                            <div>
                                <a href="restaurant_info.php" class="fs-sm text-decoration-none fifth-text-color">More info</a>
                            </div>
                        </div>    

                        <section class="restaurants">
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
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>