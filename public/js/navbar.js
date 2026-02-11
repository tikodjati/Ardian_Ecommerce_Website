/**
 * NavbarUI Class
 * Menghandle: Search Overlay, Unified Cascading Menu dengan Fitur Toggle
 */
class NavbarUI {
    constructor() {
        this.dom = {
            nav: document.getElementById('main-nav'),
            backdrop: document.getElementById('menu-backdrop'),
            
            // Search
            searchOverlay: document.getElementById('search-overlay'),
            searchInput: document.getElementById('search-input'),
            searchBtns: document.querySelectorAll('#btn-search-desktop, #btn-search-mobile'), 
            searchClose: document.getElementById('btn-close-search'),
            
            // Unified Menu Elements
            menuWrapper: document.getElementById('unified-menu'),
            menuToggle: document.getElementById('menu-toggle-btn'),
            menuClose: document.getElementById('close-menu-btn'),
            
            // Columns
            col2: document.getElementById('col-level-2'),
            col3: document.getElementById('col-level-3'),
            col2Title: document.getElementById('col-2-title'),
            
            // Triggers
            triggersL1: document.querySelectorAll('.menu-l1-trigger'), // New Arrivals, Best Sellers
            triggersL2: document.querySelectorAll('.menu-l2-trigger'), // Tas, Baju
            
            // Panels
            panelsProd: document.querySelectorAll('.level-3-panel'),
        };

        this.state = {
            isMenuOpen: false,
            isSearchOpen: false,
            currentL1: null, // Melacak Menu Utama yang aktif (misal: 'new-arrivals')
            currentL2: null  // Melacak Kategori yang aktif (misal: 'tas')
        };

        this.initEvents();
    }

    initEvents() {
        // --- Search Events ---
        this.dom.searchBtns.forEach(btn => btn?.addEventListener('click', (e) => {
            e.stopPropagation();
            this.openSearch();
        }));
        this.dom.searchClose?.addEventListener('click', (e) => {
            e.stopPropagation();
            this.closeSearch();
        });

        // --- Menu Open/Close ---
        this.dom.menuToggle?.addEventListener('click', (e) => {
            e.stopPropagation();
            this.toggleMenu();
        });
        this.dom.menuClose?.addEventListener('click', () => this.closeMenu());
        this.dom.backdrop?.addEventListener('click', () => this.closeAll());

        // --- CASCADING LOGIC (LEVEL 1: SIDEBAR) ---
        this.dom.triggersL1.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const id = btn.dataset.id;
                const title = btn.querySelector('span').innerText;
                this.handleLevel1Click(btn, id, title);
            });
        });

        // --- CASCADING LOGIC (LEVEL 2: KATEGORI) ---
        this.dom.triggersL2.forEach(btn => {
            // Kita gunakan 'click' saja agar toggle berfungsi nyaman di desktop/mobile
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const cat = btn.dataset.cat;
                this.handleLevel2Click(btn, cat);
            });
        });

        // ESC Key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') this.closeAll();
        });
    }

    // --- Search Methods ---
    openSearch() {
        this.closeMenu();
        this.state.isSearchOpen = true;
        this.dom.nav.classList.add('search-active');
        this.dom.searchOverlay.classList.add('search-open');
        setTimeout(() => this.dom.searchInput.focus(), 150);
    }

    closeSearch() {
        this.state.isSearchOpen = false;
        this.dom.searchOverlay.classList.remove('search-open');
        setTimeout(() => {
            if(!this.dom.nav.matches(':hover') && !this.state.isMenuOpen) {
                this.dom.nav.classList.remove('search-active');
            }
        }, 300);
    }

    // --- Menu Methods ---
    toggleMenu() {
        this.state.isMenuOpen ? this.closeMenu() : this.openMenu();
    }

    openMenu() {
        this.closeSearch();
        this.state.isMenuOpen = true;
        
        // this.dom.nav.classList.add('nav-active'); // Opsional jika ingin navbar putih saat menu buka
        this.dom.backdrop.classList.remove('opacity-0', 'pointer-events-none');
        this.dom.menuWrapper.classList.remove('-translate-x-full');
        document.body.style.overflow = 'hidden';
    }

    closeMenu() {
        this.state.isMenuOpen = false;
        
        this.dom.menuWrapper.classList.add('-translate-x-full');
        this.dom.backdrop.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = '';

        // Reset tampilan menu setelah animasi selesai
        setTimeout(() => this.resetMenuState(), 300);

        if(!this.state.isSearchOpen && !this.dom.nav.matches(':hover')) {
            this.dom.nav.classList.remove('nav-active');
        }
    }

    // --- LOGIKA TOGGLE LEVEL 1 ---
    handleLevel1Click(btn, id, title) {
        // CEK: Apakah user mengklik menu yang SUDAH aktif?
        if (this.state.currentL1 === id) {
            // YA: Tutup Level 2 (dan otomatis Level 3)
            this.closeLevel2();
            return; 
        }

        // TIDAK: Buka Level 2 baru
        this.state.currentL1 = id; // Set aktif baru

        // 1. Reset semua style tombol L1
        this.dom.triggersL1.forEach(el => {
            el.classList.remove('text-black', 'font-bold');
            el.classList.add('text-gray-900');
        });
        // 2. Highlight tombol yang diklik
        btn.classList.remove('text-gray-900');
        btn.classList.add('text-black', 'font-bold');

        // 3. Tampilkan Kolom 2, Sembunyikan Kolom 3 (Reset L2 selection)
        this.dom.col2.classList.remove('hidden');
        this.dom.col3.classList.add('hidden'); // Selalu tutup L3 saat ganti L1
        this.dom.col2Title.innerText = title;

        // 4. Reset highlight tombol L2
        this.dom.triggersL2.forEach(el => el.classList.remove('text-black', 'font-bold', 'pl-2'));
        this.state.currentL2 = null; 
    }

    // Fungsi Helper: Menutup Level 2
    closeLevel2() {
        this.dom.col2.classList.add('hidden');
        this.dom.col3.classList.add('hidden'); // Level 3 juga harus tutup
        
        // Hapus highlight dari tombol L1
        this.dom.triggersL1.forEach(el => {
            el.classList.remove('text-black', 'font-bold');
            el.classList.add('text-gray-900');
        });
        
        this.state.currentL1 = null;
        this.state.currentL2 = null;
    }

    // --- LOGIKA TOGGLE LEVEL 2 ---
    handleLevel2Click(btn, cat) {
        if(!this.state.currentL1) return;

        // CEK: Apakah user mengklik kategori yang SUDAH aktif?
        if (this.state.currentL2 === cat) {
            // YA: Tutup Level 3 saja
            this.closeLevel3();
            return;
        }

        // TIDAK: Buka Level 3 baru
        this.state.currentL2 = cat;

        // 1. Reset highlight semua tombol L2
        this.dom.triggersL2.forEach(el => {
            el.classList.remove('text-black', 'font-bold', 'pl-2');
            el.classList.add('text-gray-500');
        });
        // 2. Highlight tombol yang diklik
        btn.classList.remove('text-gray-500');
        btn.classList.add('text-black', 'font-bold', 'pl-2');

        // 3. Tampilkan Kolom 3
        this.dom.col3.classList.remove('hidden');

        // 4. Cari Panel Produk yang Cocok
        const targetId = `panel-prod-${this.state.currentL1}-${cat}`;
        this.dom.panelsProd.forEach(p => p.classList.add('hidden'));
        
        const targetPanel = document.getElementById(targetId);
        if(targetPanel) targetPanel.classList.remove('hidden');
    }

    // Fungsi Helper: Menutup Level 3
    closeLevel3() {
        this.dom.col3.classList.add('hidden');
        
        // Hapus highlight dari tombol L2
        this.dom.triggersL2.forEach(el => {
            el.classList.remove('text-black', 'font-bold', 'pl-2');
            el.classList.add('text-gray-500');
        });

        this.state.currentL2 = null;
    }

    resetMenuState() {
        this.closeLevel2(); // Ini akan mereset semuanya (L1 active, L2 visible, L3 visible)
    }

    closeAll() {
        this.closeSearch();
        this.closeMenu();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new NavbarUI();
});