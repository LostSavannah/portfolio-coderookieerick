<?PHP
	ini_set('display_errors', 1);
	error_reporting(E_WARNING|E_ERROR|E_NOTICE);

    ///Thanks to https://stackoverflow.com/users/711784/dbau
    function request($url, $method, $params=null, $header=null){
        $params = $params ?? array();
        $protocol = explode(":", $url)[0];
	print($protocol);
        $header = $header ?? array();
        $headerArr = array();
        foreach($header as $key => $value){
            array_push($headerArr, "$key: $value");
        }
        $headerStr = join("\r\n", $headerArr);
        $options = array(
            $protocol => array(
                "header" => $headerStr,
                "method" => $method
            )
        );
        if($method == "GET" && count($params) > 0){
            $counter = 0;
            $queryString = "";
            foreach($params as $key => $value){
                $queryString.= ($counter > 0) ? "&" : "?";
                $queryString.="$key=$value";
                $counter += 1;
            }
            $url.=$queryString;
        }elseif($method == "POST"){
            $options[$protocol]["content"] = http_build_query($params);
        }
        $context = stream_context_create($options);
        $data = file_get_contents($url, false, $context);
        return $data;
    }
?>
