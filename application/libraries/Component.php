<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component {

/*
* After creating your textlocal account. You can user this codeigniter library to send messages.
* This is the file where you have to set your hash code and user name
* Parameters are the message, sender number what you register with textlocal & number which is a sms receivers number.
*/

  function sendsms($number, $message, $sender){

    $data=array("username"=>'your@email.com',"hash"=>'Your hash code here','apikey'=>false);
    $ci = & get_instance();
    $ci->load->library('textlocal',$data);

    $numbers = array($number);

    $response = $ci->textlocal->sendSms($numbers, $message, $sender);
  return $response;
  }
}