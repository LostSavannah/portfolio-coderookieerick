<div class="container" id="projectsAtGithub">
    <div class="row">
        <div class="col-12">
            <div class="h3">Github</div>
        </div>
        <div class="col-12 alert alert-info">
            Estos son mis repositorios en <strong>Github</strong>.
        </div>

        <div class="col-12">
            <div class="container" id="repositoriesList">
                
            </div>
        </div>
    </div>    
    <script>
        
        let getDate = (str)=>{
            result = ""
            try{
                let date = new Date(str);
                console.log(date);
                let parts = [
                    "0" + date.getDate(),
                    "0" + (date.getMonth()+1),
                    date.getFullYear().toString()
                ];
                parts[0] = parts[0].substring(parts[0].length-2);
                parts[1] = parts[1].substring(parts[1].length-2);
                result = parts[0] + "-" + parts[1] + "-" + parts[2]; 
            }catch(e){

            }
            return result;
        }

        getRepositories('codeRookieErick', (d)=>{
            console.log(d);
            for(i in d){
                let name = d[i]['name'];
                let description = d[i]['description'];
                let url = d[i]['html_url'];
                let language = d[i]['language'];
                let created = getDate(d[i]['created_at']);
                let updated = getDate(d[i]['updated_at']);
                $("#repositoriesList").append(
                    '<div class="row bio-card">'+
                    `<div class="col-12 h4">${name} <span class="h5">(${language || "Sin especificar"})</span></div>`+
                    
                    `<div class="col-12">${description || "Sin especificar"}</div>`+
                    `<div class="col-12 col-md-4 h6 date">creado: ${created}</div>`+
                    `<div class="col-12 col-md-4 h6 date">actualizado: ${updated}</div>`+
                    `<div class="col-12 col-md-4 text-right"><a class="btn btn-primary" href="${url}" target="_blank">Ver en Github</a></div>`+
                    "</div>"
                );
            }
        });

    </script>
</div>