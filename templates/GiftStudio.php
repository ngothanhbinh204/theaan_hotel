<?php
/*
Template Name: GiftStudio
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
            <h2 class="title">Gift Studio</h2>
            <p class="description">Explore exquisite festive hampers, corporate gifts, and personalized sets crafted
                with premium treats. Perfect for celebrating special moments and strengthening relationships. Find the
                ideal gift today!</p>
        </div>
    </section>

    <section class="section_general md:my-[160px]">
        <div class="container px-3 container_facilities md:pl-[10px] md:pr-[24px] container_gift">
            <div class="list_dining list_facilities !gap-y-14 md:!gap-y-20 list_rooms">
                <div class="box_facilities flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
                    <div class="box_imgGift grid grid-cols-3 gap-1 md:gap-2 max-w-[1000px]">
                        <div class="box_img">
                            <img src="http://theannhotel.local/wp-content/uploads/2025/03/gift_1.jpg" alt="">
                        </div>
                        <div class="box_img">
                            <img src="http://theannhotel.local/wp-content/uploads/2025/03/gift_2.jpg" alt="">
                        </div>
                        <div class="box_img">
                            <img src="http://theannhotel.local/wp-content/uploads/2025/03/gift_3.jpg" alt="">
                        </div>
                    </div>
                    <div
                        class="group_info flex flex-col justify-center gap-5 md:gap-[78px] w-full md:w-4/12 lg:w-3/12 xl:min-w-[326px]">
                        <div class="title_des">
                            <h2 class="title">
                                Mid-autumn festival mooncake gift sets
                            </h2>
                        </div>
                        <p class="description">
                            The Mid-Autumn Festival is one of the most spectacular celebrations in the Vietnamese
                            culture and mooncakes have long been a signature highlight of the festivities each year.
                        </p>
                        <a class="button_details link link--carpo" href="">EXPLORE</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/section_guest'); ?>

</main>

<?php get_footer(); ?>