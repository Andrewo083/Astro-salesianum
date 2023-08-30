let slide = document.getElementById("slide");
let img = document.getElementById('img');
let menuu = document.getElementById('menuu');

slide.addEventListener('click', () => {
  if (window.innerWidth <= 500) {
    slide.classList.add("absolute");
    slide.style.left = "0";
    img.classList.remove('hidden');
    menuu.classList.remove('justify-center');
    menuu.classList.add('justify-between');
  } else {
    slide.classList.add("left-[-500px]");
  }
});

img.addEventListener('click', () => {
  if (window.innerWidth <= 500) {
    slide.classList.remove("absolute");
    slide.style.left = "-200px";
    img.classList.add('hidden');
    menuu.classList.add('justify-center');
    menuu.classList.remove('justify-between');
  } else {
    slide.classList.remove("left-[-500px]");
  }
});

window.addEventListener('resize', () => {
  if (window.innerWidth > 500) {
    slide.classList.remove("left-[-500px]");
    slide.classList.remove("absolute");
    img.classList.add('hidden');
    menuu.classList.add('justify-center');
    menuu.classList.remove('justify-between');
  }
});