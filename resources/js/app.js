import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    // Carousel functionality for categories
    const categoryDots = document.querySelectorAll(".categories-section .dot");
    categoryDots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            categoryDots.forEach((d) => d.classList.remove("active"));
            dot.classList.add("active");
            // Here you would normally slide to the corresponding category set
            // For demo purposes, we're just changing the active dot
        });
    });

    // Carousel functionality for featured services
    const serviceDots = document.querySelectorAll(".featured-services .dot");
    serviceDots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            serviceDots.forEach((d) => d.classList.remove("active"));
            dot.classList.add("active");
            // Here you would normally slide to the corresponding service set
        });
    });

    // Navigation buttons for featured services
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    const servicesSlider = document.querySelector(".services-slider");

    if (prevBtn && nextBtn && servicesSlider) {
        prevBtn.addEventListener("click", () => {
            servicesSlider.scrollBy({
                left: -300,
                behavior: "smooth",
            });
        });

        nextBtn.addEventListener("click", () => {
            servicesSlider.scrollBy({
                left: 300,
                behavior: "smooth",
            });
        });
    }

    // Filter buttons for popular services
    const filterBtns = document.querySelectorAll(".filter-btn");
    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            filterBtns.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
            // Here you would filter the services based on the selected category
        });
    });

    // Responsive navigation
    function checkScreenSize() {
        const width = window.innerWidth;
        if (width < 768) {
            // Mobile adjustments
            document.querySelectorAll(".filter-buttons").forEach((el) => {
                el.style.overflowX = "auto";
                el.style.whiteSpace = "nowrap";
                el.style.display = "block";
                el.style.padding = "10px 0";
            });
        } else {
            // Desktop adjustments
            document.querySelectorAll(".filter-buttons").forEach((el) => {
                el.style.overflowX = "visible";
                el.style.whiteSpace = "normal";
                el.style.display = "flex";
                el.style.padding = "0";
            });
        }
    }

    // Check on load and resize
    checkScreenSize();
    window.addEventListener("resize", checkScreenSize);
});
