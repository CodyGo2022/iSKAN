<?php include"../includes/nav-start.php"?>

<section class="d-flex flex-column main-text-color">
    <div class="my-store-header">
        <div class="px-4">
            <div class="d-flex justify-content-between">
                <h6 class="fw-bold mb-0 fourth-text-color">My Store</h6>
                <a href="my_store.php" class="text-decoration-none fourth-text-color">
                    <i class="bi bi-arrow-left fa-lg"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card py-4" style="height: 118vh">
        <!-- Food section -->
        <section class="add-food mb-4">
            <h6 class="fw-bold mb-3 px-4">Food</h6>
            <div class="wrapper">
                <div class="card shadow-sm ms-4">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100 p-2">
                        <i class="bi bi-plus-circle second-text-color"></i>
                        <a href="create_item.php" class="card-title stretched-link text-decoration-none second-text-color view-all">Add Item</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Drink section -->
        <section class="add-food mb-4">
            <h6 class="fw-bold mb-3 px-4">Drink</h6>
            <div class="wrapper">
                <div class="card shadow-sm ms-4">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100 p-2">
                        <i class="bi bi-plus-circle second-text-color"></i>
                        <a href="#" class="card-title stretched-link text-decoration-none second-text-color view-all">Add Item</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dessert section -->
        <section class="add-food mb-4">
            <h6 class="fw-bold mb-3 px-4">Dessert</h6>
            <div class="wrapper">
                <div class="card shadow-sm ms-4">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100 p-2">
                        <i class="bi bi-plus-circle second-text-color"></i>
                        <a href="#" class="card-title stretched-link text-decoration-none second-text-color view-all">Add Item</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Save section -->
        <section class="mb-4">
            <div class="d-flex align-items-end h-100 px-4">
                <a href="save_item.php" type="button" class="main-color w-100 py-2 rounded-3 text-center">Save Menu list</a>
            </div>
        </section>
    </div>
</section>

<?php include"../includes/nav-end.php"?>