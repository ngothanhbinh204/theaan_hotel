<?php
/*
Template Name: DiningPage
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
        <div class="container title_subtitle flex flex-col items-center gap-y-8">
            <h2 class="title">Dining</h2>
            <p class="description">Indulge in a culinary journey featuring locally sourced ingredients and expertly
                crafted dishes. From our vibrant dining options to refreshing cocktails, we invite you to savor every
                moment.</p>
        </div>
    </section>

    <section class="section_general md:my-[160px]">
        <div class="container container_rooms container_dining">
            <div class="list_dining list_rooms">
                <div class="box_dining flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
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
                        </div>
                    </div>
                    <div class="group_info flex flex-col gap-7 md:gap-9 w-full md:w-3/12">
                        <div class="title_des">
                            <h2 class="title">
                                THE ONYX HOUSE
                            </h2>
                            <p class="description">
                                At The Onyx House, we take our name seriously so you can be sure our ingredients are the
                                freshest, finest and healthiest our team can find, and of course we always try to source
                                locally. Dining is relaxed and casual here, with a clean-living menu of Vietnamese
                                specialities and international favourites. With indoor seating , our informal diner is
                                bursting with the market-fresh flavours of Vietnam and beyond.
                            </p>
                        </div>
                        <div class="list_info flex flex-col gap-5 md:gap-7">
                            <div class="item">
                                <p>Buffet Breakfast </p>
                                <span>6.00am-10.00am</span>
                            </div>
                            <div class="item">
                                <p>Lunch </p>
                                <span>11.30am–02.00pm</span>
                            </div>
                            <div class="item">
                                <p>Dinner</p>
                                <span>6.00am-10.00am</span>
                            </div>

                            <div class="item">
                                <p>Floor </p>
                                <span>Ground Floor - Press 1609</span>
                            </div>
                        </div>
                        <a class="button_details" href="">VIEW DETAILS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_template_part('./template-parts/section_guest'); ?>


    <!-- Fullscreen Gallery -->
    <div class="fullscreen-gallery">
        <button class="close-button">×</button>
        <div class="gallery-content"></div>
    </div>
</main>

<?php get_footer(); ?>