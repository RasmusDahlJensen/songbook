<?php 
class Tools{
    static public function jsonParser($json) {
        header('Content-Type: application/json; charset=utf-8');
        return json_encode($json);
    }

}

?>