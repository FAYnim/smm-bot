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
