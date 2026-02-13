/**
 * NavbarUI Class - Added Scroll Listener
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
            
            // Menu
            menuWrapper: document.getElementById('unified-menu'),
            menuToggle: document.getElementById('menu-toggle-btn'),
            menuClose: document.getElementById('close-menu-btn'),
            
            // Mobile Back
            backToL1: document.getElementById('back-to-l1'),
            backToL2: document.getElementById('back-to-l2'),
            
            // Columns & Logic
            col2: document.getElementById('col-level-2'),
            col3: document.getElementById('col-level-3'),
            col2Title: document.getElementById('col-2-title'),
            triggersL1: document.querySelectorAll('.menu-l1-trigger'),
            triggersL2: document.querySelectorAll('.menu-l2-trigger'),
            panelsProd: document.querySelectorAll('.level-3-panel'),
        };

        this.state = {
            isMenuOpen: false,
            isSearchOpen: false,
            currentL1: null, 
            currentL2: null
        };

        this.initEvents();
        this.initScrollListener(); // Jalankan listener scroll
    }

    initEvents() {
        // ... (Event Listener Search & Menu SAMA SEPERTI SEBELUMNYA) ...
        this.dom.searchBtns.forEach(btn => btn?.addEventListener('click', (e) => {
            e.stopPropagation();
            this.openSearch();
        }));
        this.dom.searchClose?.addEventListener('click', (e) => {
            e.stopPropagation();
            this.closeSearch();
        });
        this.dom.menuToggle?.addEventListener('click', (e) => {
            e.stopPropagation();
            this.toggleMenu();
        });
        this.dom.menuClose?.addEventListener('click', () => this.closeMenu());
        this.dom.backdrop?.addEventListener('click', () => this.closeAll());
        
        // Back Buttons
        this.dom.backToL1?.addEventListener('click', () => this.closeLevel2());
        this.dom.backToL2?.addEventListener('click', () => this.closeLevel3());

        // Level 1 Triggers
        this.dom.triggersL1.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const id = btn.dataset.id;
                const title = btn.querySelector('span').innerText;
                this.handleLevel1Click(btn, id, title);
            });
        });

        // Level 2 Triggers
        this.dom.triggersL2.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const cat = btn.dataset.cat;
                this.handleLevel2Click(btn, cat);
            });
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') this.closeAll();
        });
    }

    // --- NEW: SCROLL LOGIC ---
    initScrollListener() {
        window.addEventListener('scroll', () => {
            // Jika scroll lebih dari 10px, tambahkan class 'scrolled'
            if (window.scrollY > 10) {
                this.dom.nav.classList.add('scrolled');
            } else {
                // Jika kembali ke paling atas, hapus class 'scrolled'
                this.dom.nav.classList.remove('scrolled');
            }
        });
    }

    // --- Search Logic ---
    openSearch() {
        this.closeMenu();
        this.state.isSearchOpen = true;
        this.dom.nav.classList.add('search-active');
        this.dom.searchOverlay.classList.add('search-open');
        setTimeout(() => this.dom.searchInput.focus(), 150);
    }

    closeSearch() {
        this.state.isSearchOpen = false;
        this.dom.nav.classList.remove('search-active');
        this.dom.searchOverlay.classList.remove('search-open');
    }

    // --- Menu Logic ---
    toggleMenu() {
        this.state.isMenuOpen ? this.closeMenu() : this.openMenu();
    }

    openMenu() {
        this.closeSearch();
        this.state.isMenuOpen = true;
        this.dom.nav.classList.add('nav-active');
        this.dom.backdrop.classList.remove('opacity-0', 'pointer-events-none');
        this.dom.menuWrapper.classList.remove('-translate-x-full');
        document.body.style.overflow = 'hidden';
    }

    closeMenu() {
        this.state.isMenuOpen = false;
        this.dom.menuWrapper.classList.add('-translate-x-full');
        this.dom.backdrop.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = '';
        this.dom.nav.classList.remove('nav-active');
        setTimeout(() => this.resetMenuState(), 300);
    }

    // --- Level 1 Logic ---
    handleLevel1Click(btn, id, title) {
        if (this.state.currentL1 === id) {
            this.closeLevel2(); return; 
        }
        this.state.currentL1 = id; 
        this.dom.triggersL1.forEach(el => {
            el.classList.remove('text-black', 'font-bold');
            el.classList.add('text-gray-900');
        });
        btn.classList.remove('text-gray-900');
        btn.classList.add('text-black', 'font-bold');
        this.dom.col2.classList.remove('hidden'); 
        this.dom.col3.classList.add('hidden'); 
        this.dom.col2Title.innerText = title;
        this.dom.triggersL2.forEach(el => el.classList.remove('text-black', 'font-bold', 'pl-2'));
        this.state.currentL2 = null; 
    }

    closeLevel2() {
        this.dom.col2.classList.add('hidden');
        this.dom.col3.classList.add('hidden');
        this.dom.triggersL1.forEach(el => {
            el.classList.remove('text-black', 'font-bold');
            el.classList.add('text-gray-900');
        });
        this.state.currentL1 = null;
        this.state.currentL2 = null;
    }

    // --- Level 2 Logic ---
    handleLevel2Click(btn, cat) {
        if(!this.state.currentL1) return;
        if (this.state.currentL2 === cat) {
            this.closeLevel3(); return;
        }
        this.state.currentL2 = cat;
        this.dom.triggersL2.forEach(el => {
            el.classList.remove('text-black', 'font-bold', 'pl-2');
            el.classList.add('text-gray-500');
        });
        btn.classList.remove('text-gray-500');
        btn.classList.add('text-black', 'font-bold', 'pl-2');
        this.dom.col3.classList.remove('hidden');
        const targetId = `panel-prod-${this.state.currentL1}-${cat}`;
        this.dom.panelsProd.forEach(p => p.classList.add('hidden'));
        const targetPanel = document.getElementById(targetId);
        if(targetPanel) targetPanel.classList.remove('hidden');
    }

    closeLevel3() {
        this.dom.col3.classList.add('hidden');
        this.dom.triggersL2.forEach(el => {
            el.classList.remove('text-black', 'font-bold', 'pl-2');
            el.classList.add('text-gray-500');
        });
        this.state.currentL2 = null;
    }

    resetMenuState() {
        this.closeLevel2();
    }

    closeAll() {
        this.closeSearch();
        this.closeMenu();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new NavbarUI();
});