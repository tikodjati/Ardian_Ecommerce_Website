/**
 * ProductDetailPage UI Class
 * Menangani interaksi halaman detail produk:
 * - Gallery Switching
 * - Accordion Toggle
 * - Variant Selection
 * - Add to Cart Animation
 */
class ProductDetailPage {
    constructor() {
        this.dom = {
            mainImage: document.getElementById('main-image'),
            thumbnails: document.querySelectorAll('.gallery-thumb'),
            accordions: document.querySelectorAll('.accordion-header'),
            variantBtns: document.querySelectorAll('.variant-btn'),
            addToCartBtn: document.getElementById('add-to-cart-btn')
        };

        this.initEvents();
    }

    initEvents() {
        // 1. Gallery Logic
        this.dom.thumbnails.forEach(thumb => {
            thumb.addEventListener('click', (e) => {
                // Hapus border aktif dari semua thumbnail
                this.dom.thumbnails.forEach(t => t.classList.remove('border-black'));
                this.dom.thumbnails.forEach(t => t.classList.add('border-transparent'));
                
                // Set aktif pada yang diklik
                const btn = e.currentTarget;
                btn.classList.remove('border-transparent');
                btn.classList.add('border-black');

                // Ganti gambar utama dengan efek fade sederhana
                const newSrc = btn.dataset.src;
                this.switchImage(newSrc);
            });
        });

        // 2. Accordion Logic (Details & Delivery)
        this.dom.accordions.forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                const icon = header.querySelector('.icon');

                // Toggle Height
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    icon.textContent = "+";
                } else {
                    // Tutup accordion lain jika ingin mode "satu terbuka" (opsional)
                    // this.closeAllAccordions();
                    content.style.maxHeight = content.scrollHeight + "px";
                    icon.textContent = "−";
                }
            });
        });

        // 3. Variant Selection
        this.dom.variantBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                // Reset style
                this.dom.variantBtns.forEach(b => {
                    b.classList.remove('active-variant');
                    b.classList.add('text-gray-500', 'border-gray-300');
                    b.classList.remove('text-black', 'border-black'); // Hapus style hover/active manual
                });

                // Set Active
                e.target.classList.add('active-variant');
                e.target.classList.remove('text-gray-500', 'border-gray-300');
            });
        });

        // 4. Add to Cart Animation
        if(this.dom.addToCartBtn) {
            this.dom.addToCartBtn.addEventListener('click', () => {
                const originalText = this.dom.addToCartBtn.innerHTML;
                
                // Ubah tombol jadi "Added"
                this.dom.addToCartBtn.innerHTML = '<span class="animate-pulse">Adding to Cart...</span>';
                this.dom.addToCartBtn.disabled = true;

                setTimeout(() => {
                    this.dom.addToCartBtn.innerHTML = '<span>Added to Cart</span>';
                    this.dom.addToCartBtn.classList.replace('bg-black', 'bg-green-700');
                    
                    // Reset setelah 2 detik
                    setTimeout(() => {
                        this.dom.addToCartBtn.innerHTML = originalText;
                        this.dom.addToCartBtn.classList.replace('bg-green-700', 'bg-black');
                        this.dom.addToCartBtn.disabled = false;
                    }, 2000);
                }, 800);
            });
        }
    }

    switchImage(src) {
        // Efek transisi halus
        this.dom.mainImage.style.opacity = '0.8';
        setTimeout(() => {
            this.dom.mainImage.src = src;
            this.dom.mainImage.style.opacity = '1';
        }, 150);
    }

    closeAllAccordions() {
        this.dom.accordions.forEach(header => {
            const content = header.nextElementSibling;
            const icon = header.querySelector('.icon');
            content.style.maxHeight = null;
            icon.textContent = "+";
        });
    }
}

// Inisialisasi
document.addEventListener('DOMContentLoaded', () => {
    new ProductDetailPage();
});