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

            const backButton = document.createElement('div');
            backButton.className = 'menu-back';
            backButton.innerHTML = `
               <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 4.5L10 8.5L6 12.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                ${parentLabel}
            `;
            backButton.onclick = handleBack;
            menuHtml.appendChild(backButton);
        }

        items.forEach(item => {
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
            
            menuHtml.appendChild(itemElement);
        });

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
            menuContainer.classList.remove('menu-open');
            menuContent.innerHTML = '';
            setTimeout(() => {
                menuContainer.style.display = 'none';
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
