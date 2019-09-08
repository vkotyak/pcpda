<?php

class View {

    public function makeForm(){
        $html = '';
        $html .= '<form action="" method="POST">
        <select name="town">
        <option value="-"> </option>
        <option value="Кировоград">Кропивницький</option>
        <option value="Днепропетровск">Дніпро</option>
        </select>
        <input type="submit" value="Знайти">
        </form>';
        return $html;
    }
    public function makeResult($data,$town="") {
        $html ='<h2>'.$town.'</h2>';
        $html .= '<ul>';
        foreach ($data as $atm) {
            $html .='<li>';
            $html .=$atm['name'];
            $html .=' ';
            $html .=$atm['address'];
            $html .='</li>';
        }
        $html .='</ul>';
        return $html;
    }
}