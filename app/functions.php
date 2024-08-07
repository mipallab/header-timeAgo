<?php

/**
 * Elementor Header func
 */

 function headerTitle(string $title = "Add a title..", string $tag = "h1", string $color = "black", string $font = "arial", string $align = "center", string $bg_color = "Orange") {
    return "<{$tag} style='color:{$color}; font-family:{$font}; text-align:{$align}; background-color:{$bg_color};'>{$title}</{$tag}>";
 }