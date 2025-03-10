<?php
/*
Template Name: Meeting&Conference
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


    <section class="section_general md:my-[160px] md:mt-[84px]">
        <div class="container title_subtitle flex flex-col items-center gap-y-[42px]">
            <h2 class="title">Events & Meetings</h2>
            <p class="description">The Ann Hanoi offers a diverse range of Meeting and Conference spaces, perfectly
                suited for various occasions, from formal conferences and corporate gatherings to intimate private
                celebrations. Designed with a modern and sophisticated touch, our venues feature flexible setups that
                can be tailored to meet your specific needs. Whether you prefer a cozy and elegant ambiance for
                exclusive meetings or an open, spacious setting for a grand event, we ensure a seamless and memorable
                experience. Our dedicated team is always ready to provide expert consultation and personalized
                arrangements to make every event truly exceptional.</p>
        </div>
    </section>

    <section class="section_general md:my-[160px]">
        <div class="container container_rooms container_dining container_facilities">
            <div class="list_dining list_facilities !gap-y-14 md:!gap-y-20 list_rooms">
                <div class="box_facilities flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[68px] gap-y-8">
                    <?php
                    $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/mettings-1.jpg";
                    $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                    ?>
                    <div class="item_room room-box item_onlyImage item_onlyImage_Page  w-full md:w-9/12 wh_1000_700"
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
                    <div class="group_info flex flex-col justify-center gap-5 md:gap-[78px] w-full md:w-3/12">
                        <div class="title_des">
                            <h2 class="title">
                                meetings
                            </h2>
                        </div>
                        <p class="description">
                            Host your one-of-a-kind meeting in one of our unique spaces. We offer planning designed to
                            support your meeting's goals, as well as options for fully catered meetings or quick snacks
                            to energize you during breaks.
                        </p>
                        <a class="button_details link link--carpo" href="">EXPLORE MORE</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/exployer_section'); ?>

    <?php get_template_part('template-parts/section_guest'); ?>

</main>

<?php get_footer(); ?>