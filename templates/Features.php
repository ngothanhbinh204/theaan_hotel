<?php
/*
Template Name: Features
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


    <section class="section_general md:mt-[110px]">
        <div class="container title_subtitle features_head flex flex-col items-center gap-y-[42px] !text-[#000000B2]">
            <h2 class="title">Features</h2>
            <div class="gr md:!max-w-[954px] flex flex-col gap-y-10">
                <p class="description">Unwind in our luxurious spa, stay active in our state-of-the-art gym, and take
                    a
                    refreshing dip in the rooftop pool while enjoying stunning views of Hanoi. Don’t miss our Sky Bar
                    for
                    delightful drinks and vibrant nightlife.</p>
                <p class="description ">Join our engaging workshops and cooking classes to immerse yourself in local
                    culture
                    and cuisine. Plus, our friendly staff is here to guide you to nearby attractions, including the
                    iconic
                    Hoan Kiem Lake, the historic Old Quarter, and more. Experience the best of Hanoi with us!</p>
            </div>
        </div>
    </section>

    <section class="section_general">
        <div class="container">
            <h2 class="heading_base uppercase mb-10 md:mb-20 ">
                Happenings
            </h2>
            <div class="wrapper grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="item_happenings relative">
                    <div class="box_img box_img_theme__">
                        <img src="http://theannhotel.local/wp-content/uploads/2025/03/hapenings_img.png" alt="">
                    </div>
                    <h3 class="title">
                        Personal Workshops
                    </h3>
                </div>
                <div class="item_happenings relative">
                    <div class="box_img box_img_theme__">
                        <img src="http://theannhotel.local/wp-content/uploads/2025/03/hapenings_img.png" alt="">
                    </div>
                    <h3 class="title">
                        Personal Workshops
                    </h3>
                </div>
                <div class="item_happenings relative">
                    <div class="box_img box_img_theme__">
                        <img src="http://theannhotel.local/wp-content/uploads/2025/03/hapenings_img.png" alt="">
                    </div>
                    <h3 class="title">
                        Personal Workshops
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="section_general md:my-[160px]">
        <div class="container container_rooms container_dining container_facilities  mx-auto">
            <h2 class="heading_base uppercase mb-10 md:mb-20">
                NEIGHBORHOOD GUIDE
            </h2>
            <div class="container container_rooms container_features px-0">
                <div class="list_dining list_facilities !gap-y-14 md:!gap-y-20 list_rooms">
                    <div
                        class="box_facilities box_facilities_details flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
                        <?php
                        $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/Feature_img.png";
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
                                    hoa lo prision
                                </h2>
                            </div>
                            <p class="description">
                                Explore the historical significance of Hoa Lo Prison, a powerful symbol of Vietnam’s
                                turbulent past. Originally built by the French in the late 19th century, this site has
                                witnessed profound stories of resilience and struggle. Today, it stands as a museum,
                                offering insight into the lives of political prisoners and the impact of the Vietnam
                                War.
                            </p>
                            <p class="description italic">
                                (Image from Internet)
                            </p>

                        </div>
                    </div>

                    <div
                        class="box_facilities box_facilities_details flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
                        <?php
                        $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/Feature_img.png";
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
                                    hoa lo prision
                                </h2>
                            </div>
                            <p class="description">
                                Explore the historical significance of Hoa Lo Prison, a powerful symbol of Vietnam’s
                                turbulent past. Originally built by the French in the late 19th century, this site has
                                witnessed profound stories of resilience and struggle. Today, it stands as a museum,
                                offering insight into the lives of political prisoners and the impact of the Vietnam
                                War.
                            </p>
                            <p class="description italic">
                                (Image from Internet)
                            </p>

                        </div>
                    </div>

                    <div
                        class="box_facilities box_facilities_details flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
                        <?php
                        $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/Feature_img.png";
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
                                    hoa lo prision
                                </h2>
                            </div>
                            <p class="description">
                                Explore the historical significance of Hoa Lo Prison, a powerful symbol of Vietnam’s
                                turbulent past. Originally built by the French in the late 19th century, this site has
                                witnessed profound stories of resilience and struggle. Today, it stands as a museum,
                                offering insight into the lives of political prisoners and the impact of the Vietnam
                                War.
                            </p>
                            <p class="description italic">
                                (Image from Internet)
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('./template-parts/section_guest'); ?>


</main>

<?php get_footer(); ?>