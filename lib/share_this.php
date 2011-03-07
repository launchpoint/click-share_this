<?
function share_this($title, $summary, $url, $display_url=false )
{
  event('share_button', array('title'=>$title, 'summary'=>$summary, 'url'=>$url, 'display_url'=>$display_url));
}