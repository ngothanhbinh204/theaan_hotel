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
             // Get the parent menu item 
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

        // Fade out current content
        const currentContent = menuContent.querySelector('.menu-level');
        if (currentContent) {
            currentContent.style.opacity = '0';
        }

        // After fade out, update content
        setTimeout(() => {
            menuContent.innerHTML = '';
            menuContent.appendChild(menuHtml);
            
            // Trigger fade in
            requestAnimationFrame(() => {
                menuHtml.classList.add('active');
                setTimeout(() => {
                    isAnimating = false;
                }, 200);
            });
        }, currentContent ? 200 : 0);
    }

    function handleDrillDown(item) {
        if (item.children && !isAnimating) {
            menuStack.push(item.children);
            renderMenu(item.children);
        }
    }

    function handleBack() {
        if (!isAnimating && menuStack.length > 1) {
            menuStack.pop();
            renderMenu(menuStack[menuStack.length - 1]);
        }
    }

    function toggleMenu() {
        if (isAnimating) return;
        
        menuContainer.classList.toggle('menu-open');
        
        if (menuContainer.classList.contains('menu-open')) {
            menuStack = [menuData];
            menuContainer.style.display = 'block';
            setTimeout(() => {
                renderMenu(menuData);
            }, 100);
        } else {
            isAnimating = true;
            menuContent.innerHTML = '';
            setTimeout(() => {
                menuContainer.style.display = 'none';
                isAnimating = false;
            }, 200);
        }
    }

    menuToggle.onclick = toggleMenu;
    closeMenu.onclick = toggleMenu;
});