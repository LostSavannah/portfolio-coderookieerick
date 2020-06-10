<?php 
    session_start(); 
    $pageName = "Proyectos recientes";
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
        <?php include('./res/parts/projectsOthers.php');?>
        <?php include('./res/parts/projectsAtGithub.php');?>
        <?php
            include('./res/parts/footer.php');
        ?>
    </body>
    <script>    
        $(document).ready(()=>{

        });
    </script>
</html>