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

    const gallery = document.querySelector('.fullscreen-gallery');
    const galleryContent = gallery.querySelector('.gallery-content');
    const closeButton = gallery.querySelector('.close-button');

    // Xử lý từng room box
    document.querySelectorAll('.room-box').forEach(roomBox => {
        if (!roomBox) {
            console.warn("⚠️ Không tìm thấy .room-box");
            return;
        }
    
        const roomId = roomBox.dataset.roomId;
        const slidesContainer = roomBox.querySelector('.slides-container');
        const slides = [...roomBox.querySelectorAll('.slide')];
        const totalSlides = slides.length;
        const pagination = roomBox.querySelector('.pagination_handle');

    
        if (!slidesContainer || totalSlides === 0) {
            console.warn(`⚠️ Không tìm thấy slides hoặc slides trống cho roomId: ${roomId}`);
            return;
        }
    
        let currentSlide = 0;

          // Create pagination dots
          slides.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.className = `dot ${index === 0 ? 'active' : ''}`;
            dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
            dot.addEventListener('click', () => showSlide(index));
            pagination.appendChild(dot);
        });
    
        // Hiển thị slide theo index
        const showSlide = (index) => {
            currentSlide = (index + totalSlides) % totalSlides;
            slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Update pagination dots
            pagination.querySelectorAll('.dot').forEach((dot, i) => {
                dot.classList.toggle('active', i === currentSlide);
            });
        };
    
        // Gán sự kiện cho nút điều hướng nếu tồn tại
        const prevBtn = roomBox.querySelector('.prev');
        const nextBtn = roomBox.querySelector('.next');
    
        if (prevBtn) {
            prevBtn.addEventListener('click', () => showSlide(currentSlide - 1));
        } else {
            console.warn(`⚠️ Không tìm thấy nút Previous cho roomId: ${roomId}`);
        }
    
        if (nextBtn) {
            nextBtn.addEventListener('click', () => showSlide(currentSlide + 1));
        } else {
            console.warn(`⚠️ Không tìm thấy nút Next cho roomId: ${roomId}`);
        }
    
        // Gán sự kiện mở gallery nếu có dữ liệu hợp lệ
        const expandBtn = roomBox.querySelector('.expand-button');
        const gallery = document.getElementById('gallery');
        const galleryContent = document.getElementById('gallery-content');
    
        if (expandBtn && gallery && galleryContent) {
            expandBtn.addEventListener('click', () => {
                if (!roomData || !roomData[roomId]) {
                    console.warn(`⚠️ Không có dữ liệu gallery cho roomId: ${roomId}`);
                    return;
                }
    
                galleryContent.innerHTML = roomData[roomId]
                    .map(src => `<img src="${src}" alt="Room Image">`)
                    .join('');
                gallery.classList.add('active');
            });
        } else {
            console.warn(`⚠️ Không thể mở gallery, thiếu phần tử hoặc dữ liệu roomId: ${roomId}`);
        }
    
        // Hiển thị slide đầu tiên
        showSlide(0);
    });
    
    // Sự kiện đóng gallery
    const closeGallery = () => gallery.classList.remove('active');
    closeButton.addEventListener('click', closeGallery);
    document.addEventListener('keydown', (e) => e.key === 'Escape' && closeGallery());

    // Đóng khi click vào vùng đen ngoài ảnh
    gallery.addEventListener('click', (e) => {
        if (!galleryContent.contains(e.target)) closeGallery();
    });
});

