<?php require('layout/header.php'); ?>
    LA home
    <div class="container">
        <ul>
    <div class="row justify-content-around">
    <?php 
    $row = 0;
    foreach($characters as $character):
        
        if($row == 3)
        {
            echo '</div><div class="row justify-content-around">';
            $row = 0;
            ?>
            <li class="list_item">
                <div class="charact">
                    <img src="<?=route('home')?>/charac/<?=$character->id?>.png" class="character" alt="<?=$character->name ?>">
                </div>
            </li>
            <?php
        } 
        else {
        
    ?>
    <li class="list_item">
        <div class="charact rounded">
            <img src="<?=route('home')?>/charac/<?=$character->id?>.png" class="character" alt="<?=$character->name ?>">
        </div>
    </li>
        <?php }
        $row ++;
        endforeach; ?>
    </ul>    
</div>

<?php require('layout/footer.php'); ?>