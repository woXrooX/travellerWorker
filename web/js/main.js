"use strict";


///////////////////////////// body > LOADING
window.addEventListener('load', () => {
  document.querySelector("body > loading").style.opacity = 0;
  setTimeout(()=>{
    document.querySelector("body > loading").style.zIndex = getComputedStyle(document.body).getPropertyValue('--z-minus');
  }, 100);
});

///////////////////////////// body > SLIDESHOW
// add images to slideshow
slideshowImages.forEach((image, index) => {
  document.querySelector("body > slideshow").innerHTML += `<img src="${image}">`;
});

//  animate
let index = 0;
setInterval(()=>{
  document.querySelectorAll("body > slideshow > img").forEach((img) => {
    img.style.opacity = 0;
  });
  document.querySelectorAll("body > slideshow > img")[index].style.opacity = 1;
  index < slideshowImages.length-1 ? index++ : index = 0;
}, 10000);




/////////////////// MENU
///////// ACTIVE
document.querySelectorAll("body > header > section[for=siteMap] > nav > a").forEach((hrefs)=>{
  if(hrefs.getAttribute("href") == window.location.pathname){
    hrefs.style.color = getComputedStyle(document.body).getPropertyValue('--color-primary');
    hrefs.style.backgroundColor = getComputedStyle(document.body).getPropertyValue('--color-highlight');
    hrefs.style.borderColor = getComputedStyle(document.body).getPropertyValue('--color-highlight');
  }else if(window.location.pathname == "/"){
    document.querySelector("body > header > nav > a:nth-child(1)").style.color = getComputedStyle(document.body).getPropertyValue('--color-primary');
    document.querySelector("body > header > nav > a:nth-child(1)").style.backgroundColor = getComputedStyle(document.body).getPropertyValue('--color-highlight');
    document.querySelector("body > header > nav > a:nth-child(1)").style.borderColor = getComputedStyle(document.body).getPropertyValue('--color-highlight');
  }
});

///////// SHOW
document.querySelector("body > header > label").onclick = ()=>{
  document.querySelector("body > header > nav").style.transform = "translateX(0%)";
}
///////// HIDE
document.querySelector("body > header > nav > label").onclick = ()=>{
  document.querySelector("body > header > nav").removeAttribute("style");
}


/////////////////// PARALLAX
window.addEventListener("scroll", ()=>{
  document.querySelectorAll("body > slideshow > img").forEach((img) => {
    img.style.transform = `translate3d(0, ${window.pageYOffset*0.5}px, 0)`;
  });
});



/////////////////// animationOnScroll
const elements = document.querySelectorAll(".animationOnScroll");
let observer = new IntersectionObserver((items)=>{
  items.forEach((item, i) => {
    if(item.intersectionRatio > 0){
      item.target.style.animation = `fadeIn 0.5s forwards ease-in`;
    }else{
      item.target.removeAttribute("style");
    }
  });
});
elements.forEach((element) => {
  observer.observe(element);
});



///////////////////////////// body > main > gallery
if(document.body.contains(document.querySelector("body > main > gallery"))){

  // build gallery
  galleryImages.forEach((image)=>{
    document.querySelector("body > main > gallery").innerHTML += `
      <section>
        <img src="${image}">
        <span>${image.replace("../images/gallery/", "").replace(".jpg", "")}</span>
      </section>
    `;
  });

  // show pop up image
  document.querySelectorAll("body > main > gallery > section").forEach((section)=>{
    section.addEventListener("click", (event)=>{
      document.querySelector("body > gallery-pop").style.zIndex = getComputedStyle(document.body).getPropertyValue('--z-gallery-pop');
      document.querySelector("body > gallery-pop").style.opacity = 1;

      document.querySelector("body > gallery-pop > img").setAttribute("src", section.querySelector("img").getAttribute("src"));
      document.querySelector("body > gallery-pop > img").style.transform = "translate(-50%, -50%) scale(1)";

      document.querySelector("body > gallery-pop > span").innerHTML = section.querySelector("img").getAttribute("src").replace("../images/gallery/", "").replace(".jpg", "");
    });
  });
  // close pop up image
  function galleryPopUpClose(){
    document.querySelector("body > gallery-pop > img").removeAttribute("style");
    setTimeout(()=>{
      document.querySelector("body > gallery-pop").style.opacity = 0;
      setTimeout(()=>{
        document.querySelector("body > gallery-pop").removeAttribute("style");
      }, 200);
    }, 100);
  }

  document.querySelector("body > gallery-pop").addEventListener("click", (ev)=>{
    if(ev.target != document.querySelector("body > gallery-pop > img")){
      galleryPopUpClose();
    }
  });
  document.addEventListener("scroll", ()=>{
    if(document.querySelector("body > gallery-pop").style.opacity == 1){
      galleryPopUpClose();
    }
  });
}
