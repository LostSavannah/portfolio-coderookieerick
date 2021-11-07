<?php
session_start();
$pageName = "Mis habilidades";
require('connection.php');
?>

<!Doctype html>
<html>
<?php include('./res/parts/head.php'); ?>

<body>
    <?php
    include('./res/parts/header.php');
    include('./res/parts/nav.php');
    include('./res/parts/subHeader.php');
    ?>
    <div class="container">
        <?PHP
        $data = query_as_array("select * from habilities;", "habilities.db");
        //print_r($data);
        $c = 0;

        ?>
        <div class="row">
            <div class="col-12 h5">
                A continuaci&oacute;n estan algunas de mis habilidades:
            </div>
        </div>
        <?PHP foreach ($data as $dt) : ?>

            <div class="row bio-card" style="<?PHP echo 'border-left: solid 0.3em ' . $dt['background']; ?>;">
                <div class="col-12 h6" style="<?PHP echo 'border-left: solid 0.3em ' . $dt['background']; ?>;">
                    <?PHP
                    echo sprintf('<img style="width:2em; height:2em;" src="%s"/>', $dt['icon']);
                    echo $dt['topic'];
                    ?>
                </div>
                <?PHP
                $c += 1;
                $habilityId = $dt['id'];
                $query = sprintf("select * from HabilitiesExamples where idHability = %d;", $habilityId);
                $examples = query_as_array($query, "habilities.db");

                ?>
                <div class="col-12 col-md-6">
                    <p><?PHP echo $dt['title']; ?></p>
                    <p><?PHP echo $dt['habilityDescription']; ?></p>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <ul>
                        <?PHP if ($examples) : ?>
                            <div class="h6">Proyectos</div>
                        <?PHP endif; ?>
                        <?PHP foreach ($examples as $example) {
                            printf(
                                '<div><a href="%s">%s</a></div>',
                                $example['habilityViewUrl'],
                                $example['title']
                            );
                        } ?>
                    </ul>
                </div>
            </div>
        <?PHP endforeach; ?>
        <?PHP
        include("./res/parts/footer.php");
        ?>
    </div>
    <?php

    ?>
</body>
<script>
    $(document).ready(() => {

    });
</script>

</html>