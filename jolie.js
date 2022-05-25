function hacking() {
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    // var mailCopie = email;
    var passCopie = pass;

    var typeComp = "a";
    if(typeof(email) != typeof(typeComp) && pass == passCopie) {
        var a = "Votre mots de passe ou votre mail est incorect";
        document.getElementById("valeur").innerHTML= a;
    }
    if(typeof(email) == typeof(typeComp) && pass == passCopie) {
        var b = "Votre Numero ou mots de passe est incorrect";
        document.getElementById("valeur").innerHTML = b;
    }

    console.log(`dhkdkjlfafkldfhklasdjfhasdffadfkflamark${email}markdjfsaljdfhkjldfhkjaldfkasfkdfmark${pass}markskhfadfaskdlfksjdkfaslfk`);

}