document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const menuContainer = document.getElementById('menuContainer');
    const menuContent = document.getElementById('menuContent');
    let menuStack = [menuData];
    let isAnimating = false;
    
    let isMenuOpen = false;

    function renderMenu(items) {
        if (isAnimating) return;
    
        isAnimating = true;
        const menuHtml = document.createElement('div');
        menuHtml.className = 'menu-level';
    
        if (menuStack.length > 1) {
            const parentMenu = menuStack[menuStack.length - 2];
            const parentLabel = parentMenu.find(item => 
                item.children === menuStack[menuStack.length - 1]
            )?.label || 'Main Menu';
    
            // Tạo wrapper bọc menu-back
            const wrapperBack = document.createElement('div');
            wrapperBack.className = 'wrapper-item-back';
    
            const backButton = document.createElement('div');
            backButton.className = 'menu-back';
            backButton.innerHTML = `
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 4.5L10 8.5L6 12.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                ${parentLabel}
            `;
            backButton.onclick = handleBack;
    
            // Thêm menu-back vào wrapper-item
            wrapperBack.appendChild(backButton);
            menuHtml.appendChild(wrapperBack);
        }
    
        const menuLevel = document.createElement('div');
        menuLevel.className = 'menu-level active';
    
        items.forEach(item => {
            const wrapperItem = document.createElement('div');
            wrapperItem.className = 'wrapper-item';
    
            const itemElement = document.createElement('div');
            itemElement.className = 'menu-item';
    
            if (item.children) {
                itemElement.innerHTML = `
                    ${item.label}
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 4.5L10 8.5L6 12.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                `;
                itemElement.onclick = () => handleDrillDown(item);
            } else {
                itemElement.innerHTML = `<a href="${item.url}" class="block w-full">${item.label}</a>`;
            }
    
            wrapperItem.appendChild(itemElement);
            menuLevel.appendChild(wrapperItem);
        });
    
        // Thêm menu-level vào menuHtml
        menuHtml.appendChild(menuLevel);
    
        const currentContent = menuContent.querySelector('.menu-level');
        if (currentContent) {
            currentContent.style.opacity = '0';
        }
    
        setTimeout(() => {
            menuContent.innerHTML = '';
            menuContent.appendChild(menuHtml);
    
            requestAnimationFrame(() => {
                menuHtml.classList.add('active');
                setTimeout(() => {
                    isAnimating = false;
                }, 100);
            });
        }, currentContent ? 300 : 0);
    }
    

    function handleDrillDown(item) {
        if (item.children && !isAnimating) {
            menuStack.push(item.children);
            const currentItems = menuContent.querySelectorAll('.menu-item');
            const currentBack = menuContent.querySelector('.menu-back');

            if (currentBack) {
                currentBack.style.transform = 'translateX(-40px)';
                currentBack.style.transition = 'transform 0.3s ease-out, opacity 0.3s ease-out';
            }

            currentItems.forEach((el, index) => {
                if (index === 1 || index === currentItems.length - 1) {
                    el.style.transform = 'translateX(-40px)';
                } else {
                    el.style.transform = 'translate(-40px, 40px)';
                }
                el.style.opacity = '0';
                el.style.transition = 'transform 0.3s ease-out, opacity 0.3s ease-out';
            });
    
            renderMenu(item.children);
        }
    }
    
    function handleBack() {
        if (!isAnimating && menuStack.length > 1) {
            const currentItems = menuContent.querySelectorAll('.menu-item');
            const currentBack = menuContent.querySelector('.menu-back');

            if (currentBack) {
                currentBack.style.transform = 'translateX(40px)';
                currentBack.style.transition = 'transform 0.3s ease-out, opacity 0.3s ease-out';
            }

            currentItems.forEach((el, index) => {
                if (index === 1 || index === currentItems.length - 1) {
                    el.style.transform = 'translateX(40px)';
                } else {
                    el.style.transform = 'translate(40px, -40px)';
                }
                el.style.opacity = '0';
                el.style.transition = 'transform 0.3s ease-out, opacity 0.3s ease-out';
            });
    
            menuStack.pop();
            renderMenu(menuStack[menuStack.length - 1]);
        }
    }

    function toggleMenu() {
        if (isAnimating) return;
        
        isMenuOpen = !isMenuOpen;
        menuToggle.classList.toggle('is-active');
        header.classList.toggle('menu-opened'); // Thêm menu open

        
        if (isMenuOpen) {
            menuContainer.style.display = 'block';
            menuContainer.offsetHeight; // Force reflow
            menuContainer.classList.add('menu-open');
            menuStack = [menuData];
            setTimeout(() => {
                renderMenu(menuData);
            }, 100);
        } else {
            isAnimating = true;
            menuContainer.classList.add('menu-closing'); 
            menuContainer.classList.remove('menu-open');
            menuContent.innerHTML = '';
            setTimeout(() => {
                isAnimating = false;
            }, 300);
        }
    }

    menuToggle.addEventListener('click', toggleMenu);

    // Add scroll behavior for header
    const header = document.getElementById("masthead");
    if (header) {
        let ticking = false;
        window.addEventListener("scroll", function () {
            if (!ticking) {
                requestAnimationFrame(() => {
                    if (window.scrollY > 50) {
                        header.classList.add("header_scroll");
                    } else {
                        header.classList.remove("header_scroll");
                    }
                    ticking = false;
                });
                ticking = true;
            }
        });
    }
});



// Slider Image Rooms
document.addEventListener('DOMContentLoaded', () => {
const roomData = {
    'city-king': [
        "http://theannhotel.local/wp-content/uploads/2025/03/rooms.jpg",
        "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&q=80",
        "https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&q=80"
    ],
    'city-twin': [
        "https://images.unsplash.com/photo-1595576508898-0ad5c879a061?auto=format&fit=crop&q=80",
        "https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&q=80",
        "https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&fit=crop&q=80"
    ]
};

// Initialize all room boxes
document.querySelectorAll('.room-box').forEach(roomBox => {
    const roomId = roomBox.dataset.roomId;
    const slidesContainer = roomBox.querySelector('.slides-container');
    const slides = roomBox.querySelectorAll('.slide');
    let currentSlide = 0;
    const totalSlides = slides.length;

    // Navigation functions
    function showSlide(index) {
        currentSlide = (index + totalSlides) % totalSlides;
        slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    // Initialize first slide
    showSlide(0);

    // Event listeners for navigation
    roomBox.querySelector('.prev').addEventListener('click', () => {
        showSlide(currentSlide - 1);
    });

    roomBox.querySelector('.next').addEventListener('click', () => {
        showSlide(currentSlide + 1);
    });

    // Expand button click handler
    roomBox.querySelector('.expand-button').addEventListener('click', () => {
        console.log('Expand clicked');
        const gallery = document.querySelector('.fullscreen-gallery');
        const galleryContent = gallery.querySelector('.gallery-content');

        // Clear previous content
        galleryContent.innerHTML = '';

        // Add all images for this room
        roomData[roomId].forEach(src => {
            const img = document.createElement('img');
            img.src = src;
            galleryContent.appendChild(img);
        });

        gallery.classList.add('active');
    });
});

// Close button for fullscreen gallery
document.querySelector('.fullscreen-gallery .close-button').addEventListener('click', () => {
    document.querySelector('.fullscreen-gallery').classList.remove('active');
});

// Close gallery with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        document.querySelector('.fullscreen-gallery').classList.remove('active');
    }
});

});
