<?php 
    session_start(); 
    $pageName = "Mis habilidades";
    require('connection.php');
?>

<!Doctype html>
<html>
    <?php include('./res/parts/head.php');?>
    <body>
        <?php
            include('./res/parts/header.php'); 
            include('./res/parts/nav.php'); 
            include('./res/parts/subHeader.php');
        ?>
        <?PHP if(isset($_GET["id"])):?>
        <?PHP 
            $query = sprintf(
                "select * from HabilitiesExamples where id = %s;",
                $_GET["id"]
            );
            
            $projectData = query_as_array($query, "habilities.db")[0];
            //print_r($projectData);
        ?>
        <div class="container">
            <div class="row bio-card">
                
                <div class="col-6 offset-3 h6">
                    <div class="text-center h5">
                        <?PHP echo $projectData["title"];?>
                    </div>
                    <?PHP echo $projectData["habilityExampleDescription"];?>
                    <a  
                    href="<?PHP echo $projectData["habilityExampleUrl"];?>">
                        Ver
                    </a>
                </div>
            </div>
        </div>

        <?PHP endif;?>

        <?PHP include("./res/parts/footer.php");?>
    </body>
</html>