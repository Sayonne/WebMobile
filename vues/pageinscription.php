<div data-role="page" id="pageinscription">
<?php
include "vues/entetepage.html";
include "vues/logo.html";
?>
<div data-role="content" id="divconnexion">       
<form method="post" action="enregistreruser.php">
    <div data-role="fieldcontain">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="" />
    </div>
    <div data-role="fieldcontain">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="" />
    </div>
    <div data-role="fieldcontain">
        <label for="mail">Mail</label>
        <input type="text" name="mail" id="mail" value="" />
    </div>
    <div data-role="fieldcontain">
        <label for="tel">Téléphone</label>
        <input type="text" name="tel" id="tel" value="" />
    </div>
    <div data-role="fieldcontain">
                <label for="service">Indiquer votre service</label>
        <fieldset data-role="controlgroup" data-type="horizontal">
                <input type="radio" name="recherche" id="recherche" value="on" checked="checked">
                <label for="recherche">Recherche</label>
                <input type="radio" name="production" id="production" value="off">
                <label for="production">Production</label>
                <input type="radio" name="commercial" id="commercial" value="other">
                <label for="commercial">Commercial</label>
                <input type="radio" name="securite" id="securite" value="other">
                <label for="securite">Sécurité</label>
        </fieldset>
    </div>
</form>
        <p>
            <a href="#"  data-role="button" id="btninscription" >Envoyer</a>
         </p>
    </div><!-- /content -->
    
<?php    
include "vues/pied.html";
?>
</div> <!-- /page -->