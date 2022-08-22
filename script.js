var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var triDir = this.children[0];
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
      triDir.className = 'fas fa-solid fa-caret-right';
      console.log(triDir.className);
    } else {
      panel.style.display = "block";
      triDir.className = 'fas fa-solid fa-caret-down';
      console.log(triDir.className);
    }
  });
}
