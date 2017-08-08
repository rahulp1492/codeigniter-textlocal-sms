<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setupfile {

  function send($number, $message)
  {
    $ci = & get_instance();
    $data=array("username"=>'your@email.com',"hash"=>'Your hash code here','apikey'=>false);
    $sender  = "SenderName";
    $numbers = array($number);
    $ci->load->library('textlocal',$data);

    $response = $ci->textlocal->sendSms($numbers, $message, $sender);
  return $response;
  }
}
