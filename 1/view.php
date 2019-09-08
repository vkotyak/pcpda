<?php

class View {

    public function makeForm(){
        $html = '<div class="row">';
        $html .= '<form action="" method="POST" class="col s12">
	<fieldset class="row">
	<div class="input-field col s12">
            <select name="town">
                <option value="-"> </option>
                <option value="Кировоград">Кропивницький</option>
                <option value="Днепропетровск">Дніпро</option>
            </select>
	<label>Select town</label>
	</div>
	<div class="input-field col s12">
	    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
	        <i class="material-icons right">send</i>
	      </button>
	</div>
	</fieldset>
        </form>
	</div>';
        return $html;
    }
    public function makeResult($data,$town="") {
        $html = '<div class="row">';
        $html .='<h2 class="header col s12">'.$town.'</h2>';
        $html .= '<ul class="col s12 collection">';
        foreach ($data as $atm) {
            $html .='<li class="collection-item">';
            $html .=$atm['name'];
            $html .=' ';
            $html .=$atm['address'];
            $html .='</li>';
        }
        $html .='</ul>';
        $html .='</div>';

        return $html;
    }
}