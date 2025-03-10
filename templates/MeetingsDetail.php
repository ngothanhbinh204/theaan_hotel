<?php
/*
Template Name: Meetings Detail
*/
get_header();
?>

<main class="homepage">

    <!-- Banner hero  -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Banner hero -->
    <?php get_template_part('./template-parts/section_banner_hero'); ?>

    <?php endwhile;
    endif; ?>

    <!-- Info TheAn -->


    <section class="section_general md:my-[160px] md:mt-[110px]">
        <div class="container container_rooms container_dining container_facilities  mx-auto">

            <div class="container container_rooms container_features px-0">
                <div class="list_dining list_facilities !gap-y-14 md:!gap-y-20 list_rooms">
                    <div
                        class="box_facilities box_facilities_details flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
                        <?php
                        $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/meeting_2-1.jpg";
                        $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                        ?>
                        <div class="item_room room-box item_onlyImage item_onlyImage_Page w-full md:w-9/12 wh_1000_750"
                            data-room-id="city-king">
                            <div class="slider">
                                <div class="slides-container">
                                    <?php for ($k = 0; $k < 3; $k++) { ?>
                                    <img src="<?= $room_image; ?>" alt="City King room" class="slide">
                                    <?php } ?>
                                </div>

                                <div class="item_rooms wrapper_button_pagination">
                                    <button class="nav-button prev">
                                        <img src="<?= $arrow_left; ?>" alt="Previous">
                                    </button>
                                    <button class="nav-button next">
                                        <img src="<?= $arrow_left; ?>" alt="Next">
                                    </button>
                                    <div class="pagination_handle"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="group_info flex flex-col justify-center gap-5 md:gap-y-9 w-full md:w-3/12 md:max-w-[326px]">
                            <div class="title_des title_des_detail">
                                <h2 class="title">
                                    Ha Noi
                                </h2>
                            </div>
                            <p class="description">
                                Located on the M floor of the hotel, the Hội An is an event space that can accommodate
                                up to 65 people and and powered by technology with sound systems and projector screens -
                                discover the perfect space for next meeting or event
                            </p>

                            <div class="list_info flex flex-col gap-3 md:gap-[28px]">
                                <div class="item">
                                    <p>Capacity </p>
                                    <span>15 - 145</span>
                                </div>
                                <div class="item">
                                    <p>Size </p>
                                    <span>59 - 155m2</span>
                                </div>

                                <div class="item">
                                    <p>Location </p>
                                    <span>M Floor</span>
                                </div>

                            </div>

                            <a href="" class="button_details link link--carpo">
                                <span>CAPACITY BY LAYOUT</span>
                            </a>

                        </div>
                    </div>

                    <div
                        class="box_facilities box_facilities_details flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
                        <?php
                        $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/meeting_2-1.jpg";
                        $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                        ?>
                        <div class="item_room room-box item_onlyImage item_onlyImage_Page w-full md:w-9/12 wh_1000_750"
                            data-room-id="city-king">
                            <div class="slider">
                                <div class="slides-container">
                                    <?php for ($k = 0; $k < 3; $k++) { ?>
                                    <img src="<?= $room_image; ?>" alt="City King room" class="slide">
                                    <?php } ?>
                                </div>

                                <div class="item_rooms wrapper_button_pagination">
                                    <button class="nav-button prev">
                                        <img src="<?= $arrow_left; ?>" alt="Previous">
                                    </button>
                                    <button class="nav-button next">
                                        <img src="<?= $arrow_left; ?>" alt="Next">
                                    </button>
                                    <div class="pagination_handle"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="group_info flex flex-col justify-center gap-5 md:gap-y-9 w-full md:w-3/12 md:max-w-[326px]">
                            <div class="title_des title_des_detail">
                                <h2 class="title">
                                    Ha Noi
                                </h2>
                            </div>
                            <p class="description">
                                The Hà Nội has space to accommodate 160 guests standing. The space is made up of two
                                rooms and can be divided or opened up as best fit.
                            </p>

                            <div class="list_info flex flex-col gap-3 md:gap-[28px]">
                                <div class="item">
                                    <p>Capacity </p>
                                    <span>15 - 145</span>
                                </div>
                                <div class="item">
                                    <p>Size </p>
                                    <span>59 - 155m2</span>
                                </div>

                                <div class="item">
                                    <p>Location </p>
                                    <span>M Floor</span>
                                </div>

                            </div>

                            <a href="" class="button_details link link--carpo">
                                <span>CAPACITY BY LAYOUT</span>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('./template-parts/section_contact'); ?>


</main>

<?php get_footer(); ?>