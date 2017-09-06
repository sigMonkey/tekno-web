<?php

require '../require/smarty-3.1.30/libs/Smarty.class.php';

$arraypagina =array();
$arraypagina = ["../skin/per tutte le pagine/top_bar.tpl",
                "../skin/contatta.tpl",
               "../skin/per tutte le pagine/footer.tpl"];



$smarty = new Smarty;
$smarty->template_dir='../skin';


$smarty->assign("body",$arraypagina);
$smarty->display('index2.tpl');
?>