<div class=" container_rooms">
    <div class="list_dining list_rooms">
        <div class="box_dining flex flex-col md:flex-row md:gap-x-[30px] lg:gap-x-[54px] gap-y-8">
            <?php
            $room_image = "http://theannhotel.local/wp-content/uploads/2025/03/dining_img.jpg";
            $arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
            ?>
            <div class="item_room room-box item_onlyImage item_onlyImage_Page w-full" data-room-id="city-king">
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

        </div>

    </div>
</div>