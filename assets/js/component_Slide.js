class RoomSlider {
    constructor(roomBox, images) {
        this.roomBox = roomBox;
        this.images = images;
        this.currentSlide = 0;
        
        // Tìm các elements cần thiết
        this.slidesContainer = roomBox.querySelector('.slides-container');
        this.pagination = roomBox.querySelector('.pagination_handle');
        this.prevBtn = roomBox.querySelector('.prev');
        this.nextBtn = roomBox.querySelector('.next');
        this.expandBtn = roomBox.querySelector('.expand-button');
        
        // Khởi tạo slider
        this.initSlides();
        this.initPagination();
        this.initNavigation();
        this.initFullscreenGallery();
        
        // Hiển thị slide đầu tiên
        this.showSlide(0);
    }

    initSlides() {
        // Tạo slides từ danh sách hình ảnh
        this.slidesContainer.innerHTML = this.images
            .map(src => `
                <div class="slide">
                    <img src="${src}" alt="Room Image">
                </div>
            `).join('');
        
        this.slides = [...this.slidesContainer.querySelectorAll('.slide')];
        this.totalSlides = this.slides.length;
    }

    initPagination() {
        if (!this.pagination) return;

        // Tạo dots cho pagination
        this.images.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.className = `dot ${index === 0 ? 'active' : ''}`;
            dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
            dot.addEventListener('click', () => this.showSlide(index));
            this.pagination.appendChild(dot);
        });
    }

    initNavigation() {
        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => this.showSlide(this.currentSlide - 1));
        }
        
        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => this.showSlide(this.currentSlide + 1));
        }
    }

    initFullscreenGallery() {
        if (!this.expandBtn) return;

        const gallery = document.querySelector('.fullscreen-gallery');
        if (!gallery) return;

        const galleryContent = gallery.querySelector('.gallery-content');
        const closeButton = gallery.querySelector('.close-button');

        // Mở gallery
        this.expandBtn.addEventListener('click', () => {
            galleryContent.innerHTML = this.images
                .map(src => `<img src="${src}" alt="Room Image">`)
                .join('');
            gallery.classList.add('active');
        });

        // Đóng gallery
        const closeGallery = () => gallery.classList.remove('active');
        closeButton?.addEventListener('click', closeGallery);
        
        // Đóng bằng ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeGallery();
        });

        // Đóng khi click ngoài
        gallery.addEventListener('click', (e) => {
            if (!galleryContent.contains(e.target)) closeGallery();
        });
    }

    showSlide(index) {
        this.currentSlide = (index + this.totalSlides) % this.totalSlides;
        this.slidesContainer.style.transform = `translateX(-${this.currentSlide * 100}%)`;
        
        // Cập nhật trạng thái dots
        if (this.pagination) {
            this.pagination.querySelectorAll('.dot').forEach((dot, i) => {
                dot.classList.toggle('active', i === this.currentSlide);
            });
        }
    }
}

// Khởi tạo khi DOM đã load
document.addEventListener('DOMContentLoaded', () => {
    // Ví dụ cách sử dụng:
    document.querySelectorAll('.room-box').forEach(roomBox => {
        // Lấy danh sách hình ảnh từ data attribute hoặc ACF field
        const images = JSON.parse(roomBox.dataset.images || '[]');
        
        // Tạo slider mới cho mỗi room
        if (images.length > 0) {
            new RoomSlider(roomBox, images);
        }
    });
});