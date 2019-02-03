<?php require('layout/header.php'); ?>
    LA home
    <div class="container-fluid">
    <div class="row justify-content-center">
    <?php 
    $row = 0;
    foreach($characters as $character):
        
        if($row == 3)
        {
            echo '</div><div class="row justify-content-center">';
            $row = 0;
            ?>
            <div class="charact col-4  justify-content-center">
                <img src="<?=route('home')?>/charac/<?=$character->id?>.png" alt="<?=$character->name ?>">
            </div>
            <?php
        } 
        else {
        
    ?>
    <div class="charact col-4  justify-content-center">
    <img src="<?=route('home')?>/charac/<?=$character->id?>.png" class="character" alt="<?=$character->name ?>">
    </div>
        <?php }
        $row ++;
        endforeach; ?>
    </div>
<?php require('layout/footer.php'); ?>