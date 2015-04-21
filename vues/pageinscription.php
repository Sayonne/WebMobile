<div data-role="page" id="pageinscription">
<?php
include "vues/entetepage.html";
include "vues/logo.html";
?>
<div data-role="content" id="divconnexion">       
    <div data-role="fieldcontain">
        <label for="login">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="" />
        <label for="login">Nom</label>
        <input type="text" name="nom" id="nom" value="" />
        <label for="login">Mail</label>
        <input type="text" name="mail" id="mail" value="" />
        <label for="login">téléphone</label>
        <input type="text" name="tel" id="tel" value="" />
        <label for="login">indiquer votre service</label>
        <div data-role="controlgroup" data-type="horizontal">
            <a  data-role="button">Recherche</a>
            <a  data-role="button">Production</a>
            <a  data-role="button">Commercial</a>
            <a  data-role="button">Securite</a>
        </div>
    </div>
        <p>
            <a href="#"  data-role="button" id="btninscription" >Envoyer</a>
         </p>
    </div><!-- /content -->
    
<?php    
include "vues/pied.html";
?>
</div> <!-- /page -->