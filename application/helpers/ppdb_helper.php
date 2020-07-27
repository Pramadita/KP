<?php

function is_oc()
{
    $ci = get_instance();

    $status = $ci->session->oc('status');
    $menu = $ci->uri->segment(2);
}
