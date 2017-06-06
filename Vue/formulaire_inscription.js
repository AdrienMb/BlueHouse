function surligne(champ, erreur)

{

   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "#6af663";
}

function verifChamp(champ){
   if(champ.value.length < 2 || champ.value.length > 125)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
 }

 function verifMail(champ) {
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{1,4}$/;
    if(!regex.test(champ.value)){
       surligne(champ, true);
       return false;
    }
    else{
       surligne(champ, false);
       return true;
    }
 }

 function verifTel(champ){
   var regex = /^0[1-68]([0-9]{7,8})$/;
   if(!regex.test(champ.value)){
      surligne(champ, true);
      return false;
   }
   else{
      surligne(champ, false);
      return true;
   }
}

 function verifForm(f){
    var lastNameOk = verifChamp(f.lastName);
    var firstNameOk = verifChamp(f.firstName);
    var phoneNumberOK = verifTel(f.phoneNumber);
    var mailOk = verifMail(f.email);
    var passwordOK = verifChamp(f.password);
    var password2OK = verifChamp(f.password_2);
    var idHouseOK = verifChamp(f.idHouse)



    if(lastNameOk && firstNameOk && phoneNumber && mailOk && passwordOk && password2OK && idHouseOK)

       return true;

    else

    {

       alert("Veuillez remplir correctement tous les champs");

       return false;

    }

 }


// var form2 = document.getElementsByName("version");
