<section class="section_general">
    <div class="container">
        <div class="heading_address mb-10 md:mb-14">
            <h2> EXPLORE OFFERS & EXPERIENCES</h2>
        </div>
        <div class="list_box_explore flex flex-col md:flex-row gap-x-6 gap-y-6">
            <?php
            for ($i = 0; $i <= 2; $i++) {
                echo "
                        <div style=\"background-image: url('/wp-content/uploads/2025/03/pool.jpg');\"
                            class=\"box w-full flex flex-col items-start justify-end\">
                            <h3 class=\"title\">
                                Infinity Pool
                            </h3>
                        </div>";
            }

            ?>
        </div>
    </div>

</section>