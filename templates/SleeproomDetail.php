<?php
/*
Template Name: Room Detail
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
        <div class="container room_detail flex flex-col md:flex-row gap-y-[50px]">
            <div class="box_info flex flex-col gap-y-9">
                <div class="heading_detail">
                    <h2>City King</h2>
                    <p>Thoughtful touches bring nature into your space with natural elements, reclaimed woods, custom
                        organic cotton mattress and sustainably sourced linens.</p>
                </div>
                <p class="size">Average Size: 28 - 30 m2</p>
                <div class="list_amenities grid grid-cols-2 justify-items-center md:grid-cols-3 px-5 md:px-0">
                    <?php
                    for ($i = 0; $i < 6; $i++) {
                        echo '
                         <div class="box_text_icon_ame">
                        <img src="/wp-content/uploads/2025/03/double-bed_2.svg" alt="">
                        <p class="text">1 King Bed</p>
                    </div>
                        ';
                    }
                    ?>
                </div>
            </div>

            <div class="box_form_order mx-auto">
                <div class="box w-full h-[420px] md:w-[573px] md:h-[392px]  bg-black">
                    box
                </div>
            </div>
        </div>
    </section>

    <section class="section_general ss_room_include md:my-[160px]">
        <div class="container ">
            <div class="heading_address">
                <h2>ALL ROOMS INCLUDE</h2>
            </div>

            <div class="list_include flex flex-col gap-y-6">
                <?php
                for ($i = 0; $i < 2; $i++) { ?>
                <div class="wrapper_include flex flex-col items-start justify-between">
                    <div class="title_sub">
                        <h3>General</h3>
                        <p class="name">City King</p>
                    </div>

                    <div class="list_inc_text flex flex-col md:gap-x-[47px]">
                        <div class="col_left">
                            <?php
                                for ($j = 0; $j < 5; $j++) {
                                    echo '<p class="include_text">High-speed Internet (Cable/Wifi)</p>';
                                }
                                ?>
                        </div>

                        <div class="col_right">
                            <?php
                                for ($j = 0; $j < 5; $j++) {
                                    echo '<p class="include_text">Complimentary 2 Bottles of Water Daily</p>';
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="wrapper_include others flex flex-col items-start justify-between">
                    <div class="title_sub">
                        <h3>General</h3>
                        <p class="name">City King</p>
                    </div>

                    <div class="list_inc_text flex flex-col ">
                        <?php
                        for ($j = 0; $j < 3; $j++) {
                            echo '<p class="include_text">Two bottles of complimentary mineral water(provided to one-time)</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section_general md:my-[160px]">
        <div class="container">
            <div class="wrapper_bed_bath flex flex-col gap-8 md:flex-row">
                <div class="thebed_bath">
                    <div class="box_thebed">
                        <div class="box_img">
                            <img src="/wp-content/uploads/2025/03/the_bed.jpg" alt="">
                        </div>
                        <h3 class="title">The bed</h3>
                        <p>
                            Your king bed has been made with the comfortable, all natural elenments: organic cotton
                            linens,
                            feather pillow and sustainable sourced comforter.
                        </p>
                    </div>
                </div>
                <div class="thebed_bath">
                    <div class="box_thebed">
                        <div class="box_img">
                            <img src="/wp-content/uploads/2025/03/the_bed.jpg" alt="">
                        </div>
                        <h3 class="title">The bed</h3>
                        <p>
                            Your king bed has been made with the comfortable, all natural elenments: organic cotton
                            linens,
                            feather pillow and sustainable sourced comforter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_general other_rooms md:my-[160px]">
        <div class="container">
            <h2 class="other_title">OTHER ROOMS YOU MAY LIKE</h2>
            <div class="wrapper_other container_rooms">
                <div class="list_rooms flex flex-col md:flex-row">
                    <?php
                    $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/rooms.jpg";
                    $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                    $expand_btn = "http://theannhotel.local/wp-content/uploads/2025/03/btn_expand.svg";
                    $amenity_icon = "/wp-content/uploads/2025/03/double-bed_2.svg";

                    for ($i = 0; $i < 2; $i++) { ?>
                    <?php get_template_part('template-parts/room_item'); ?>

                    <?php } ?>
                </div>
            </div>
        </div>

    </section>


    <section class="section_general ss_details_info md:my-[160px] md:mb-[150px]">
        <div class="container ctn px-0 md:px-6 md:max-container">
            <div class="box">
                <h2>Details</h2>
                <div class="gr_content flex flex-col gap-y-3">
                    <p>Room layout and interior may differ from images according to room location.</p>
                    <p>Room layout and interior may differ from images .</p>
                    <p>Room layout and interior may differ from images according .</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fullscreen Gallery -->
    <div class="fullscreen-gallery">
        <button class="close-button">×</button>
        <div class="gallery-content"></div>
    </div>
</main>

<?php get_footer(); ?>