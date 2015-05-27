<div data-role="page" id="pageajouteroffres">   
<?php
include "vues/entetepageavecboutonretour.html";
?>
    <div data-role="content" id="divajouteroffres">
    <form action="#" rel="external" id="ajoutoffre">
        <label for="depart">Départ</label>
            <select name="depart" id="depart" data-role="slider">
                <option value="off" id="domicile">Domicile</option>
                <option value="on" id="entreprise">Entreprise</option>
            </select>
        <label for="offre">Offre</label>
            <select name="offre" id="offre" data-role="slider">
                <option value="off" id="permanent">Permanent</option>
                <option value="on" id="date">Date</option>
            </select>
        <div id="choixdate"><fieldset data-role="controlgroup" data-type="horizontal">
            <legend>Jour proposé :</legend>
                <input type="radio" name="jour" id="lu" value="Lundi">
                <label for="lu">Lu</label>
                <input type="radio" name="jour" id="ma" value="Mardi">
                <label for="ma">Ma</label>
                <input type="radio" name="jour" id="me" value="Mecredi">
                <label for="me">Me</label>
                <input type="radio" name="jour" id="je" value="Jeudi">
                <label for="je">Je</label>
                <input type="radio" name="jour" id="ve" value="Vendredi">
                <label for="ve">Ve</label>
        </fieldset></div>
        <label for="heure">Indiquer l'heure de départ</label>
            <input type="range" name="heure" id="heure" value="6" min="6" max="23" step="1" data-highlight="true">
        <label for="minute">Préciser les minutes</label>
            <input type="range" name="minute" id="minute" value="0" min="0" max="55" step="5" data-highlight="true">
        <div id="datep"><label for="date">Date</label>
            <input type="date" data-clear-btn="false" name="date" id="date" value=""></div>
        <label for="lieu">Lieu proposé</label>
            <input type="text" name="lieu" id="lieu" value="">
        <div id="ajout"><label for="btnAjout">Points de ramassage éventuels sur le parcours</label>
            <p><a href="#" data-role="button" data-inline="true" data-icon="plus" id="btnAjout">Ajouter un point de ramassage</a></p>
            <input type="text" name="point" id="point" value=""></div>
        <input type="submit" name="submit" id="btnAjoutOffre" value="Envoyer"  />
    </form>
    </div><!-- /fin content -->    
<?php    
    include "vues/pied.html";
?>
        
</div><!-- /fin page -->