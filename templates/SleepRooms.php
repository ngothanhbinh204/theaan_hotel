<?php
/*
Template Name: SleepRooms
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

    <section class="section_general ss_info page_rooms">
        <div class="container flex flex-col items-center gap-y-[70px]">
            <div class="heading_address flex flex-col items-center">
                <h2>“Sleep is the best mediation" - dalai lama</h2>
                <p>At The Ann Hanoi, our rooms and apartments are designed for ultimate comfort and relaxation. Each
                    room features a harmonious blend of modern amenities and elegant decor, ensuring a serene atmosphere
                    for your stay. Enjoy plush bedding, stunning city views, and thoughtful touches that cater to your
                    every need.</p>
            </div>
            <div class="amennities">
                <h3>In-room amenities</h3>

                <div class="wrapper_amennities">
                    <div class="row">
                        <div class="grid">
                            <?php
                            for ($i = 0; $i <= 6; $i++) {
                                echo '<div class="item_amenities">
                        <div class="item-image">
                        <img src="http://theannhotel.local/wp-content/uploads/2025/03/wifi.svg" alt="" class="item-img">
                        </div>
                        <p class="item-text">High-speed 
Wifi</p>
                    </div>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="grid">
                            <?php
                            for ($i = 0; $i <= 3; $i++) {
                                echo '<div class="item_amenities">
                        <div class="item-image">
                        <img src="http://theannhotel.local/wp-content/uploads/2025/03/wifi.svg" alt="" class="item-img">
                        </div>
                        <p class="item-text">City View</p>
                    </div>';
                            }
                            ?>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>


    <section class="section_general">
        <div class="container full_w_cus">
            <div class="heading_address apartment  flex flex-col items-center">
                <h2>ROOMS & APARTMENTS</h2>
                <p>Unwind with panoramic views that capture the city's vibrant charm.</p>
            </div>

            <div class="container_rooms">
                <div class="list_rooms">
                    <?php
                    $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/rooms.jpg";
                    $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                    $expand_btn = "http://theannhotel.local/wp-content/uploads/2025/03/btn_expand.svg";
                    $amenity_icon = "/wp-content/uploads/2025/03/double-bed_2.svg";

                    for ($i = 0; $i < 4; $i++) { ?>
                    <div class="item_room room-box" data-room-id="city-king">
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
                            <button class="expand-button">
                                <img src="<?= $expand_btn; ?>" alt="Expand">
                            </button>
                        </div>

                        <h3 class="title">City King</h3>
                        <div class="sub_amenities">
                            <?php for ($j = 0; $j < 6; $j++) { ?>
                            <div class="item_">
                                <div class="item-image">
                                    <img src="<?= $amenity_icon; ?>" alt="Amenity" class="item-img">
                                </div>
                                <p class="item-text">1 King Bed</p>
                            </div>
                            <?php } ?>
                        </div>

                        <p class="size">Average Size: 28 - 30 m²</p>
                        <a class="button_details" href="#">View Details</a>
                    </div>
                    <?php } ?>
                </div>

            </div>

    </section>


    <?php get_template_part('template-parts/section_guest'); ?>






    <!-- Fullscreen Gallery -->
    <div class="fullscreen-gallery">
        <button class="close-button">×</button>
        <div class="gallery-content"></div>
    </div>
</main>

<?php get_footer(); ?>