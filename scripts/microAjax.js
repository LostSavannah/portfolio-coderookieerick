///Moradev microajax

let MicroajaxDebug = true;

function getXMLHttpRequestInstance(){
    if (window.XMLHttpRequest) {
        // code for modern browsers
        return new XMLHttpRequest();
     } else {
        // code for old IE browsers
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}

function getRequest(url, callback = null, interval = undefined){
    callback = callback || ((e) => {});
    let request = () =>{
        let xmlHttpRequestInstance = getXMLHttpRequestInstance();
        xmlHttpRequestInstance.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                callback(this.responseText);
            }
        };
        xmlHttpRequestInstance.open("GET", url, true);
        xmlHttpRequestInstance.send();
    };
    if(interval == undefined)
        request();
    else return setInterval(request, interval);
}

function getRequestJson(url, callback = null, interval = undefined){
    callback = callback || ((e) => {});
    getRequest(url, (e) => {
        try {
            let jsonResult = JSON.parse(e);
            callback(jsonResult);
        } catch (error) {
            if(MicroajaxDebug) callback(error);            
        }
    }, interval);
}


