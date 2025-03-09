document.addEventListener("DOMContentLoaded", function () {
    var roomSlider = document.getElementById("roomSlider");
    if (roomSlider) {
        var splideRoom = new Splide("#roomSlider", {
            type: "slide",
            autoWidth: true,
            gap: 20,
            pagination: false,
            arrows: true,
            drag: true,
            flickPower: 300,
            speed: 500,
            waitForTransition: false,
            breakpoints: {
                1024: { perPage: 2 },
                768: { perPage: 1 }
            },
        }).mount();

        document.getElementById("customPrev")?.addEventListener("click", function () {
            splideRoom.go("<");
        });

        document.getElementById("customNext")?.addEventListener("click", function () {
            splideRoom.go(">");
        });
    } 

    var guestSlider = document.getElementById("guest-slider");
    if (guestSlider) {
        var splideGuest = new Splide("#guest-slider", {
            type: "loop",
            perPage: 4,
            perMove: 1,
            gap: "20px",
            breakpoints: {
                1024: { perPage: 2 },
                768: { perPage: 1 }
            },
            autoplay: true,
            interval: 3000,
            pagination: false,
            arrows: true,
        }).mount();

        document.getElementById("customPrev_guest")?.addEventListener("click", function () {
            splideGuest.go("<");
        });

        document.getElementById("customNext_guest")?.addEventListener("click", function () {
            splideGuest.go(">");
        });
    }




    var TasteSlider = document.getElementById("guest-slider");
    if (TasteSlider) {
        var splideTaste = new Splide("#guest-slider", {
            type: "loop",
            perPage: 1,
            autoplay: true,
            pagination: true, 
            interval: 3000,
        }).mount();

        document.getElementById("customPrev_Taste")?.addEventListener("click", function () {
            splideTaste.go("<");
        });

        document.getElementById("customNext_Taste")?.addEventListener("click", function () {
            splideTaste.go(">");
        });
    }


});
