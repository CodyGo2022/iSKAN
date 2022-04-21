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
    <main class="main">
        <div class="d-flex align-item-start flex-column main-text-color h-100 px-4">
            <div class="pt-5">
                <div class="d-flex flex-row justify-content-between">
                    <h5 class="fw-bold pb-2">Verification</h5>
                    <a href="register_phase_one.php" class="main-text-color">
                        <i class="bi bi-arrow-left fa-lg"></i>
                    </a>
                </div>  

                <p class="pb-2 fs-6 second-text-color">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>

                <div class="form-floating">
                    <input type="number" class="form-control" id="floatingOTP" placeholder="OTP">
                    <label for="floatingOTP">OTP</label>
                </div>

                <span class="d-flex justify-content-center fs-6 second-text-color mt-2">Didn't get code? <a href="#" class="fifth-text-color">Resend OTP</a></span>
            </div>
            
            <div class="d-flex  align-items-end pb-5 w-100 h-100">
                <a href="register_phase_three.php" type="button" class="outline-main-color w-100 mt-5 py-2 rounded-3 text-center">
                    <!-- <i class="bi bi-patch-check fa-lg"></i> -->
                    Verify
                </a>
            </div>
        </div>
    </main>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>