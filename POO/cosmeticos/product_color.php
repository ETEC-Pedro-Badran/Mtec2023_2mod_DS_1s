<?php
class ProductColor {
    public $hex_value;
    public $colour_name;
    function __fromJson($json_data){
        $this->colour_name = $json_data["colour_name"];
        $this->hex_value = $json_data["hex_value"];
    }
}

?>