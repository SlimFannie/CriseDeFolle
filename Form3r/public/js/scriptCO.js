const xs = window.matchMedia("(max-width:1180px)");
const nest = window.matchMedia("(min-width:1000px) and (max-height:800px");

function passwordShowHide() {
    var x = document.getElementById("inputPassword");
    var show_eye = document.getElementById("showEye");
    var hide_eye = document.getElementById("hideEye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    } else {
      x.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    }
  }

function requiredConnexion() {
    const matricule = document.getElementById("inputMatricule").value;
    const mdp = document.getElementById("inputPassword").value;
    const alertMatricule = document.getElementById("alertMatricule");
    const labelMatricule = document.getElementById("labelMatricule");
    const alertPassword = document.getElementById("alertPassword");
    const labelPassword = document.getElementById("labelPassword");

    if (matricule.length<1) {
      alertMatricule.innerHTML = "<i class=\"fa-solid fa-triangle-exclamation\"></i> Vous devez entrer un matricule";
      alertMatricule.classList.remove('d-none');
      alertMatricule.classList.add('d-block');
      if(xs.matches || nest.matches) {
        labelMatricule.innerHTML = "Entrez un matricule."
      }
      errorMAT = 1
    } else {
      alertMatricule.classList.remove('d-block');
      alertMatricule.classList.add('d-none');
      errorMAT = 0;
    }

    if (mdp.length<1) {
      alertPassword.innerHTML = "<i class=\"fa-solid fa-triangle-exclamation\"></i> Vous devez entrer un mot de passe";
      alertPassword.classList.remove('d-none');
      alertPassword.classList.add('d-block');
      errorMDP = 1;
      if(xs.matches || nest.matches) {
        labelPassword.innerHTML = "Entrez un mot de passe."
      }
    } else {
      alertPassword.classList.remove('d-block');
      alertPassword.classList.add('d-none');
      errorMDP = 0;
    }

    if (errorMAT == 0 && errorMDP == 0) {
      return true;
    } else {
      return false;
    }
 }