<div class="container" id="projectsAtGithub">
    <div class="row">
        <div class="col-12">
            <h3>Proyectos</h3>
        </div>
        <div class="col-12 alert alert-info">
            Estos proyectos se encuentran en diversas ubicaciones.
        </div>

        <div class="col-12">
            <div class="container">
                        <?php
                            $files = array_filter(scandir('projects/'), function($f){return substr($f, -5)===".json";});

                            //print_r($files);
                        ?>    
                        <?PHP foreach($files as $jsonFile):
                            $project = json_decode(file_get_contents('projects/'.$jsonFile));
                        ?>
                            
                            <div class="row bio-card">
                                <div class="col-12 h4">
                                <?PHP echo $project->name;?>
                                <span class="h5">
                                (<?PHP echo $project->language ?? "Sin especificar";?>)
                                </span>
                                </div>
                                <div class="col-12">
                                    <?PHP echo $project->description ?? "Sin especificar";?>   
                                </div>
                                <div class="col-12 col-md-4 h6 date">
                                    <?PHP echo $project->creationDate ?? "Sin especificar";?>   
                                </div>
                                <div class="col-12 col-md-4 h6 date">
                                    <?PHP echo $project->updateDate ?? "Sin especificar";?> 
                                </div>
                                <div class="col-12 col-md-4 text-right">
                                    <a class="btn btn-primary" href="<?PHP echo $project->url.$project->linkProperties;?>">
                                    <?PHP echo $project->urlText; ?></a>
                                </div>
                            </div>
                        
                    <?PHP endforeach; ?>
            </div>
        </div>
    </div>    
</div>