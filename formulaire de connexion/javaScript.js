const exp1 = /^[A-Za-z]{5,}[0-9]*@[A-Za-z]+\.(com|org|net)$/;
const exp2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&*]).{8,}$/;
function verifierChamp(Input,champ) {
  var exp;
  if(champ==="email"){
    exp=exp1;
  }
  else if(champ==="password"){
    exp=exp2;
  }
  if (!exp.test(Input.value)) {
    Input.style.borderColor = 'red'; 
    return false;
  } else {
    Input.style.borderColor = '#f1c40f'; 
    return true;
  }
}
function couleurBordure(champ) {
  var Input = document.getElementById(champ);
  if (Input.value === "") {
    Input.style.borderColor = '#f1c40f'; 
    return false;
  } else {
    verifierChamp(Input,champ); 
  }
}
function validerFormulaire(event) {
  var emailInput = document.getElementById("email");
  var passwordInput = document.getElementById("password");
  var emailValide = verifierChamp(emailInput, "email");
  var passwordValide = verifierChamp(passwordInput, "password");
  if (!emailValide || !passwordValide) {
    event.preventDefault(); 
    alert("Veuillez corriger les erreurs avant de soumettre !");
  }
}
document.getElementById("monFormulaire").addEventListener("submit", validerFormulaire);
