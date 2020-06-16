/*let getRepositories = (userName, callback = null)=>{
    callback = callback || ((d)=>{});
    $.ajax({
        url:`https://api.github.com/users/${userName}/repos`,
        accepts:{test:"application/vnd.github.v3+json"},
        success:callback
    })
}

let getReadme = (userName, repository, callback = null)=>{
    callback = callback || ((d)=>{});
    $.ajax({
        url:`https://api.github.com/repos/${userName}/${repository}/readme`,
        accepts:{test:"application/vnd.github.v3+json"},
        success:callback
    })
}*/

let getRepositories = (userName, callback = null)=>{
    callback = callback || ((d)=>{});
    $.ajax({
        url:`https://api.github.com/users/codeRookieErick/repos`,
        accepts:{test:"application/vnd.github.v3+json"},
        success:callback
    })
}

getRepositories('codeRookieErick');
