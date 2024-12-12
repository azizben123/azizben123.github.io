function openInIframe(){
  document.getElementById("iframe2").src = "http://localhost/site societe/les fichiers php/page.php";
}
function farouma(){
  var box = document.getElementById('main');
  box.scrollIntoView({ behavior: 'smooth' });
}
function swipperjs(){

  const swiper1=new Swiper('.card-wrapper1', {
    loop: true,

  pagination: {
    el: '.swiper-pagination1',
    clickable:true,
    dynamicBullets:true,
  },
  navigation: {
    nextEl: '.boutton-swipper1-next',
    prevEl: '.boutton-swipper1-prev',
  },
  autoplay: {
    delay: 4000, 
    disableOnInteraction: false, 
  },

   
});
const swiper2= new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween:30,


  pagination: {
    el: '.swiper-pagination2',
    clickable:true,
    dynamicBullets:true,
  },
  autoplay: {
    delay: 3000, 
    disableOnInteraction: false, 
  },

  navigation: {
    nextEl: '.boutton-swipper2-next',
    prevEl: '.boutton-swipper2-prev',
  },
 
 breakpoints: {
    0:{
        slidesPerView: 1,
      },
      380:{
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
   
});
}
function menu(x){
    if(x==0){
        const menuLinks = document.getElementById('menu-links');
    if (menuLinks.style.display === 'block') {
        menuLinks.style.display = 'none';
    } else {
        menuLinks.style.display = 'block';
    }

    }
    else{
        const links = document.querySelectorAll('.menu-links'+x);
        links.forEach(element => {
        if (element.style.display === 'block') {
            element.style.display = 'none';
        } else {
            element.style.display = 'block';
        }
    });

    }

}
