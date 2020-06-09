<?PHP

function query_as_array($query, $database = null){
    global $databaseName;
    $database = $database ?? $databaseName;
    try{
        $connection = new SQLite3($database);
        $data = $connection->query($query);
        $result = array();
        while($line = $data->fetchArray()){
            $l = array();
            $n = 0;
            foreach($line as $key => $value){
                $n+=1;
                if($n%2==0){
                    $l[$key] = $value;
                }
            }
            array_push($result, $l);
        }
        return $result;
    }catch(Exception $e){
        print($e);
    }
}
function query_as_json($query, $database = null){
    return json_encode(query_as_array($query, $database));
}

?>