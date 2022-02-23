<?php
$json = file_get_contents('./lib/json/json.json');
$data = json_decode($json);
?>

<div class="container">
    <div class="row rowGap">
        <?php
        foreach ($data as $tab) {
            ?>
            <div class="col-sm-4 colStyle">
                <?php
                print $tab->titre . "<br><br>";
                if ($tab->disponible == true) {
                    print $tab->description;
                } else {
                    print "Epuisé";
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>
