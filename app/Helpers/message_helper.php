<?php

function main_message($type='', $desc='', $title=''){
    session();
    $message = array(
        'title' => $title,
        'description' => $desc,
        'type' => $type,
    );

    session()->set('message', $message);
}

function show_message(){
    $html = '';
    $message = session()->get('message');
    if ($message == null) {
        return '';
    }
    $html .= 'toastr.' . $message['type'] . '("' . $message['description'] . '", "' . $message['title'] . '");';
    session()->remove('message');
    return $html;
}


