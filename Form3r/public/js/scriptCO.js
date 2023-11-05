function passwordShowHide() {
    var x = document.getElementById("motdepasse");
    var show_eye = document.getElementById("showEye");
    var hide_eye = document.getElementById("hideEye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "inline";
    } else {
      x.type = "password";
      show_eye.style.display = "inline";
      hide_eye.style.display = "none";
    }
  }