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
                    ?>    
                        <?PHP foreach($files as $jsonFile):
                            $project = json_decode(file_get_contents('projects/'.$jsonFile));
                        ?>
                            <tr>
                            <td><?PHP echo $project->name;?></td>
                            <td><?PHP echo $project->description;?></td>
                            <td><?PHP echo $project->language;?></td>
                            <td><?PHP echo $project->creationDate;?></td>
                            <td><?PHP echo $project->updateDate;?></td>
                            <td><a class="btn btn-primary" href="<?echo $project->url.$project->linkProperties;?>">
                                <?PHP echo $project->urlText; ?>
                            </td>
                            </tr>
                        
                    <?PHP endforeach; ?>
                </tr>
            </table>
        </div>
    </div>    
</div>