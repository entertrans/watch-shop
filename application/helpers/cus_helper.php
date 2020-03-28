<?php 
function post($var)
{
    $ci = get_instance();
    $input = htmlentities(strip_tags(trim($ci->input->post($var, true))));
    return $input;
}


function get($var)
{
    $ci = get_instance();
    $input = htmlentities(strip_tags(trim($ci->input->get($var, true))));
    return $input;
}