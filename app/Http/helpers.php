<?php
function delete_form($routeParams, $label = 'Delete'){
    $form = Form::open(array('method'=>'DELETE','route'=>$routeParams));
    $form .= Form::submit($label,array('class'=>'btn btn-danger'));
    $form .= Form::close();
    return $form;
}

?>