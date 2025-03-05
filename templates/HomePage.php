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
                <h1>THE ANN HANOI HOTEL & SPA</h1>
                <h3>Ha Noi, VietNam</h3>
                <div class="flex flex-col items-center">
                    <h4>38 Hang Chuoi</h4>
                    <div class="line_space"></div>
                    <a href="">Get Direction</a>
                </div>
            </div>
            <div class="amenniteis">
                <p>Perfect blend of modern elegance and traditional Vietnamese charm with serene atmosphere, garden, and
                    native greenery - all designed to restore your balance after a long day exploring the city or
                    working.</p>

                <div class="grid">
                    <div class="item">
                        <div class="item-image">
                            <img src="./wp-content/uploads/2025/03/double-bed.svg" alt="" class="item-img">
                        </div>
                        <p class="item-text">City View</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>