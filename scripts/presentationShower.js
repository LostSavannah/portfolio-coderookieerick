$(()=>{
    if(!(sessionStorage.getItem("alredyAccessed") || false)){
        document.location.replace("presentation.php");
    }
});