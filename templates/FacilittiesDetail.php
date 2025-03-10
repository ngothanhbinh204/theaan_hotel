<?php
/*
Template Name: Facilities Detail
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


    <section class="section_general md:mb-[60px] md:mt-[110px]">
        <div
            class="container title_subtitle facilities_head flex flex-col items-center gap-y-[24px] md:!max-w-container">
            <h2 class="title">GYM Centre</h2>
            <p class="description ">Our state-of-the-art facility is equipped with modern workout machines and free
                weights to help you maintain your routine. Enjoy a motivating environment with ample space for cardio,
                strength training, and more. Whether you're a seasoned athlete or just starting out, our gym is the
                perfect place to energize your day and stay fit during your stay. </p>
        </div>
    </section>

    <section class="section_general md:mb-20 md:mt-[60px]">
        <div class="container">
            <div class="list_dining list_ovv">
                <div class="box box_dining flex flex-col md:flex-row gap-y-8 gap-x-40">
                    <h2 class="title min-w-[205px]">

                        Overview </h2>
                    <div class="group_info">
                        <div class="list_info flex flex-col gap-6">
                            <div class="item flex flex-row gap-2">
                                <p class="cate_">Type</p>
                                <p class="value">Fitness</p>
                            </div>
                            <div class="item flex flex-row gap-2">
                                <p class="cate_">Hours</p>
                                <p class="value">06.00am–10.00pm (Mon - Sun)</p>
                            </div>
                            <div class="item flex flex-row gap-2">
                                <p class="cate_">Floor</p>
                                <p class="value">Floor 12F</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box_dining flex flex-col md:flex-row gap-y-8 gap-x-40">
                    <h2 class="title min-w-[205px]">

                        Details </h2>
                    <div class="group_info">
                        <div class="list_info flex flex-col gap-6">
                            <div class="item flex flex-row gap-2">
                                <p class="value leading-[150%] !text-[#363636]">Adults only after 7:00 PM. Access is
                                    restricted for children and infants.</p>
                            </div>
                            <div class="item flex flex-row gap-2">
                                <p class="value leading-[150%] !text-[#363636]">Adults only after 7:00 PM. Access is
                                    restricted for children and infants.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_general md:my-[160px]">
        <div class="container container_rooms container_dining container_facilities">
            <div class="list_dining list_facilities !gap-y-14 md:!gap-y-20 list_rooms">
                <div
                    class="box_facilities box_facilities_details flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
                    <?php
                    $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/dining_img.jpg";
                    $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                    ?>
                    <div class="item_room room-box item_onlyImage item_onlyImage_Page w-full md:w-9/12"
                        data-room-id="city-king">
                        <div class="slider">
                            <div class="slides-container">
                                <?php for ($k = 0; $k < 3; $k++) { ?>
                                <img src="<?= $room_image; ?>" alt="City King room" class="slide">
                                <?php } ?>
                            </div>

                            <button class="nav-button prev">
                                <img src="<?= $arrow_left; ?>" alt="Previous">
                            </button>
                            <button class="nav-button next">
                                <img src="<?= $arrow_left; ?>" alt="Next">
                            </button>
                            <div class="pagination_handle"></div>
                        </div>
                    </div>
                    <div class="group_info flex flex-col justify-center gap-5 md:gap-y-9 w-full md:w-3/12">
                        <div class="title_des title_des_detail">
                            <h2 class="title">
                                Hotel Sauna
                            </h2>
                        </div>
                        <p class="description">
                            Hotel sauna provides shower , wet and dry saunas to offer relaxation after a bustling day.
                        </p>
                        <div class="list_info flex flex-col gap-3 md:gap-[28px]">
                            <div class="item">
                                <p>Type </p>
                                <span>Fitness</span>
                            </div>
                            <div class="item">
                                <p>Floor </p>
                                <span>Floor 12F</span>
                            </div>

                            <div class="item">
                                <p>Hours </p>
                                <span>06.00am–10.00pm (Mon - Sun)</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part('./template-parts/section_contact'); ?>


</main>

<?php get_footer(); ?>