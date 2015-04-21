<div data-role="page" id="pageoffresoffertes">
<?php
    include "vues/entetepage.html";
?>
    
<div data-role="main" class="ui-content" data-theme="c" data-content-theme="d">
    <div data-role="collapsible-set" data-theme="c" data-content-theme="d">
        <div>
<?php
    $jour = "";
    foreach ($lesOffres as $uneOffre){
        if($jour!=$uneOffre['jour']){
            $jour=$uneOffre['jour'];
    ?>

        <?php if($jour==$jour){echo "</div>";} ?>   
            <div data-role="collapsible">
                <h1><?php echo $jour ?></h1>
                <?php 
                    } //fin si
                ?>
                <p id="<?php echo $uneOffre['id'] ?>"><a href ="#pageoffre" style="text-decoration: none; color:black" ><?php echo $uneOffre['date']." à ".$uneOffre['heure']." pour ".$uneOffre['retour']?> </a> </p>
                <?php 
                    }//fin foreach
                ?>  
    </div>     
    <!-- /content -->
</div>
</div>     
<?php    
    include "vues/pied.html";
?>