function loadLanguage(lang) {
    fetch(`./js/${lang}.json`)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erreur HTTP! statut: ${response.status}`);
            }
            return response.json();
        })
        .then(translations => {
            for (const id in translations) {
                const element = document.getElementById(id);
                if (element) {
                    // Remplacer les \n par des balises <br>
                    element.innerHTML = translations[id].replace(/\n/g, "<br>");
                }
            }
        })
        .catch(error => console.error("Erreur de chargement de la langue :", error));
}


// Détecter la langue de l'URL et charger la langue correspondante
const urlParams = new URLSearchParams(window.location.search);
const lang = urlParams.get("lang") || "fr"; // Langue par défaut : français
loadLanguage(lang);




  
  // Attente du chargement du DOM
  window.addEventListener('DOMContentLoaded', event => {
    // Navbar shrink function
    var navbarShrink = function () {
      const navbarCollapsible = document.body.querySelector('#mainNav');
      if (!navbarCollapsible) {
        return;
      }
      if (window.scrollY === 0) {
        navbarCollapsible.classList.remove('navbar-shrink')
      } else {
        navbarCollapsible.classList.add('navbar-shrink')
      }
    };
  
    // Shrink the navbar 
    navbarShrink();
  
    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);
  
    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
      new bootstrap.ScrollSpy(document.body, {
        target: '#mainNav',
        rootMargin: '0px 0px -40%',
      });
    };
  
    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
      document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
      responsiveNavItem.addEventListener('click', () => {
        if (window.getComputedStyle(navbarToggler).display !== 'none') {
          navbarToggler.click();
        }
      });
    });
  });
  
  // Fermeture de la barre de cookies
  document.getElementById('close-cookie-bar').addEventListener('click', function () {
    document.getElementById('cookie-bar').style.display = 'none';
  });
  
  // Affichage des images dans la modale
  const images = document.querySelectorAll('#myCarousel img');
  const modalImage = document.getElementById('modalImage');
  
  images.forEach(image => {
    image.addEventListener('click', () => {
      const imageUrl = image.src;
      modalImage.src = imageUrl;
    });
  });

  window.addEventListener('DOMContentLoaded', (event) => {
    // Votre code JavaScript ici
  });