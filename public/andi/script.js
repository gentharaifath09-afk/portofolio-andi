// Efek Navbar saat di-scroll
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.style.padding = '10px 5%';
        navbar.style.boxShadow = '0 4px 10px rgba(0,0,0,0.1)';
    } else {
        navbar.style.padding = '15px 5%';
        navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
    }
});