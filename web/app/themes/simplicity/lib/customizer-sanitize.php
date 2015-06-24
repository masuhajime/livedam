<?php //テーマカスタマイザーのサニタイズ関数


function sanitize_text( $str ) {
  return sanitize_text_field( $str );
}

function sanitize_textarea( $text ) {
  return esc_textarea( $text );
}

function sanitize_number( $int ) {
  return absint( $int );
}

function sanitize_check( $value ) {
  return $value;
}

function sanitize_file_url( $url ) {
  $output = '';
  $filetype = wp_check_filetype( $url );
  if ( $filetype["ext"] ) {
    $output = esc_url( $url );
  }
  return $output;
}