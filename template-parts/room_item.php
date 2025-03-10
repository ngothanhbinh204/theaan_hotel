<?php
$room_image = "http://theannhotel.local/wp-content/uploads/2025/03/rooms.jpg";
$arrow_left = "http://theannhotel.local/wp-content/uploads/2025/03/arrow-left.svg";
$expand_btn = "http://theannhotel.local/wp-content/uploads/2025/03/btn_expand.svg";
$amenity_icon = "/wp-content/uploads/2025/03/double-bed_2.svg";

?>
<div class="item_room room-box" data-room-id="city-king">
    <div class="slider">
        <div class="slides-container">
            <?php for ($k = 0; $k < 3; $k++) { ?>
                <img src="<?= $room_image; ?>" alt="City King room" class="slide">
            <?php } ?>
        </div>


        <button class="expand-button">
            <img src="<?= $expand_btn; ?>" alt="Expand">
        </button>
        <div class="item_rooms wrapper_ctrl">
            <button class="nav-button prev">
                <img src="<?= $arrow_left; ?>" alt="Previous">
            </button>
            <button class="nav-button next">
                <img src="<?= $arrow_left; ?>" alt="Next">
            </button>
        </div>

        <div class="pagination_handle"></div>

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
    <a class="button_details link link--carpo" href="#">View Details</a>
</div>