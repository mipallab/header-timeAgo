<?php

/**
 * Elementor Header func
 *  @param title
 *  @param tag
 *  @param color
 *  @param font
 *  @param align
 *  @param bg_color
 */

 function headerTitle(string $title = "Add a title..", string $tag = "h1", string $color = "black", string $font = "arial", string $align = "center", string $bg_color = "Orange") {
    return "<{$tag} style='color:{$color}; font-family:{$font}; text-align:{$align}; background-color:{$bg_color};'>{$title}</{$tag}>";
 }




 /**
  * Time ago function
  *  @param timestamp
  */

  function timeAgo($timestamp) {
     $created_at = strtotime($timestamp);
     $current_time = time();

     $post_time = $current_time - $created_at;

     //minute
     $min = round($post_time / 60);

     //Hour
     $hour = round($min / 60);
   
     //Day
     $day = round($hour / 24);

     // week
     $week = round($day / 7);

     // month
     $month = round($day / 30);

     // year
     $year = round($month / 12);

     
     //time ago condition

      if($post_time < 60) {
         return "Just Now";
      }
      else if($min < 60) {
         
        return ($min == 1) ? "{$min} min ago": "{$min} mins ago";
         
      }
      else if($hour < 24 ) {
         return ($hour == 1) ? "{$hour} hour ago": "{$hour} hours ago";
      }
      else if($day < 7) {

         return ($day == 1) ? "{$day} day ago": "{$day} days ago";
      }
      else if($week < 4 ) {
         return ($week == 1) ? "{$week} week ago": "{$week} weeks ago";
      }
      else if($month < 12 ) {
         return ($month == 1) ? "{$month} month ago": "{$month} month ago";
      }else {
         return "{$year} year ago";
      }
   
      
  }

  