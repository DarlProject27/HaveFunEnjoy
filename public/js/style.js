// Animasi masuk (fade-in saat load)
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section, .hero, .post, .card");

    sections.forEach((el, index) => {
        el.style.opacity = "0";
        el.style.transform = "translateY(30px)";
        el.style.transition = "all 0.8s ease-out";
        setTimeout(() => {
            el.style.opacity = "1";
            el.style.transform = "translateY(0)";
        }, 300 * index); // delay per elemen
    });
});

// Animasi scroll (reveal saat masuk viewport)
window.addEventListener("scroll", () => {
    const reveals = document.querySelectorAll("section, .card, .post");

    for (let i = 0; i < reveals.length; i++) {
        let windowHeight = window.innerHeight;
        let elementTop = reveals[i].getBoundingClientRect().top;
        let elementVisible = 120;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        }
    }
});
function openModal() {
        const modal = document.getElementById('uploadModal');
        const card = document.getElementById('modalCard');
        modal.classList.remove('hidden');
        setTimeout(() => {
            card.classList.remove('opacity-0', 'scale-90');
            card.classList.add('opacity-100', 'scale-100');
        }, 10);
    }

    function closeModal() {
        const modal = document.getElementById('uploadModal');
        const card = document.getElementById('modalCard');
        card.classList.remove('opacity-100', 'scale-100');
        card.classList.add('opacity-0', 'scale-90');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
    AOS.init({
      duration: 1000,
      once: true
    });
