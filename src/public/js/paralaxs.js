let text = document.getElementById("text");
let leaf = document.getElementById("leaf");
let hill1 = document.getElementById("hill1");
let hill4 = document.getElementById("hill4");
let hill5 = document.getElementById("hill5");

window.addEventListener('scroll', ()=>{
  let value = window.screenY;
  text.style.marginTop = value * 2.5 + 'px';
});

window.onscroll = function() {
  text.style.marginTop = window.scrollY + 'px';
  leaf.style.marginLeft = window.scrollY + 'px';
  hill1.style.marginTop = window.scrollY + 'px';
  hill2.style.marginTop = window.scrollY + 'px';
  hill3.style.marginTop = window.scrollY + 'px';
};
