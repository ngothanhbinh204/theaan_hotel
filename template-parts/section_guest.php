<section class="section_general">
    <div class="container relative wrapper_guest pt-10 pb-[142px]">
        <div class="heading_address">
            <h2>Guest Love</h2>
        </div>
        <!-- <div class="list_guest">
            <div class="box_guest">
                <div class="top_content">
                    <div class="name">
                        <h3>Tim Y</h3>
                    </div>
                    <div class="list_star">
                        <?php
                        for ($i = 0; $i <= 5; $i++) {
                            echo '
                        <img src="/wp-content/uploads/2025/03/star.svg" alt="">';
                        }

                        ?>
                    </div>

                    <p class="date">October 23</p>
                </div>
                <div class="content flex flex-col gap-y-2">
                    <p class="content_title line-clamp-1">
                        AnnHotel..Hanoi..excellent staff
                    </p>
                    <p class="main_content line-clamp-6">
                        We spent two nights in the Ann hotel in Hanoi Vietnam. The hotel was very clean,
                        spacious and accommodating. The food venues were also excellent. One employee stood out
                        about whom I would like to send a special compliment. Her name was Nhung at the front
                        desk of the hotel. Not only did she greet us with a warm gracious sincere smile..
                    </p>

                    <a href="button_details_2">See more</a>
                </div>
                <div class="bottom_content flex flex-row items-center gap-x-2">
                    <img src="/wp-content/uploads/2025/03/cumeo.svg" alt="">
                    <div class="content_ft">
                        <span>Poster on <a href="#">TripAdvisor</a>
                        </span>
                    </div>
                </div>
            </div>

        </div> -->

        <div class="splide" id="guest-slider">
            <div class="splide__track">
                <div class="splide__list">
                    <?php for ($j = 0; $j < 6; $j++) : ?>
                        <div class="splide__slide list_guest">
                            <div class="box_guest">
                                <div class="top_content">
                                    <div class="name">
                                        <h3>Tim Y</h3>
                                    </div>
                                    <div class="list_star">
                                        <?php
                                        for ($i = 0; $i < 5; $i++) {
                                            echo '<img src="/wp-content/uploads/2025/03/star.svg" alt="">';
                                        }
                                        ?>
                                    </div>
                                    <p class="date">October 23</p>
                                </div>
                                <div class="content flex flex-col gap-y-2">
                                    <p class="content_title line-clamp-1">
                                        AnnHotel..Hanoi..excellent staff
                                    </p>
                                    <p class="main_content line-clamp-6">
                                        We spent two nights in the Ann hotel in Hanoi Vietnam...
                                    </p>
                                    <a href="" class="button_details_2 link link--carpo">See more</a>
                                </div>
                                <div class="bottom_content flex flex-row items-center gap-x-2">
                                    <img src="/wp-content/uploads/2025/03/cumeo.svg" alt="">
                                    <div class="content_ft">
                                        <span>Poster on <a href="#">TripAdvisor</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="wrapper_button">
            <button id="customPrev_guest" class="custom-arrow prev">
                <img src="/wp-content/uploads/2025/03/arrow-left.svg" alt="Previous">
            </button>

            <button id="customNext_guest" class="custom-arrow next">
                <img src="/wp-content/uploads/2025/03/arrow-left.svg" alt="Next">
            </button>
        </div>
    </div>
</section>