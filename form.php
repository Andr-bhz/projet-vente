<?php 
$heure=date('H:i:s');
$he=date('Y');
echo $heure
?>
<form action="" method="post">
    <select name="heure" id="">
        <?php if($heure <> $he){}?>
        l'heure afficher et different de l'heure exact
    </select>
</form>