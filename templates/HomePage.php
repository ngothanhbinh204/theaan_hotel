<?php
/*
Template Name: Homepage
*/
get_header();
?>

<main class="homepage">

    <!-- Banner hero  -->
    <?php get_template_part('template-parts/section_banner_hero'); ?>

    <!-- Info TheAn -->

    <section class="section_general">
        <div class="container flex flex-col items-center">
            <div class="heading_address flex flex-col items-center">
                <h2>THE ANN HANOI HOTEL & SPA</h2>
                <h3>Ha Noi, VietNam</h3>
                <div class="flex flex-col items-center">
                    <h4>38 Hang Chuoi</h4>
                    <div class="line_space"></div>
                    <a href="">Get Direction</a>
                </div>
            </div>
            <div class="amennities">
                <p>Perfect blend of modern elegance and traditional Vietnamese charm with serene atmosphere, garden, and
                    native greenery - all designed to restore your balance after a long day exploring the city or
                    working.</p>

                <div class="grid">
                    <?php
                    for ($i = 0; $i <= 5; $i++) {
                        echo '<div class="item_amenities">
                        <div class="item-image">
                            <img src="./wp-content/uploads/2025/03/city-one.svg" alt="" class="item-img">
                        </div>
                        <p class="item-text">City View</p>
                    </div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>


    <section class="section_general">
        <div class="container">
            <div class="heading_address  flex flex-col items-center">
                <h2>ROOMS & APARTMENTS</h2>
                <p>Unwind with panoramic views that capture the city's vibrant charm.</p>
            </div>

            <div class="list_rooms">
                <div class="item_room">
                    <div class="room_image absolute inset-0 w-full h-full object-cover">
                        <img class="" src="/wp-content/uploads/2025/03/rooms.jpg" alt="">
                    </div>
                    <h3 class="title">City King</h3>
                    <p class="size">
                        Average Size: 28 - 30 m2
                    </p>
                    <div class="sub_amenities">
                        <?php
                        for ($i = 0; $i <= 5; $i++) {
                            echo '  <div class="item_">
                            <div class="item-image">
                                <img src="./wp-content/uploads/2025/03/double-bed_2.svg" alt="" class="item-img">
                            </div>
                            <p class="item-text">1 King Bed</p>
                        </div>';
                        }
                        ?>

                    </div>
                    <a class="button_details" href="#">
                        Views Details
                    </a>
                </div>
            </div>


    </section>


</main>

<?php get_footer(); ?>