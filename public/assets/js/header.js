document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("#header");
    const scrollThreshold = 100; // Adjust this value to change when the logo switches

    function handleScroll() {
        if (window.scrollY > scrollThreshold) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    }

    // Initial check
    handleScroll();

    // Add scroll event listener with throttling for better performance
    let ticking = false;
    window.addEventListener("scroll", function () {
        if (!ticking) {
            window.requestAnimationFrame(function () {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });
});
