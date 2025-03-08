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


// document.addEventListener("DOMContentLoaded", function() {
//     var splide = new Splide("#exployerSlider", {
//         perPage: 3, // Desktop hiển thị 3 item ngang
//         perMove: 3,
//         gap: "1rem",
//         waitForTransition: false, 
//         breakpoints: {
//             768: {
//                 perPage: 3, // Mobile: vẫn hiển thị 3 item
//                 perMove: 3, // Khi trượt, di chuyển luôn 3 item
//                 fixedWidth: "100%", // Đảm bảo item full chiều ngang
//             },
//         },
//         pagination: false,
//         arrows: true,
//     }).mount();

// });