/**
 * CascadingMenu Controller
 * Alur: Sidebar Kiri -> Tengah (Tas/Baju) -> Kanan (Produk)
 */
class CascadingMenu {
    constructor() {
        this.dom = {
            menu: document.getElementById('cascading-menu'),
            openBtns: document.querySelectorAll('#mobile-menu-button, #desktop-menu-button'),
            closeBtn: document.getElementById('close-menu-btn'),
            
            // Kolom
            col2: document.getElementById('col-level-2'),
            col3: document.getElementById('col-level-3'),
            
            // Elemen Kolom Tengah
            categoriesContainer: document.getElementById('categories-container'),
            col2Title: document.getElementById('col-2-title'),
            
            // Trigger Buttons
            triggersL1: document.querySelectorAll('.level-1-trigger'), // Kiri
            triggersL2: document.querySelectorAll('.level-2-trigger'), // Tengah (Tas/Baju)
            
            // Panels Kanan
            panelsProd: document.querySelectorAll('.level-3-panel'),
        };

        // State untuk menyimpan pilihan Sidebar Kiri (misal: "new-arrivals")
        this.currentTriggerId = null;

        this.initEvents();
    }

    initEvents() {
        // Buka/Tutup Menu
        this.dom.openBtns.forEach(btn => btn?.addEventListener('click', (e) => { e.stopPropagation(); this.open(); }));
        this.dom.closeBtn?.addEventListener('click', () => this.close());

        // --- KLIK SIDEBAR KIRI (Level 1) ---
        this.dom.triggersL1.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                // Simpan ID tombol yang diklik (misal: "new-arrivals")
                this.currentTriggerId = btn.dataset.id;
                
                // Ambil teks tombol untuk judul kolom tengah
                const title = btn.querySelector('span').innerText;
                
                this.showColumn2(btn, title);
            });
        });

        // --- KLIK KATEGORI TENGAH (Level 2) ---
        this.dom.triggersL2.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const catId = btn.dataset.cat; // "tas" atau "baju"
                this.showColumn3(btn, catId);
            });
            // Opsional: Hover effect desktop
            btn.addEventListener('mouseenter', () => {
                const catId = btn.dataset.cat;
                this.showColumn3(btn, catId);
            });
        });
    }

    open() {
        this.dom.menu.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden';
    }

    close() {
        this.dom.menu.classList.add('translate-x-full');
        document.body.style.overflow = '';
        setTimeout(() => this.resetMenu(), 500);
    }

    // Tampilkan Kolom Tengah (Tas & Baju)
    showColumn2(activeBtn, title) {
        // 1. Highlight tombol kiri
        this.dom.triggersL1.forEach(el => {
            el.classList.remove('text-black', 'font-bold');
            el.classList.add('text-gray-500');
        });
        activeBtn.classList.remove('text-gray-500');
        activeBtn.classList.add('text-black', 'font-bold');

        // 2. Tampilkan Kolom 2
        this.dom.col2.classList.remove('hidden');
        this.dom.categoriesContainer.classList.remove('hidden');
        
        // 3. Update Judul Kolom 2
        this.dom.col2Title.innerText = title;

        // 4. Reset Kolom 3 (Sembunyikan produk sebelumnya)
        this.dom.col3.classList.add('hidden');
        this.dom.triggersL2.forEach(el => el.classList.remove('text-black', 'font-bold', 'pl-2'));
    }

    // Tampilkan Kolom Kanan (Produk)
    showColumn3(activeBtn, catId) {
        if (!this.currentTriggerId) return; // Safety check

        // 1. Highlight tombol tengah
        this.dom.triggersL2.forEach(el => {
            el.classList.remove('text-black', 'font-bold', 'pl-2');
            el.classList.add('text-gray-500');
        });
        activeBtn.classList.remove('text-gray-500');
        activeBtn.classList.add('text-black', 'font-bold', 'pl-2');

        // 2. Tampilkan Kolom 3
        this.dom.col3.classList.remove('hidden');

        // 3. Cari Panel Produk yang Cocok
        // ID Panel dibentuk dari: panel-prod-[TRIGGER_KIRI]-[KATEGORI_TENGAH]
        // Contoh: panel-prod-new-arrivals-tas
        const targetPanelId = `panel-prod-${this.currentTriggerId}-${catId}`;
        
        this.dom.panelsProd.forEach(p => p.classList.add('hidden')); // Sembunyikan semua
        
        const targetPanel = document.getElementById(targetPanelId);
        if (targetPanel) {
            targetPanel.classList.remove('hidden');
        } else {
            // Jika data produk tidak ada (opsional handling)
            console.log("No product panel found for ID:", targetPanelId);
        }
    }

    resetMenu() {
        this.dom.col2.classList.add('hidden');
        this.dom.col3.classList.add('hidden');
        this.dom.triggersL1.forEach(el => el.classList.remove('text-black', 'font-bold'));
        this.dom.triggersL2.forEach(el => el.classList.remove('text-black', 'font-bold', 'pl-2'));
        this.currentTriggerId = null;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new CascadingMenu();
});