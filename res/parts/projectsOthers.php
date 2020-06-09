<div class="container" id="projectsAtGithub">
    <div class="row">
        <div class="col-12">
            <h3>Otros Proyectos</h3>
        </div>
        <div class="col-12 alert alert-info">
            Estos proyectos se encuentran en diversas ubicaciones.
        </div>

        <div class="col-12">
            <table class="table" id="repositoriesList">
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td><strong>Descripcion</strong></td>
                    <td><strong>Lenguaje</strong></td>
                    <td><strong>Fecha creaci&oacute;n</strong></td>
                    <td><strong>Fecha actualizaci&oacute;n</strong></td>
                    <td><strong></strong></td>
                    <?php
                        $files = array_filter(scandir('projects/'), function($f){return substr($f, -5)===".json";});
                        //print_r($files);
                        foreach($files as $jsonFile){
                            $project = json_decode(file_get_contents('projects/'.$jsonFile));
                            echo "<tr>";
                            echo "<td>$project->name</td>";
                            echo "<td>$project->description</td>";
                            echo "<td>$project->language</td>";
                            echo "<td>$project->creationDate</td>";
                            echo "<td>$project->updateDate</td>";
                            echo "<td><a class=\"btn btn-primary\" href=\"$project->url\" $project->linkProperties>$project->urlText</td>";
                            echo "</tr>";
                        }
                    ?>
                </tr>
            </table>
        </div>
    </div>    
</div>