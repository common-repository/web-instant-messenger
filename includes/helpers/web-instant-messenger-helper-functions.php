<?php

if (!function_exists('clean_domain')) {
  function clean_domain($domain) {
    $clean = preg_replace('#^http(s)?://#', '', $domain);
    $clean = preg_replace('/^www\./', '', $clean);
    $clean_arr = explode("/", $clean);
    $clean = $clean_arr[0];
    $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
      "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
      "â€”", "â€“", ",", "<", ">", "/", "?", " ");
    $clean = str_replace($strip, "", strip_tags($clean));
    $clean = (function_exists('mb_strtolower')) ? mb_strtolower($clean, 'UTF-8') : strtolower(utf8_encode($clean));
    $clean = strtolower($clean);
    return $clean;
  }
}

if (!function_exists('recursive_sanitize_array_object')) {
  function recursive_sanitize_array_object($input) {
    if (is_array($input) || is_object($input)) {
      foreach ($input as $key => &$value) {
        if (is_array($value) || is_object($value)) {
          $value = recursive_sanitize_array_object($value);
        } else {
          $value = sanitize_text_field($value);
        }
      }
    }
    return $input;
  }
}

?>