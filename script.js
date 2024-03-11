words = [ "Werkgerelateerde uitputting", "Emotionele vermoeidheid", "Verlies van motivatie", "Mentale blokkade", "Fysieke en mentale uitputting" ];

const burnoutDesc = new AutoTyping({ id: 'burnout-desc', typeText: words }).init();

// Nav Mobile
const navBurger = document.querySelector('.hamburger');
const navMobile = document.querySelector('.nav-mobile');

navBurger.addEventListener('click', () =>
{
    navMobile.classList.toggle('active');
    navBurger.classList.toggle('active');
}
);

const closeMobile = document.querySelector('.close-mobile');

closeMobile.addEventListener('click', () =>
{
    navMobile.classList.remove('active');
    navBurger.classList.remove('active');
});


