<?php

class Foundation_Drilldown_Nav_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '<ul class="menu vertical nested">';
    }
}