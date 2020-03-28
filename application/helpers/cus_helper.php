<?php defined('BASEPATH') or exit('No direct script access allowed');

function rupiah($angka)
{
    $hasil_rupiah = number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}

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
