let updateClicksCount = (newsID)=>{
    getRequest('api/updateClicksCount.php?newsId=' + newsID);
};


let setCookie = (name, value, seconds=3600)=>{
    let expires = (new Date(Date.now() + (seconds * 1000))).toUTCString();
    let cookieString = name + "=" + value + "; expires=" + expires + ";path=/";
    //alert(cookieString);
    document.cookie = cookieString;
}



$(document).ready(()=>{
    
});