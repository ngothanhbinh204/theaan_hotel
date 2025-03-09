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
        <div class="container flex flex-col items-center">
            <div class="heading_address flex flex-col items-center">
                <h2>“Sleep is the best mediation" - dalai lama</h2>
                <p>At The Ann Hanoi, our rooms and apartments are designed for ultimate comfort and relaxation. Each
                    room features a harmonious blend of modern amenities and elegant decor, ensuring a serene atmosphere
                    for your stay. Enjoy plush bedding, stunning city views, and thoughtful touches that cater to your
                    every need.</p>
            </div>
            <div class="amennities gap-y-[42px]">
                <h3>In-room amenities</h3>

                <div class="wrapper_amennities">
                    <div class="row">
                        <div class="flex flex-row flex-wrap justify-center list_item_amen">
                            <?php
                            for ($i = 0; $i <= 11; $i++) {
                                echo '<div class="item_amenities">
                                <div class="item-image">
                                <img src="http://theannhotel.local/wp-content/uploads/2025/03/wifi.svg" alt="" class="item-img">
                                </div>
                                <p class="item-text">High-speed Wifi</p>
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
        <div class="container">
            <div class="container_rooms">
                <div class="list_rooms">
                    <?php
                    $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/rooms.jpg";
                    $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
                    $expand_btn = "http://theannhotel.local/wp-content/uploads/2025/03/btn_expand.svg";
                    $amenity_icon = "/wp-content/uploads/2025/03/double-bed_2.svg";

                    for ($i = 0; $i < 4; $i++) { ?>
                        <?php get_template_part('template-parts/room_item'); ?>

                    <?php } ?>
                </div>

            </div>

    </section>


    <section class="section_general md:max-w-[1312px] md:!mb-9 !mx-auto ss_faq bg-white">
        <div class="container py-10 md:[padding:50px_28px]">
            <h2 class="title">
                FAQs
            </h2>

            <div class="box_content_faq flex flex-col gap-y-8">
                <div class="item_content">
                    <h4>Cancellation Policy:</h4>
                    <p> <span>Pay Now Rates:</span> Non-refundable, fully pre-paid. You will not receive a refund on
                        these rates, even
                        with 24 hours notice or more of cancellation.
                    </p>
                    <p>
                        <span>Pay Later Rates:</span> Pay Later reservations require a
                        1 night deposit, taken at time of booking. For any cancellations on Pay Later Rates for a
                        standard guestroom, notice is required 24hours before arrival to avoid penalty fee. 72 hours
                        notice required on Specialty Units, including Neighboring/Connecting rooms and Apartments.
                    </p>
                </div>
                <div class="item_content">
                    <h4>Cancellation Policy:</h4>
                    <p> <span>Pay Now Rates:</span> Non-refundable, fully pre-paid. You will not receive a refund on
                        these rates, even
                        with 24 hours notice or more of cancellation.
                        <span>Pay Later Rates:</span> Pay Later reservations require a
                        1 night deposit, taken at time of booking. For any cancellations on Pay Later Rates for a
                        standard guestroom, notice is required 24hours before arrival to avoid penalty fee. 72 hours
                        notice required on Specialty Units, including Neighboring/Connecting rooms and Apartments.
                    </p>
                </div>
                <div class="item_content">
                    <h4>Guaranteed Reservation:</h4>
                    <p>
                        Reservations must be guaranteed by a major credit card when you book. Blackout dates are subject
                        to their own rules. For security purposes, please provide a valid government or state-issued
                        photo ID at check-in. To cover incidentals, we’ll hold a deposit on your credit card.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section_general md:!mt-0">
        <div class="container">
            <div class="box_contact bg-white px-4 py-8">
                <h4>
                    Reservation Inquiries
                </h4>
                <div class="list_info_ct flex flex-col gap-y-[10px]">
                    <div class="item flex flex-row justify-center items-center gap-x-2">
                        <p>TEL:</p>
                        <a href="#">+84-24-3871-3838</a>
                        <div class="icon">
                            <img src="http://theannhotel.local/wp-content/uploads/2025/03/phone-call.svg" alt="">
                        </div>
                    </div>
                    <div class="item flex flex-row justify-center items-center gap-x-2">
                        <p>Email:</p>
                        <a class="a_email" href="#">reservations@theann.com.vn</a>

                    </div>
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