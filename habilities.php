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
            //print_r($_SERVER);
            //phpinfo();
            //print(PHP_BINDIR);
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
                <div class="col-12 h4">
                    A continuaci&oacute;n estan algunas de mis habilidades:
                </div>
            </div>
            <?PHP foreach($data as $dt):?>
            
            <div class="row">
                <div class="col-12 h4"
                    style="<?PHP echo 'background:'.$dt['background'].';color:'.$dt['color'].';';?>"
                >
                    <?PHP
                        echo sprintf('<img style="width:2em; height:2em;" url="%s"/>', $dt['icon']); 
                        echo $dt['topic'];
                    ?>
                </div>
                <?PHP
                    $c+=1;
                    $habilityId = $dt['id'];
                    $query = sprintf("select * from HabilitiesExamples where idHability = %d;", $habilityId);
                    $examples = query_as_array($query, "habilities.db");

                    $panel1 ='<div class="col-12 col-md-6">';
                    $panel1.="<p>".$dt['title']."</p>";
                    $panel1.="<p>".$dt['habilityDescription']."</p>";
                    $panel1.='</div>';
                    $panel2 ='<div class="col-12 col-md-6 text-center"><ul>';
                    foreach($examples as $example){
                        $panel2.='<ul><a style="color:'.$dt['color'].';" href="'
                        .$example['habilityViewUrl'].'">'
                        .$example['title']."</a></ul>";   
                    }
                    $panel2.='</ul></div>';
                    if($c % 2 == 1){
                        echo $panel1;
                        echo $panel2;
                    }else{
                        echo $panel2;
                        echo $panel1;
                    }
                ?>
            </div>
            <?PHP endforeach;?>
            <?PHP
                include("./res/parts/footer.php");
            ?>
        </div>
        <?php
            
        ?>
    </body>
    <script>    
        $(document).ready(()=>{

        });
    </script>
</html>