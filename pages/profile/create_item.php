<?php include"../includes/nav-start.php"?>

<section class="d-flex flex-column main-text-color">
    <div class="create-item-header">
        <div class="px-4">
            <div class="d-flex justify-content-between">
                <h6 class="fw-bold mb-0 fourth-text-color">My Store</h6>
                <a href="my_menu.php" class="text-decoration-none fourth-text-color">
                    <i class="bi bi-arrow-left fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex align-item-start card px-4 py-4" style="margin-bottom: 150px">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPhonenumber" placeholder="Phone number">
            <label for="floatingPhonenumber">Image</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPhonenumber" placeholder="Phone number">
            <label for="floatingPhonenumber">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPhonenumber" placeholder="Phone number">
            <label for="floatingPhonenumber">Details</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPhonenumber" placeholder="Phone number">
            <label for="floatingPhonenumber">Available Time</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPhonenumber" placeholder="Phone number">
            <label for="floatingPhonenumber">Price</label>
        </div>
    </div>
    <div class="d-flex align-items-end pb-5 h-100 px-4">
        <a href="my_menu.php" type="button" class="main-color w-100 mt-5 py-2 rounded-3 text-center">Add Item</a>
    </div>
</section>

<?php include"../includes/nav-end.php"?>