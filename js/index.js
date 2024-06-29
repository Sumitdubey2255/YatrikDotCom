const loader = document.querySelector('.loader');
window.addEventListener("load", () => {
    setTimeout(() => {
        loader.style.display = "none";
    },2000);
});

//scroll
const links = [ ...document.querySelectorAll('.nav-link')];

links.map(link=> {
    link.addEventListener('click', (e)=>{
        e.preventDeafult();

        const id = e.currentTarget.getAttribute("href").slice(1);
        const el = document.getElementById(id);
        const navHeight = navigation.getBoundingClientRect().height;
        const fix = navigation.classlList.contains("fix");
        const position = el.offsetTop - navHeight;

        window.scrollTo({
            left: 0,
            top: position,
        });

        navList.classlList.remove("open");

    });
});

//scroll revael

const scroll = ScrollReveal({
    distance: "100px",
    duration: 1500,
    reset: true,
});

scroll.reveal(`.container h2, p, #slides_parent .container, .slides, `,{
    origin: 'top',
    interval: 100,
});

scroll.reveal('.row img,a',{
    origin: "left",
    interval: 150,
});

scroll.reveal('.col .title h1, p, .d-flex, h2, .rating, .d-flex, h3, .btn',{
    origin: "right",
    interval: 150,
});

scroll.reveal