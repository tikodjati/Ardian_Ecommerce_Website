/**
 * NavbarUI Class
 * Mengelola interaksi navigasi, menu sidebar, dan pencarian.
 */
class NavbarUI {
    constructor() {
        // 1. Inisialisasi Elemen DOM
        this.dom = {
            nav: document.getElementById('main-nav'),
            backdrop: document.getElementById('menu-backdrop'),
            
            // Search Elements
            searchOverlay: document.getElementById('search-overlay'),
            searchInput: document.getElementById('search-input'),
            // Kita ambil tombol desktop & mobile sekaligus
            searchOpenBtns: document.querySelectorAll('#btn-search-desktop, #btn-search-mobile'), 
            searchCloseBtn: document.getElementById('btn-close-search'),
            
            // Menu Elements (Mobile)
            mobileMenu: document.getElementById('mobile-dropdown-menu'),
            mobileMenuBtn: document.getElementById('mobile-menu-button'),
            mobileCloseBtn: document.getElementById('menu-close-mobile'),

            // Menu Elements (Desktop)
            desktopMenu: document.getElementById('desktop-sidebar-menu'),
            desktopMenuBtn: document.getElementById('desktop-menu-button'),
            desktopCloseBtn: document.getElementById('menu-close-desktop')
        };

        // 2. State Tracking
        this.state = {
            isMenuOpen: false,
            isSearchOpen: false
        };

        // 3. Bind Events
        this.initEvents();
    }

    initEvents() {
        // --- Search Events ---
        this.dom.searchOpenBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                this.openSearch();
            });
        });

        if(this.dom.searchCloseBtn) {
            this.dom.searchCloseBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                this.closeSearch();
            });
        }

        // --- Menu Events ---
        // Mobile Toggle
        if(this.dom.mobileMenuBtn) {
            this.dom.mobileMenuBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                this.toggleMenu('mobile');
            });
        }
        
        // Desktop Toggle
        if(this.dom.desktopMenuBtn) {
            this.dom.desktopMenuBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                this.toggleMenu('desktop');
            });
        }

        // Close Buttons
        if(this.dom.mobileCloseBtn) this.dom.mobileCloseBtn.addEventListener('click', () => this.closeAll());
        if(this.dom.desktopCloseBtn) this.dom.desktopCloseBtn.addEventListener('click', () => this.closeAll());

        // --- Global Events ---
        // Klik backdrop menutup segalanya
        if(this.dom.backdrop) {
            this.dom.backdrop.addEventListener('click', () => this.closeAll());
        }

        // Tombol ESC menutup segalanya
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') this.closeAll();
        });
    }

    // --- Logic Methods ---

    openSearch() {
        this.closeMenu(); // Tutup menu jika ada
        this.state.isSearchOpen = true;

        // Visual: Navbar jadi putih
        this.dom.nav.classList.add('search-active');
        
        // Visual: Overlay muncul
        this.dom.searchOverlay.classList.add('search-open');
        
        // Focus: Input siap diketik (delay dikit biar transisi smooth)
        setTimeout(() => this.dom.searchInput.focus(), 150);
    }

    closeSearch() {
        this.state.isSearchOpen = false;
        this.dom.searchOverlay.classList.remove('search-open');
        
        // Kembalikan navbar jadi transparan (jika tidak di-hover)
        setTimeout(() => {
            if(!this.dom.nav.matches(':hover') && !this.state.isMenuOpen) {
                this.dom.nav.classList.remove('search-active');
            }
        }, 300);
    }

    toggleMenu(type) {
        if(this.state.isMenuOpen) {
            this.closeAll();
        } else {
            this.openMenu(type);
        }
    }

    openMenu(type) {
        this.closeSearch(); // Tutup search jika ada
        this.state.isMenuOpen = true;

        // Visual
        this.dom.nav.classList.add('nav-active');
        this.dom.backdrop.classList.remove('opacity-0', 'pointer-events-none');
        document.body.style.overflow = 'hidden'; // Stop scroll

        if(type === 'mobile') {
            this.dom.mobileMenu.classList.remove('-translate-y-full', 'opacity-0');
        } else {
            this.dom.desktopMenu.classList.remove('-translate-x-full');
        }
    }

    closeMenu() {
        this.state.isMenuOpen = false;
        document.body.style.overflow = '';

        // Reset semua posisi menu
        this.dom.mobileMenu.classList.add('-translate-y-full', 'opacity-0');
        this.dom.desktopMenu.classList.add('-translate-x-full');
        this.dom.backdrop.classList.add('opacity-0', 'pointer-events-none');

        // Cek navbar background
        if(!this.state.isSearchOpen && !this.dom.nav.matches(':hover')) {
            this.dom.nav.classList.remove('nav-active');
        }
    }

    closeAll() {
        this.closeSearch();
        this.closeMenu();
    }
}

// Inisialisasi saat DOM siap
document.addEventListener('DOMContentLoaded', () => {
    new NavbarUI();
});