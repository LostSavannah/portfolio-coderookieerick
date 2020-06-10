<!Doctype html>

<html>
<head>
    <script src="./scripts/jquery-3.4.1.js"></script>
    <style>
        body{
            margin:0px;
        }
        #all{
            background:#333;
            height:100%;
            width:100%;
            overflow: none;
        }   
        #all div{
            display: block;
            top: 25%;
            position:absolute;
            font-size:auto;
            height: 10%;
            width: 100%;
            transition: opacity 3s;
            font-family: "impact";
            text-align: center;
            opacity: 0;
            color: white;
        }
    </style>
</head>
<body>
    <div id="all">
        <div id="text">
            Erick Mora
            <h5>software developer</h5>
        </div>
    </div>
    <script>
        $(()=>{
        if(sessionStorage.getItem("alredyAccessed") || false){
            document.location.replace("index.php");
        }else{
            $("#all").height(window.innerHeight);
            $("#text").css("opacity", "1").css("fontSize", "350%");
            setTimeout(() => {
                $("#text").fadeOut(()=>{
                    sessionStorage.setItem("alredyAccessed", "true");
                    document.location.replace("index.php");
                });
            }, 3000);
        }
        });
    </script>
</body>
</html>
