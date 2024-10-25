window.addEventListener("scroll", () => {
    const footer = document.querySelector("footer");
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        footer.classList.add("show-footer"); // Mostra il footer
    } else {
        footer.classList.remove("show-footer"); // Nasconde il footer
    }
});
