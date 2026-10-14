<?php 
$email = $_POST['email'];
if(filter_var($email,FILTER_VALIDATE)) {
    echo "email valider";
}
else{
    echo "email invalider";
}
?>
<Form action="" method ="POST" >
    <div>
        <label for="">nom</label>
        <input type="text" name="nom" id="nom" placeholder="entrer votre nom">
    </div>
    <div>
        <label for="">prenom</label>
        <input type="text" name="prenom" id="prenom" placeholder="entrer votre prenom">
    </div>
    <div>
        <input type="email" name="email" id="email"> 
    </div>
    <button type="submit">sumettre</button>
</Form>

//prix de la marchandise
//choisir
//admin qui doit savoir toute les transaction Faites dans le site 
//repossibiliter de se connecter avce son adresse email