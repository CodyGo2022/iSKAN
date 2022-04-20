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
    <main class="history-content">
        <nav class="navbar fixed-bottom second-bg">
            <div class="container d-flex justify-content-around">
                <a href="../dashboard.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-house"></i>
                    <p class="mb-0">Home</p>
                </a>
                <a href="../scan/qr-scanner/qr_scan.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-fullscreen"></i>
                    <p class="mb-0">Scan</p>
                </a>
                <a href="history.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color active-icon">
                    <i class="bi bi-receipt"></i>
                    <p class="mb-0">History</p>
                </a>
                <a href="#" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-person"></i>
                    <p class="mb-0">Profile</p>
                </a>
            </div>
        </nav>

        <div class="d-flex align-item-start flex-column main-text-color px-4">
            <div class="pt-4">
                
                <!-- Purchase history module -->
                <section class="purhcase-history">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold mb-3">My Purchase History</h6>
                        <a href="history.php" class="text-decoration-none main-text-color">
                            <i class="bi bi-arrow-left fa-lg"></i>
                        </a>
                    </div>

                    <section>
                        <div class="card shadow-sm mb-3">
                            <div class="d-flex history-card">
                                <div class="card-body d-flex flex-column">
                                    <p class="card-title fs-md fw-bold main-text-color mb-2">Order details</p>

                                    <div class="d-flex flex-column">
                                        <div class="py-3">
                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">Transaction code</p>
                                                <p class="card-text fw-bold fs-sm first-text-color mb-1">#b9kh-c710</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">Order number</p>
                                                <p class="card-text fw-bold fs-sm first-text-color mb-1">011190</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">Order from</p>
                                                <p class="card-text fw-bold fs-sm first-text-color mb-1">Lorem ipsum dolor sit amet.</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">Address</p>
                                                <p class="card-text fw-bold fs-sm first-text-color mb-1">Olympus Arcade, 95 Zabarte Rd.</p>
                                            </div>
                                        </div>

                                        <div class="py-3">
                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">1x Lorem ipsum sit.</p>
                                                <p class="card-text fs-sm fw-bold first-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">1x Lorem.</p>
                                                <p class="card-text fs-sm fw-bold first-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">1x Lorem dolor sit.</p>
                                                <p class="card-text fs-sm fw-bold first-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">1x Lorem sit.</p>
                                                <p class="card-text fs-sm fw-bold first-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                            </div>
                                        </div>

                                        <div class="py-3">
                                            <div class="d-flex justify-content-between">
                                                <p class="card-text fs-sm first-text-color m-0">Total</p>
                                                <p class="card-text fs-sm fw-bold first-text-color"><span class="me-1">&#8369;</span>99.00</p>
                                            </div>
                                        </div>
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