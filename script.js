/* Scroll Animations */
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -40px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.anim-fade-up, .anim-slide-in').forEach(el => {
        observer.observe(el);
    });

    /* Navbar Scroll */
    const nav = document.getElementById('nav');
    let lastScrollY = 0;

    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        if (scrollY > 60) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
        
        lastScrollY = scrollY;
    }, { passive: true });

    /* Terminal Animation */
    const terminalLines = document.querySelectorAll('.terminal-line');
    
    const terminalObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startTerminalAnimation();
                terminalObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    const terminal = document.querySelector('.hero-terminal');
    if (terminal) {
        terminalObserver.observe(terminal);
    }

    function startTerminalAnimation() {
        terminalLines.forEach((line) => {
            const delay = parseInt(line.dataset.delay) || 0;
            const typingEl = line.querySelector('.typing');
            
            setTimeout(() => {
                line.classList.add('visible');
                
                if (typingEl) {
                    const fullText = typingEl.dataset.text;
                    typingEl.textContent = '';
                    typeText(typingEl, fullText, 0);
                }
            }, delay);
        });
    }

    function typeText(el, text, index) {
        if (index < text.length) {
            el.textContent = text.substring(0, index + 1);
            const speed = 25 + Math.random() * 35;
            setTimeout(() => typeText(el, text, index + 1), speed);
        }
    }

    /* Smooth Scroll */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const offset = 80;
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });
    
    /* Tab Navigation */
    const pricingTabs = document.querySelectorAll('.pricing-tab');
    const tabPanels = document.querySelectorAll('.pricing-tab-panel');
    const tabIndicator = document.querySelector('.pricing-tab-indicator');
    
    function switchTab(tabName) {
        // Update tab buttons
        pricingTabs.forEach(tab => {
            if (tab.dataset.tab === tabName) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });
        
        // Update tab panels
        tabPanels.forEach(panel => {
            if (panel.id === 'panel-' + tabName) {
                panel.classList.add('active');
            } else {
                panel.classList.remove('active');
            }
        });
        
        // Update URL hash
        window.location.hash = tabName;
    }
    
    // Tab click handlers
    pricingTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const tabName = tab.dataset.tab;
            switchTab(tabName);
        });
    });
    
    // Handle URL hash on load
    function handleHashChange() {
        const hash = window.location.hash.slice(1);
        if (hash === 'source-code' || hash === 'partnership') {
            switchTab(hash);
        }
    }
    
    // Check hash on load
    if (window.location.hash) {
        handleHashChange();
    }
    
    // Listen for hash changes
    window.addEventListener('hashchange', handleHashChange);
});

/* FAQ Toggle */
function toggleFaq(button) {
    const faqItem = button.closest('.faq-item');
    const answer = faqItem.querySelector('.faq-answer');
    const isOpen = faqItem.classList.contains('open');
    
    document.querySelectorAll('.faq-item.open').forEach(item => {
        if (item !== faqItem) {
            item.classList.remove('open');
            item.querySelector('.faq-answer').style.maxHeight = '0';
        }
    });
    
    if (isOpen) {
        faqItem.classList.remove('open');
        answer.style.maxHeight = '0';
    } else {
        faqItem.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
    }
}

/* Partnership ToS Checkbox */
document.addEventListener('DOMContentLoaded', () => {
    const tosCheckbox = document.getElementById('tos-agree');
    const partnershipBtn = document.getElementById('partnership-btn');
    
    if (tosCheckbox && partnershipBtn) {
        // Initial state - button disabled
        partnershipBtn.classList.add('btn-disabled');
        
        tosCheckbox.addEventListener('change', function() {
            if (this.checked) {
                partnershipBtn.disabled = false;
                partnershipBtn.classList.remove('btn-disabled');
            } else {
                partnershipBtn.disabled = true;
                partnershipBtn.classList.add('btn-disabled');
            }
        });
    }
});
