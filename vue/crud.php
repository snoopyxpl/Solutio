<?php


include("../modele/requete_general.php");

?>

<script>
    function delete_user($cond){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        document.getElementById("row").innerHTML = "Deleted";
      } 
    };
        xmlhttp.open("GET","../modele/delete_user.php?id="+$cond,true);
        xmlhttp.send();
    }

    function select(){
        var param1 = document.getElementById("param1").value;
        var param2 = document.getElementById("param2").value;
        var xmlhttp = new XMLHttpRequest();
        var tableau = document.getElementById("tableau");
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                tableau.innerHTML = xmlhttp.responseText;
            }else{
                tableau.innerHTML = "xmlhttp.readyState = "+xmlhttp.readyState +" "+ "xmlhttp.status = " + xmlhttp.status +" "+ xmlhttp.responseText;                                                                                                                                                           //cermark
            }
        };
        xmlhttp.open("GET","../modele/select_user.php?param1="+param1+"&param2="+param2,true);
        xmlhttp.send();
    }    
</script>

<body>
    <form>
        <select id="param1">
            <option value="">...</option>
            <option value="iduser">ID</option>
            <option value="type_user">Type utilisateur</option>
            <option value="username">Nom utilisateur</option>
            <option value="type_user">Nom</option>
            <option value="type_user">Prénom</option>
            <option value="type_user">Age</option>
            <option value="type_user">Sexe</option>
            <option value="type_user">Adresse Mail</option>
            <option value="type_user">Adresse</option>
        </select>

        <input type="text" id="param2" placeholder="Recherche..."></input>
        <button onclick="select()">Rechercher</button>
    </form>

    <div id="tableau">
        Quel est votre recherche ?
    </div>
</body>