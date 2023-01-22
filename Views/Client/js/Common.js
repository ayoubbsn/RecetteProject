let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  console.log(slides.length)
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 5000); 
}
function logic(i) {
  for (let j = 1; j <= 5; j++) {
    if (j <= i) {
      $("#s" + j).addClass("checked");
    } else { $("#s" + j).removeClass("checked") }
  }
}
