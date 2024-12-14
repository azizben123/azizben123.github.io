const exp1 = /^[A-Za-z]{5,}[0-9]*@[A-Za-z]+\.(com|org|net)$/;
const exp2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&*]).{8,}$/;
const exp3 = /^[A-Za-zÀ-ÖØ-öø-ÿ\-\' ]{2,50}$/;
const exp4 = /^(2|3|4|5|7|9)[0-9]{7}$/;
function verifierChamp(Input,champ) {
  var exp;
  if(champ==="email"){
    exp=exp1;
  }
  else if(champ==="password" || champ==="password1" || champ==="password2"){
    exp=exp2;
  }
  else if(champ==="nom" ||champ==="prenom"){
    exp=exp3;
  }
  else{
    exp=exp4;
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
function validerFormulaireConnection() {
  var emailInput = document.getElementById("email");
  var passwordInput = document.getElementById("password");
  var emailValide = verifierChamp(emailInput, "email");
  var passwordValide = verifierChamp(passwordInput, "password");
  if (!emailValide || !passwordValide) { 
    alert("Veuillez corriger les erreurs avant de soumettre !");
    return false;
  }
}
function validerFormulaireInscription(){
    var emailInput = document.getElementById("email");
    var nomInput=document.getElementById("nom");
    var prenomInput=document.getElementById("prenom");
    var numTelInput=document.getElementById("numTel");
    if (!verifierChamp(emailInput, "email")||!verifierChamp(nomInput, "nom")||!verifierChamp(prenomInput, "prenom")||!verifierChamp(numTelInput, "numTel")){
      alert("Veuillez corriger les erreurs avant de soumettre !");
      return false;
    }
}
function validerFormulaireMotDePasse(){
  var passwordInput1 = document.getElementById("password1");
  var passwordInput2 = document.getElementById("password2");
  if (!verifierChamp(passwordInput1,"password1")||!verifierChamp(passwordInput2,"password2")||passwordInput1.value!=passwordInput2.value){
    alert("Veuillez corriger les erreurs avant de soumettre !");
      return false;
  }
  else{
    return true;
  }
  
}

