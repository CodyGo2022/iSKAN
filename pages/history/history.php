<?php include"../includes/nav-start.php"?>

<div class="d-flex align-item-start flex-column main-text-color px-4">
    <div class="pt-4">
        
        <!-- Purchase history module -->
        <section class="purhcase-history">
            <div class="d-flex justify-content-between">
                <h6 class="fw-bold mb-3">My Purchase History</h6>
                <a href="../home/home.php" class="text-decoration-none main-text-color">
                    <i class="bi bi-arrow-left fa-lg"></i>
                </a>
            </div>

            <section>
                <div class="card shadow-sm mb-3">
                    <div class="d-flex history-card">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <p class="card-title fs-md fw-bold main-text-color mb-0">Lorem, ipsum.</p>
                                <p class="card-text fs-md fw-bold main-text-color mb-0"><span class="me-1">&#8369;</span>99.00</p>
                            </div>

                            <div>
                                <p class="fs-sm m-0">3 Order(s)</p>

                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="fs-sm third-text-color">29 March, Tues</span>
                                    <a href="history_info.php" class="view-info fs-sm">view more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>

<?php include"../includes/nav-end.php"?>