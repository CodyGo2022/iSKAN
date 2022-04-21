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
    <main class="my-profile-content">
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
                <a href="edit_profile.php" class="navbar-brand d-flex flex-column mx-0 px-2 align-items-center main-text-color active-icon">
                    <i class="bi bi-person"></i>
                    <p class="mb-0">Profile</p>
                </a>
            </div>
        </nav>

        <section class="d-flex flex-column main-text-color">
            <div class="edit-profile-header">
                <div class="px-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold mb-0 fourth-text-color">My profile</h6>
                        <a href="my_profile.php" class="text-decoration-none fourth-text-color">
                            <i class="bi bi-arrow-left fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card px-4 py-4">
                <div class="card-body d-flex flex-column align-items-center">
                    <div class="edit-img-profile">
                        <img src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-horisontal.jpg" class="mb-0" alt="">
                        <button>
                            <i class="bi bi-pen"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body d-flex flex-column pt-3 pb-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Firstname</div>
                    <p class="card-text fs-md">Juan</p>
                </div>
                <div class="card-body d-flex flex-column pt-3 pb-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Middlename</div>
                    <p class="card-text fs-md">Gomez</p>
                </div>
                <div class="card-body d-flex flex-column pt-3 pb-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Lastname</div>
                    <p class="card-text fs-md">Dela Cruz</p>
                </div>
                <div class="card-body d-flex flex-column pt-3 pb-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Phonenumber</div>
                    <p class="card-text fs-md">09999999992</p>
                </div>
                <div class="card-body d-flex flex-column pt-3 pb-2 underline">
                    <div class="card-title fs-sm fw-bold mb-0">Address</div>
                    <p class="card-text fs-md">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, corporis.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>