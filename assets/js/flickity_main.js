document.addEventListener("DOMContentLoaded", function() {
    var splide = new Splide("#roomSlider", {
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
            1024: {
                perPage: 2
            },
            768: {
                perPage: 1
            },
        },
        pagination: false,
        arrows: true,
    }).mount();


    document.getElementById("customPrev").addEventListener("click", function () {
        splide.go("<"); 
    });

    document.getElementById("customNext").addEventListener("click", function () {
        splide.go(">"); 
    });
});