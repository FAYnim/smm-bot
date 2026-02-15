/* Ubah nilai ini saat ada copy terjual (1-5) */
const currentSold = 2;

const priceEscalation = [
    { copy: 1, price: 45, status: 'Available Now' },
    { copy: 2, price: 50, status: '—' },
    { copy: 3, price: 55, status: '—' },
    { copy: 4, price: 60, status: '—' },
    { copy: 5, price: 65, status: 'Final Copy' }
];

function getPriceInfo(copyNumber) {
    const clamped = Math.max(1, Math.min(copyNumber, priceEscalation.length));
    const current = priceEscalation[clamped - 1];
    const next = clamped < priceEscalation.length ? priceEscalation[clamped] : null;
    const copiesLeft = priceEscalation.length - clamped + 1;

    return {
        currentCopy: clamped,
        currentPrice: current.price,
        nextPrice: next ? next.price : null,
        copiesLeft: copiesLeft,
        status: current.status,
        escalation: priceEscalation.map(item => ({
            ...item,
            status: item.copy < clamped ? 'Sold'
                  : item.copy === clamped ? 'Available Now'
                  : item.copy === priceEscalation.length ? 'Final Copy'
                  : '—'
        }))
    };
}

function calculateProgress(copyNumber) {
    const soldCount = copyNumber - 1;
    return (soldCount / priceEscalation.length) * 100;
}

function updateEscalationDisplay(copyNumber) {
    const info = getPriceInfo(copyNumber);
    const progress = calculateProgress(copyNumber);

    const fillBar = document.querySelector('.pricing-escalation-fill');
    if (fillBar) {
        fillBar.style.width = progress + '%';
    }

    const currentPriceEl = document.querySelector('.pricing-escalation-val.text-accent');
    if (currentPriceEl) {
        currentPriceEl.textContent = '$' + info.currentPrice;
    }

    const nextPriceEl = document.querySelector('.pricing-escalation-val.text-amber');
    if (nextPriceEl) {
        nextPriceEl.textContent = info.nextPrice !== null ? '$' + info.nextPrice : '—';
    }

    const copiesLeftEl = document.querySelector('.copies-left');
    if (copiesLeftEl) {
        copiesLeftEl.textContent = info.copiesLeft;
    }

    const rows = document.querySelectorAll('.pricing-table-row');
    rows.forEach((row, index) => {
        const rowData = info.escalation[index];
        if (!rowData) return;

        row.classList.remove('pricing-table-active');
        if (rowData.copy === info.currentCopy) {
            row.classList.add('pricing-table-active');
        }

        const statusEl = row.querySelector('.pricing-table-status');
        if (statusEl) {
            statusEl.textContent = rowData.status;
        }
    });

    const ctaBtn = document.querySelector('#panel-source-code .btn-primary');
    if (ctaBtn) {
        const msg = encodeURIComponent(
            `Hello! I'm interested in the PTC Bot source code for sale. I saw the landing page and want to purchase. Is copy #${info.currentCopy} still available at $${info.currentPrice}? Please provide more information.`
        );
        ctaBtn.href = ctaBtn.href.replace(/\?text=.*$/, '?text=' + msg);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    updateEscalationDisplay(currentSold);
});

/* Scroll & Animations */
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
    
    const pricingTabs = document.querySelectorAll('.pricing-tab');
    const tabPanels = document.querySelectorAll('.pricing-tab-panel');
    const tabIndicator = document.querySelector('.pricing-tab-indicator');
    
    function switchTab(tabName) {
        pricingTabs.forEach(tab => {
            if (tab.dataset.tab === tabName) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });

        tabPanels.forEach(panel => {
            if (panel.id === 'panel-' + tabName) {
                panel.classList.add('active');
            } else {
                panel.classList.remove('active');
            }
        });

        window.location.hash = tabName;
    }

    pricingTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const tabName = tab.dataset.tab;
            switchTab(tabName);
        });
    });

    function handleHashChange() {
        const hash = window.location.hash.slice(1);
        if (hash === 'source-code' || hash === 'partnership') {
            switchTab(hash);
        }
    }

    if (window.location.hash) handleHashChange();
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

/* ToS Checkbox */
document.addEventListener('DOMContentLoaded', () => {
    const tosCheckbox = document.getElementById('tos-agree');
    const partnershipBtn = document.getElementById('partnership-btn');

    if (tosCheckbox && partnershipBtn) {
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
