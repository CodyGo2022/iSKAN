<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>iSKAN</title>

    <!-- Extensions -->
    <link rel="stylesheet" href="../dist/styles/style.css">

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
    
    <main>
        <div class="d-flex justify-content-center second-color content-height">
            <div class="d-flex align-items-center">
                <div id="carouselFeature" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner d-flex">
                        <div class="carousel-item active">
                            <img src="../dist/image/undraw_android_jr64.svg" class="d-block w-100 img-size-md pt-5 px-5" alt="Feature Scan">
                            <div class="d-flex flex-column align-item-center fourth-text-color text-center py-4">
                                <h5 class="fw-bold">Scan</h5>
                                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ipsa quo dolores numquam ducimus labore.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                        <img src="../dist/image/undraw_checking_boxes_re_9h8m.svg" class="d-block w-100 img-size-md pt-5 px-5" alt="Feature choose order">
                            <div class="d-flex flex-column align-item-center fourth-text-color text-center py-4">
                                <h5 class="fw-bold">Choose your order</h5>
                                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ipsa quo dolores numquam ducimus labore.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="../dist/image/undraw_eating_together_re_ux62.svg" class="d-block w-100 img-size-md pt-5 px-5" alt="Feature enjoy">
                            <div class="d-flex flex-column align-item-center fourth-text-color text-center py-4">
                                <h5 class="fw-bold">Enjoy</h5>
                                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ipsa quo dolores numquam ducimus labore.</p>
                            </div>
                        </div>

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselFeature" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Feature 1"></button>
                            <button type="button" data-bs-target="#carouselFeature" data-bs-slide-to="1" aria-label="Feature 2"></button>
                            <button type="button" data-bs-target="#carouselFeature" data-bs-slide-to="2" aria-label="Feature 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
        <svg class="position-absolute mt-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2FD4C6" fill-opacity="1" d="M0,96L120,128C240,160,480,224,720,224C960,224,1200,160,1320,128L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
            <svg class="position-relative" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#028485" fill-opacity="1" d="M0,96L120,128C240,160,480,224,720,224C960,224,1200,160,1320,128L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
        </div>

        <div class="d-flex justify-content-center">
            <a href="login/login_phase_one.php" type="button" class="main-color mt-3 py-2 text-center rounded-3 login-btn">Login with Phone Number</a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="register/register_phase_one.php" type="button" class="outline-main-color mt-3 py-2 text-center rounded-3 register-btn">Register with Phone Number</a>
        </div>
    </main>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>