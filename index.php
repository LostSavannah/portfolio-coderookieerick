<?php 
    session_start(); 
    $pageName = "Inicio";
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
        <div class="container bio">
            <div class="row">
                <!--div class="col-12">
                    <img src="./res/img/foto.png" alt=""/>
                </div-->
                <div class="col-12">
                    <div class="bio-data">
                        <div class="h4">
                        <a href="javascript:showPhone();" id="phone">
                            Mostrar Tel&eacute;fono
                         </a></div>
                        <a href="javascript:showMail();" id="email">
                            Mostrar Email
                         </a>
                    </div>
                    
                </div>
                <div class="col-12">
                    <h5>Saludos</h5>
                    <div class="bio-p">
                        Soy un desarrollador de software muy entusiasta y capaz, con dominio de areas muy variadas.
                    </div>
                    <div class="bio-p">
                        Si gusta puede explorar mis <a href="./projects.php">proyectos recientes</a>.
                    </div>
                    <div class="bio-p">
                        Ademas puede consultar mis habilidades <a href="./habilities.php">aqui</a>.
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
        <?php
            include('./res/parts/footer.php');
        ?>
    </body>
    <script>    
        let showMail = () =>{
            let email = 'erickfernandomoraramirez@gmail.com';
            $("#email").attr('href', `mailto:${email}`).text(email);
        };

        let showPhone = () =>{
            let phoneNumber = '809-409-4484';
            $("#phone").text(phoneNumber);
        };

        $(document).ready(()=>{
        });
    </script>
</html>
