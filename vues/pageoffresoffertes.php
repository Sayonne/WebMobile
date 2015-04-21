<div data-role="page" id="pageoffresoffertes">
<?php
    include "vues/entetepage.html";
?>
<div data-role="content" id="divliste"> 
    <ul data-role="listview" id="lstoffres" >
<?php
    $jour = "";
    foreach ($lesOffres as $uneOffre){
        if($jour!=$uneOffre['jour']){
            $jour=$uneOffre['jour'];
    ?>
        <div data-role="collapsible-set" data-theme="c" data-content-theme="d">
            <div data-role="collapsible">
                <h1><?php echo $jour ?></h1>
                <p id="<?php echo $uneOffre['id'] ?>"><a href ="#pageoffre" style="text-decoration: none; color:black" ><?php echo $uneOffre['date']." à ".$uneOffre['heure']." pour ".$uneOffre['retour']?> </a> </p>
            </div>
        </div>       

<?php 
        } //fin si
?>
           
<?php 
    } //fin foreach
?>
    </ul>
    </div><!-- /content -->
<?php    
    include "vues/pied.html";
?>
</div> <!-- /page -->