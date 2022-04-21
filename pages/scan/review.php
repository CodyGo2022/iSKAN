<?php include"../includes/nav-start.php"?>

<div class="d-flex align-item-start flex-column main-text-color h-100 px-4">
    <div class="pt-4">

        <!-- Review module -->
        <section class="review">
            <div class="d-flex justify-content-between mb-2">
                <h6 class="fw-bold">Review</h6>
                <a href="my_list.php" class="text-decoration-none main-text-color">
                    <i class="bi bi-arrow-left fa-lg"></i>
                </a>
            </div>
            
            <div class="mb-4">
                <p class="fs-sm third-text-color mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolorem ipsa sit maxime beatae laborum.</p>
                <label for="review" class="form-label">Emoji range</label>
                <input type="range" class="form-range" min="0" max="4" id="review">
            </div>

            <!-- transfer inline style -->

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="review" style="height: 300px; resize: none; outline: none; font-size: 14px"></textarea>
                <label for="review" class="third-text-color">Write your review here</label>
            </div>

            <div class="d-flex justify-content-center">
                <a href="../home/home.php" type="button" class="view-more mt-3 w-100" style="padding: 6px 12px; height: 45px">Submit review</a>
            </div>
        </section>
    </div>
</div>

<?php include"../includes/nav-end.php"?>