<?php
// echo date('l d M Y');
// exit();
$age = null;
$age = date('Y') - $_POST['annee'];
echo $age;
?>

<?php if($age >= 18): ?>
    Bienvenu a la scetion reservee aux adultes
<?php else: ?>
    <form action="" method="post">
        <div class="form-group">
            <select name="annee">
                <?php for($i = 2020; $i > 1990; $i--): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor ?> 
            </select>
        </div>
        <button type="submit">Selectionner</button>
    </form>
<?php endif ?>