<?php
class Model {

    public function getAtm($town) {
        $get = "https://api.privatbank.ua/p24api/pboffice?json&city=".$town;
        $content = file_get_contents($get);
        $data = json_decode($content, true);
        return $data;
    }
    
}