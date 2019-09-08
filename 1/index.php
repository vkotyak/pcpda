<?php
include(__DIR__.'/model.php');
$model = new Model();
include(__DIR__.'/view.php');
$view = new View();

$content = '';
$content .= $view->makeForm();

if (isset($_POST['town'])) {
    $town = strip_tags($_POST['town']);
    if (mb_strlen($town)<4) {
        $content .='???';
    } else {
    $data = $model->getAtm($town);
    $content .= $view->makeResult($data,$town);
    }
}


include(__DIR__.'/header.html');
echo $content;
include(__DIR__.'/footer.html');