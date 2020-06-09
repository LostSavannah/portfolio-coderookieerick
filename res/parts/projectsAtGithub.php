<div class="container" id="projectsAtGithub">
    <div class="row">
        <div class="col-12">
            <h3>Github</h3>
        </div>
        <div class="col-12 alert alert-info">
            Estos son mis repositorios en <strong>Github</strong>.
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
                </tr>
            </table>
        </div>
    </div>    
    <script>
        getRepositories('codeRookieErick', (d)=>{
            console.log(d);
            for(i in d){
                let name = d[i]['name'];
                let description = d[i]['description'];
                let url = d[i]['html_url'];
                let languaje = d[i]['language'];
                let created = new Date(d[i]['created_at']);
                let updated = new Date(d[i]['updated_at']);
                $("#repositoriesList").append(
                    "<tr>"+
                    `<td>${name}</td>`+
                    `<td>${description || "Sin especificar"}</td>`+
                    `<td>${languaje || "Sin especificar"}</td>`+
                    `<td>${created}</td>`+
                    `<td>${updated}</td>`+
                    `<td><a class="btn btn-primary" href="${url}" target="_blank">Ver en Github</a></td>`+
                    "</tr>"
                );
            }
        });

    </script>
</div>