document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const closeMenu = document.getElementById('closeMenu');
    const menuContainer = document.getElementById('menuContainer');
    const menuContent = document.getElementById('menuContent');
    let menuStack = [menuData];
    let isAnimating = false;

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
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6"/>
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
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6"/>
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

    // function handleDrillDown(item) {
    //     if (item.children && !isAnimating) {
    //         menuStack.push(item.children);
    //         const currentItems = menuContent.querySelectorAll('.menu-item');

    //         currentItems.forEach((el, index) => {
    //             el.style.transform = 'translate(-20px, 20px)';
    //             el.style.opacity = '0';
    //             el.style.transition = `transform 0.1s ease-out ${index * 50}ms, opacity 0.1s ease-out ${index * 50}ms`;
    //         });
    //         renderMenu(item.children);
    //     }
    // }

    // function handleBack() {
    //     if (!isAnimating && menuStack.length > 1) {
    //         const currentItems = menuContent.querySelectorAll('.menu-item');
    //         currentItems.forEach((el, index) => {
    //             el.style.transform = 'translate(-20px, 20px)';
    //             el.style.opacity = '0';
    //             el.style.transition = `transform 0.1s ease-out ${index * 50}ms, opacity 0.1s ease-out ${index * 50}ms`;
    //         });
    //         menuStack.pop();
    //         renderMenu(menuStack[menuStack.length - 1]);
    //     }
    // }


    function handleDrillDown(item) {
        if (item.children && !isAnimating) {
            menuStack.push(item.children);
            const currentItems = menuContent.querySelectorAll('.menu-item');
            const currentBack = menuContent.querySelector('.menu-back'); // Chỉ lấy phần tử đầu tiên

            if (currentBack) {
                currentBack.style.transform = 'translateX(-40px)';
                currentBack.style.transition = `transform 0.3s ease-out, opacity 0.3s ease-out`; // Không có delay
            }

            currentItems.forEach((el, index) => {
                if (index === 1 || index === currentItems.length - 1) {
                    // Item thứ 2 & cuối cùng di chuyển ngang (trái)
                    el.style.transform = 'translateX(-40px)';
                } else {
                    // Các item còn lại di chuyển chéo xuống
                    el.style.transform = 'translate(-40px, 40px)';
                }
                el.style.opacity = '0'; // Mờ dần
                el.style.transition = `transform 0.3s ease-out, opacity 0.3s ease-out`; // Không có delay
            });
    
                renderMenu(item.children);
        }
    }
    
    function handleBack() {
        if (!isAnimating && menuStack.length > 1) {
            const currentItems = menuContent.querySelectorAll('.menu-item');
            const currentBack = menuContent.querySelector('.menu-back'); // Chỉ lấy phần tử đầu tiên

            if (currentBack) {
                currentBack.style.transform = 'translateX(40px)';
                currentBack.style.transition = `transform 0.3s ease-out, opacity 0.3s ease-out`; // Không có delay
            }

            currentItems.forEach((el, index) => {
                if (index === 1 || index === currentItems.length - 1) {
                    // Item thứ 2 & cuối cùng di chuyển ngang (trái)
                    el.style.transform = 'translateX(40px)';
                } else {
                    // Các item còn lại di chuyển chéo xuống
                    el.style.transform = 'translate(40px, -40px)';
                }
                el.style.opacity = '0'; // Mờ dần
                el.style.transition = `transform 0.3s ease-out, opacity 0.3s ease-out`; // Không có delay
            });
    
                menuStack.pop();
                renderMenu(menuStack[menuStack.length - 1]);
        }
    }
    

    function toggleMenu() {
        if (isAnimating) return;
        
        if (!menuContainer.classList.contains('menu-open')) {
            menuContainer.style.display = 'block';
            // Force a reflow to ensure the display:block takes effect before adding the class
            menuContainer.offsetHeight;
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
            }, 100);
        }
    }

    menuToggle.onclick = toggleMenu;
    closeMenu.onclick = toggleMenu;
});