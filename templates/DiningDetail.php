<?php
/*
Template Name: Dining Detail
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


    <section class="section_general md:my-[150px] md:mt-[110px]">
        <div class="container title_subtitle flex flex-col items-center gap-y-6">
            <p class="name">The Onyx House</p>
            <h1 class="title">FRESH FLAVORS, LOCAL INGREDIENTS - ELEVATE YOUR DINNER EXPERIENCE.</h1>
        </div>
    </section>

    <section ion class="section_general md:my-[160px]">
        <div class="container container_rooms container_dining">
            <div class="list_dining !gap-y-14 md:!gap-y-20 list_rooms">
                <div
                    class="box_dining flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8 max-w-[1380px]">
                    <?php
                    $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/dining_img.jpg";
                    $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                    ?>
                    <div class="item_room room-box item_onlyImage item_onlyImage_Page w-full md:w-9/12 max-w-[930px] max-h-[908px]"
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
                    <div class="group_info flex flex-col gap-7 md:gap-9 w-full max-w-[440px]">
                        <div class="title_des">
                            <!-- <h2 class="title">
                                THE ONYX HOUSE
                            </h2> -->
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
                        <p class="note_">(Last bookings are 15 minutes before closing times)</p>
                        <a class="button_details link link--carpo " href="">Food menu</a>
                        <a class="button_details link link--carpo " href="">Drink Menu</a>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="sectione_general">
        <div class="container">
            <div class="list_taste flex flex-col gap-y-[100px] md:gap-y-[150px]">
                <div class="box_taste flex flex-col items-center gap-x-[40px] lg:gap-x-[100px] gap-y-10 md:flex-row">

                    <?php get_template_part('./template-parts/slide_image_item'); ?>

                    <div class="box_info flex flex-col gap-y-[24px] md:gap-y-[42px] md:order-first">
                        <h2 class="title">
                            BRUNCH
                        </h2>
                        <p class="description">
                            With a continued emphasis on choosing the freshest and healthiest local ingredients, our
                            Brunch menu will provide you with an alluring and healthful culinary experience. Our Weekend
                            Brunch menu offers a variety of sweet and savory dishes, Western or Asian, making it easier
                            for you to choose according to your preference. Brunch is served from 8AM - 3PM weekend
                            (Saturday & Sunday) at An Lam.
                        </p>
                        <a href="" class="button_details link link--carpo  ">Reserve A Table</a>
                    </div>

                </div>

                <div class="box_taste flex flex-col items-center gap-x-[40px] lg:gap-x-[100px] gap-y-10 md:flex-row">

                    <?php get_template_part('./template-parts/slide_image_item'); ?>

                    <div class="box_info flex flex-col gap-y-[24px] md:gap-y-[42px] md:order-first">
                        <h2 class="title">
                            BRUNCH
                        </h2>
                        <p class="description">
                            With a continued emphasis on choosing the freshest and healthiest local ingredients, our
                            Brunch menu will provide you with an alluring and healthful culinary experience. Our Weekend
                            Brunch menu offers a variety of sweet and savory dishes, Western or Asian, making it easier
                            for you to choose according to your preference. Brunch is served from 8AM - 3PM weekend
                            (Saturday & Sunday) at An Lam.
                        </p>
                        <a href="" class="button_details link link--carpo ">
                            <span>Reserve A Table</span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="section_general taste_">
        <div class="container max-w-cus px-0">
            <?php
            $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/dining_img.jpg";
            $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
            $arrow_right = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-right.svg";
            ?>

            <div class="splide" id="SliderTaste">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide slider_taste">
                            <div class="wrapper_ flex flex-col justify-center items-center">
                                <div class="img_">
                                    <img src="<?= $room_image; ?>" alt="">
                                </div>
                                <p class="content_">
                                    Indulge in an exquisite culinary journey at The Ann Restaurant. Reserve your table
                                    today and
                                    delight in the finest Vietnamese flavors, paired with a warm and inviting
                                    atmosphere—perfect for
                                    any occasion.
                                </p>
                            </div>
                        </li>
                        <li class="splide__slide slider_taste">
                            <div class="wrapper_ flex flex-col justify-center items-center">
                                <div class="img_">
                                    <img src="<?= $room_image; ?>" alt="">
                                </div>
                                <p class="content_">
                                    Indulge in an exquisite culinary journey at The Ann Restaurant. Reserve your table
                                    today and
                                    delight in the finest Vietnamese flavors, paired with a warm and inviting
                                    atmosphere—perfect for
                                    any occasion.
                                </p>
                            </div>
                        </li>
                        <li class="splide__slide slider_taste">
                            <div class="wrapper_ flex flex-col justify-center items-center">
                                <div class="img_">
                                    <img src="<?= $room_image; ?>" alt="">
                                </div>
                                <p class="content_">
                                    Indulge in an exquisite culinary journey at The Ann Restaurant. Reserve your table
                                    today and
                                    delight in the finest Vietnamese flavors, paired with a warm and inviting
                                    atmosphere—perfect for
                                    any occasion.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=" wrapper_ctrl">
                    <button id="customPrev_Taste" class="nav-button custom-arrow prev">
                        <img src="<?= $arrow_left; ?>" alt="Previous">
                    </button>
                    <button id="customNext_Taste" class="nav-button custom-arrow next">
                        <img src="<?= $arrow_left; ?>" alt="Next">
                    </button>
                </div>
            </div>
        </div>

    </section>

    <section class="section_general">
        <div class="container max-w-cus px-0">
            <div class="layout_3">
                <p class="content">Savor the flavors of our restaurant in the privacy of your room—no reservations, no
                    rush. Enjoy
                    delicious meals at your convenience, any time of day, with attentive service and ultimate comfort.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-7">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        echo '
                      <div class="flex flex-col justify-end items-center item relative">
                        <div class="box_img img_bg_cus">
                            <img src="http://theannhotel.local/wp-content/uploads/2025/03/img2.jpg" alt="">
                        </div>
                        <h3 class="title">
                            Breakfast
                        </h3>
                    </div>
                    ';
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>


    <?php get_template_part('./template-parts/section_contact'); ?>


    <!-- Fullscreen Gallery -->
    <div class="fullscreen-gallery">
        <button class="close-button">×</button>
        <div class="gallery-content"></div>
    </div>
</main>

<?php get_footer(); ?>