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
                }, 300);
            });
        }, currentContent ? 300 : 0);
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
        
        if (!menuContainer.classList.contains('menu-open')) {
            menuContainer.style.display = 'block';
            // Force a reflow to ensure the display:block takes effect before adding the class
            menuContainer.offsetHeight;
            menuContainer.classList.add('menu-open');
            menuStack = [menuData];
            setTimeout(() => {
                renderMenu(menuData);
            }, 300);
        } else {
            isAnimating = true;
            menuContainer.classList.remove('menu-open');
            menuContent.innerHTML = '';
            setTimeout(() => {
                menuContainer.style.display = 'none';
                isAnimating = false;
            }, 500);
        }
    }

    menuToggle.onclick = toggleMenu;
    closeMenu.onclick = toggleMenu;
});