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
    <main class="menu-item-content">
        <nav class="navbar fixed-bottom second-bg">
            <div class="container d-flex justify-content-around">
                <a href="../dashboard.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-house"></i>
                    <p class="mb-0">Home</p>
                </a>
                <a href="qr_scan.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-fullscreen"></i>
                    <p class="mb-0">Scan</p>
                </a>
                <a href="../history/history.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color">
                    <i class="bi bi-receipt"></i>
                    <p class="mb-0">History</p>
                </a>
                <a href="publish_menu.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color active-icon">
                    <i class="bi bi-person"></i>
                    <p class="mb-0">Profile</p>
                </a>
            </div>
        </nav>

        <section class="d-flex flex-column main-text-color">
            <div class="publish-menu-header">
                <div class="px-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold mb-0 fourth-text-color">Publish Menu List</h6>
                        <a href="my_profile.php" class="text-decoration-none fourth-text-color">
                            <i class="bi bi-arrow-left fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card px-2 px-4 py-4 menu-list">
                <div class="card-body d-flex flex-column p-0 py-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Menu QR Code</div>
                    <p class="card-text fs-md">QQRDFL5LW</p>
                </div>
                <div class="card-body d-flex flex-column p-0 py-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Business Name</div>
                    <p class="card-text fs-md">Lorem ipsum dolor sit.</p>
                </div>
                <div class="card-body d-flex flex-column p-0 py-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Type of Business</div>
                    <p class="card-text fs-md">Lorem, ipsum.</p>
                </div>
                <div class="card-body d-flex flex-column p-0 py-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Location</div>
                    <p class="card-text fs-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, officiis.</p>
                </div>
                <div class="card-body d-flex flex-column p-0 py-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Business PIN</div>
                    <p class="card-text fs-md">Lorem, ipsum dolor.</p>
                </div>
                <div class="card-body d-flex flex-column p-0 py-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Food List</div>
                    <ul class="list-group list-group-flush mt-2">
                        <li class="list-group-item fs-md border-0">Lorem, ipsum.</li>
                        <li class="list-group-item fs-md border-0">Lorem.</li>
                        <li class="list-group-item fs-md border-0">Lorem, ipsum dolor.</li>
                        <li class="list-group-item fs-md border-0">Lorem, ipsum dolor.</li>
                    </ul>
                </div>
                <div class="card-body d-flex flex-column p-0 py-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Drink List</div>
                    <ul class="list-group list-group-flush mt-2">
                        <li class="list-group-item fs-md border-0">Lorem, ipsum.</li>
                        <li class="list-group-item fs-md border-0">Lorem.</li>
                        <li class="list-group-item fs-md border-0">Lorem, ipsum dolor.</li>
                    </ul>
                </div>
                <div class="card-body d-flex flex-column p-0 py-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Dessert List</div>
                    <ul class="list-group list-group-flush mt-2">
                        <li class="list-group-item fs-md border-0">Lorem, ipsum.</li>
                        <li class="list-group-item fs-md border-0">Lorem, ipsum dolor.</li>
                    </ul>
                </div>

                <a href="my_profile.php" class="main-color w-100 py-2 mt-3 rounded-3 text-center">Publish</a>
            </div>
        </section>
    </main>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>