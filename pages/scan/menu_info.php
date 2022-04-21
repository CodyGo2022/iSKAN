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
    <main class="menu-info-content">
        <nav class="navbar fixed-bottom second-bg">
            <div class="container d-flex justify-content-around">
                <a href="../dashboard.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-house"></i>
                    <p class="mb-0">Home</p>
                </a>
                <a href="menu_info.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color active-icon">
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
                            <a href="#" class="btn w-50 d-flex align-items-center fs-sm view-more main-color">Add to List</a>
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