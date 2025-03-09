<?php
/*
Template Name: Facilities
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
            <h2 class="title">Facilities</h2>
            <p class="description">Unwind in our luxurious spa, stay active in our state-of-the-art gym, and take a
                refreshing dip in the rooftop pool while enjoying stunning views of Hanoi. Don’t miss our Sky Bar for
                delightful drinks and vibrant nightlife. </p>
        </div>
    </section>

    <section class="section_general md:my-[160px]">
        <div class="container container_rooms container_dining container_facilities">
            <div class="list_dining list_facilities !gap-y-14 md:!gap-y-20 list_rooms">
                <div class="box_facilities flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[68px] gap-y-8">
                    <?php
                    $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/dining_img.jpg";
                    $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                    ?>
                    <div class="item_room room-box item_onlyImage w-full md:w-9/12" data-room-id="city-king">
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
                    <div class="group_info flex flex-col justify-center gap-5 md:gap-[78px] w-full md:w-3/12">
                        <div class="title_des">
                            <h2 class="title">
                                Gym Center
                            </h2>
                        </div>
                        <div class="list_info flex flex-col gap-5 md:gap-[78px]">
                            <div class="item">
                                <p>Type </p>
                                <span>Fitness</span>
                            </div>
                            <div class="item">
                                <p>Location </p>
                                <span>Floor 12F</span>
                            </div>

                        </div>
                        <a class="button_details" href="">VIEW DETAILS</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/exployer_section'); ?>


</main>

<?php get_footer(); ?>