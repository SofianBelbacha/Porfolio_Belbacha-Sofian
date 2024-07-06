window.addEventListener("scroll", function() {
    var navbar = document.querySelector(".navbar");
    
    if (window.scrollY > 130) {
        navbar.classList.add("navbar-scroll");
        navbar.classList.add("fixed-top");
        navbar.classList.remove("navbar-NotScroll");
    } else {
        navbar.classList.remove("navbar-scroll");
        navbar.classList.add("navbar-NotScroll");
        navbar.classList.remove("fixed-top");


    }
});

window.addEventListener('scroll', function() {
    document.getElementById('showScroll').innerHTML = window.pageYOffset + 'px';
});

function openPDF() {
    window.open("image/CV_Belbacha.pdf", '_blank');
  }

//document.querySelector('.overlay').addEventListener('click', function() {
//    window.location.href = 'app/Views/details_portfolio.php'; // Remplacez 'votre_page.html' par le chemin de votre page HTML
//});

