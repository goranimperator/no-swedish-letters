<?php
/*
Plugin Name: No more Å-Ä-Ö
Plugin URI: http://goranimperator.com/
Description: Fixes all å-ä-ö in upload.
Version: 666
Author: Goran Imperator
*/

add_filter('sanitize_file_name', 'imperator_upload_chars_fix', 10);
function imperator_upload_chars_fix($filename) {
  return strtolower( remove_accents( $filename ) );
}
