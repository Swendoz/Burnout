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

