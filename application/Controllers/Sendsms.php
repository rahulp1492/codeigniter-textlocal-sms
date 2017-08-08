<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendsms extends CI_Controller {
 
    function index(){
	$this->load->library('component');
	$this->component->sendsms($receiverPhoneNumber, $message, $senderName);
    }
}

