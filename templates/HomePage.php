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

    <section class="section_general ss_info">
        <div class="container flex flex-col items-center gap-y-[70px]">
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
            <div class="heading_address apartment  flex flex-col items-center">
                <h2>ROOMS & APARTMENTS</h2>
                <p>Unwind with panoramic views that capture the city's vibrant charm.</p>
            </div>
            <!-- 
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides list_rooms">
                        <?php for ($i = 0; $i <= 8; $i++) { ?>
                        <li class="glide__slide">
                            <div class="item_room ">
                                <div class="room_image">
                                    <img src="/wp-content/uploads/2025/03/rooms.jpg" alt="">
                                </div>
                                <h3 class="title">City King</h3>
                                <p class="size">Average Size: 28 - 30 m²</p>
                                <div class="sub_amenities">
                                    <?php for ($j = 0; $j < 6; $j++) { ?>
                                    <div class="item_">
                                        <div class="item-image">
                                            <img src="/wp-content/uploads/2025/03/double-bed_2.svg" alt=""
                                                class="item-img">
                                        </div>
                                        <p class="item-text">1 King Bed</p>
                                    </div>
                                    <?php } ?>
                                </div>
                                <a class="button_details" href="#">View Details</a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">Prev</button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">Next</button>
                </div>
            </div> -->






            <!-- <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides list_rooms">
                        <?php for ($i = 0; $i <= 8; $i++) { ?>
                        <li class="glide__slide">
                            <div class="item_room ">
                                <div class="room_image">
                                    <img src="/wp-content/uploads/2025/03/rooms.jpg" alt="">
                                </div>
                                <h3 class="title">City King</h3>
                                <p class="size">Average Size: 28 - 30 m²</p>
                                <div class="sub_amenities">
                                    <?php for ($j = 0; $j < 6; $j++) { ?>
                                    <div class="item_">
                                        <div class="item-image">
                                            <img src="/wp-content/uploads/2025/03/double-bed_2.svg" alt=""
                                                class="item-img">
                                        </div>
                                        <p class="item-text">1 King Bed</p>
                                    </div>
                                    <?php } ?>
                                </div>
                                <a class="button_details" href="#">View Details</a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">Prev</button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">Next</button>
                </div>
            </div> -->
            <!-- <section class="splide" id="roomSlider" role="group" aria-label="Rooms Slider">
                <div class="splide__track">
                    <ul class="splide__list list_rooms">
                        <?php for ($i = 0; $i <= 8; $i++) { ?>
                        <li class="splide__slide">
                            <div class="item_room">
                                <div class="room_image">
                                    <img src="/wp-content/uploads/2025/03/rooms.jpg" alt="">
                                </div>
                                <h3 class="title">City King</h3>
                                <p class="size">Average Size: 28 - 30 m²</p>
                                <div class="sub_amenities">
                                    <?php for ($j = 0; $j < 6; $j++) { ?>
                                    <div class="item_">
                                        <div class="item-image">
                                            <img src="/wp-content/uploads/2025/03/double-bed_2.svg" alt=""
                                                class="item-img">
                                        </div>
                                        <p class="item-text">1 King Bed</p>
                                    </div>
                                    <?php } ?>
                                </div>
                                <a class="button_details" href="#">View Details</a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </section> -->


            <section class="splide" id="roomSlider" role="group" aria-label="Rooms Slider">
                <div class="splide__track">
                    <ul class="splide__list list_rooms">
                        <?php for ($i = 0; $i <= 8; $i++) { ?>
                        <li class="splide__slide">
                            <div class="item_room">
                                <div class="room_image">
                                    <img src="/wp-content/uploads/2025/03/rooms.jpg" alt="">
                                </div>
                                <h3 class="title">City King</h3>
                                <p class="size">Average Size: 28 - 30 m²</p>
                                <div class="sub_amenities">
                                    <?php for ($j = 0; $j < 6; $j++) { ?>
                                    <div class="item_">
                                        <div class="item-image">
                                            <img src="/wp-content/uploads/2025/03/double-bed_2.svg" alt=""
                                                class="item-img">
                                        </div>
                                        <p class="item-text">1 King Bed</p>
                                    </div>
                                    <?php } ?>
                                </div>
                                <a class="button_details" href="#">View Details</a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>


            <script>
            document.addEventListener('DOMContentLoaded', function() {
                new Splide('#roomSlider', {
                    type: 'slide', // Không tự động loop
                    fixedWidth: 560,
                    perPage: 2, // Hiển thị 2 item trên desktop
                    gap: 20, // Khoảng cách giữa các item
                    breakpoints: {
                        1024: {
                            perPage: 2
                        }, // Tablet vẫn hiển thị 2 item
                        768: {
                            perPage: 1
                        }, // Mobile hiển thị 1 item
                    },
                    pagination: false, // Ẩn pagination
                    arrows: true, // Hiển thị nút điều hướng
                }).mount();
            });
            </script>





    </section>


    <sectionm class="section_general">
        <div class="container">
            <div class="list_box_">
                <?php
                for ($i = 0; $i <= 2; $i++) {
                    echo '
                    <div class="box px-4 lg:px-5">
                        <div class="room_image absolute inset-0 w-full h-full object-cover">
                            <img class="" src="/wp-content/uploads/2025/03/img2.jpg" alt="">
                        </div>
                        <h3 class="title">
                            Dining
                        </h3>
                        <p class="description">
                            Discover a trio of restaurants where international flavors meet traditional Vietnamese
                            cuisine, all elevated with fresh, locally sourced ingredients. Enjoy expertly crafted
                            cocktails and enticing small bites across diverse settings, including a chic Sky Lounge with
                            sweeping views and a laid-back poolside bar perfect for sipping and relaxing.
                        </p>

                        <a class="button_details" href="">
                            Dining
                        </a>
                   </div>';
                }
                ?>

            </div>
        </div>
        </section>


        <section class="section_general">
            <div class="container">
                <div class="heading_address">
                    <h2> EXPLORE OFFERS & EXPERIENCES</h2>
                </div>
                <div class="list_box_explore flex flex-col gap-y-6">
                    <?php
                    for ($i = 0; $i <= 2; $i++) {
                        echo "
                        <div style=\"background-image: url('/wp-content/uploads/2025/03/pool.jpg');\"
                            class=\"box flex flex-col items-start justify-end\">
                            <h3 class=\"title\">
                                Infinity Pool
                            </h3>
                        </div>";
                    }

                    ?>
                </div>
            </div>

        </section>




        <?php get_template_part('template-parts/section_guest'); ?>


        <section class="section_general px-0">
            <div class="container px-0">
                <div class="grid grid-cols-5 gallery_grid">
                    <?php
                    for ($i = 0; $i < 15; $i++) {
                        echo '<div class="box_img w-full aspect-square">
                        <img class="" src="/wp-content/uploads/2025/03/pool.jpg" alt="">
                        </div>';
                    };
                    ?>
                </div>
            </div>

            <div class="container mt-[100px] ">
                <div class="hashtag flex flex-row justify-between">
                    <p class="text_">
                        #theannhanoi
                    </p>
                    <div class="icon_social flex flex-row gap-x-2">
                        <img src="./wp-content/uploads/2025/03/ic_baseline-facebook.svg" alt="">

                        <img src="./wp-content/uploads/2025/03/ic_baseline-facebook.svg" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="section_general">
            <div class="container ss_directions flex flex-col gap-y-10">
                <div class="top_direction flex flex-col items-start gap-y-4">
                    <div class="heading_address">
                        <h2><span>
                                DIRECTIONS To
                            </span> Your Stay</h2>
                    </div>
                    <p>
                        <span>The Ann Hanoi Hotel & Spa</span>
                        38A Hang Chuoi Road, Pham Dinh Ho, Hai Ba Trung Ward, Hanoi, Vietnam
                    </p>
                    <a class="btn_open_map" href="#">
                        Open Map
                    </a>
                </div>
                <div class="map">
                    <img src="/wp-content/uploads/2025/03/map.png" alt="">
                </div>
            </div>
        </section>


</main>

<?php get_footer(); ?>