<?php 

function sendMail($data,  $extra = NULL){
	$data['email_obj']->from($data['from']['email'], $data['from']['name']);
	$data['email_obj']->subject($data['subject']);
	$data['email_obj']->message($data['message']);
         
	if(isset($data['reply_to']['email']))	$data['email_obj']->reply_to($data['reply_to']['email'], $data['reply_to']['name']);
	if(isset($data['to']))	$data['email_obj']->to($data['to']);
	if(isset($data['cc']))	$data['email_obj']->cc($data['cc']);
	if(isset($data['attachment_path'])) $data['email_obj']->attach($data['attachment_path']);

	$email_send_status = $data['email_obj']->send();
	//log_message( 'error', "EMAIL ISSUE" . $data['email_obj']->print_debugger());

	if(isset($data['attachment_path']))
		unlink($data['attachment_path']);

	return $email_send_status ? EMAIL_SEND_SUCCESS : EMAIL_SEND_ERROR ;
}

function sendText($contact, $message)
{
	
	$apiKey = urlencode('');
	
	// Message details
	$numbers = array($numbers);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($message);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
				
	return true;
}
function sendSMS($contacts, $message)
{
	// Message details
	$numbers = implode(',', $contacts);
	$encodedMessage = urlencode($message);
	$api = "http://sms.happysms.in/sendhttp.php?authkey=290495AMQ8wQmagv25d5ceae0&mobiles=". $numbers ."&message=" . $encodedMessage . "&sender=ARICIN&route=4&country=91";
	
	$response = file_get_contents($api);
				
	return $response;
}

function getAge($date){
	$from = new DateTime($date);
	$to   = new DateTime('today');
	return $from->diff($to)->y;
}

function resizeImg($config){
	if(!isset($config['width']))
		$config['width']  = 60;
	if(!isset($config['height']))
		$config['height'] = 60;
		
	$config['create_thumb'] = (isset($config['create_thumb'])) ? (isset($config['create_thumb'])) : FALSE;

	if(isset($config['new_image_path']))
		$expenses_large_path = $config['new_image_path'];
	else
		$expenses_large_path = 'uploads/temp';

	if(!is_dir($expenses_large_path)){
		mkdir($expenses_large_path, 0777, TRUE);
	}
	
	if(!isset($config['new_image'])){
		$folder_path_array = explode('/', $config['source_image']);
		$config['new_image'] = $expenses_large_path . '/' . end($folder_path_array);
	}

	$this->load->library('image_lib');
	$config['image_library'] = 'gd2';
	$this->image_lib->clear();
	$this->image_lib->initialize($config);
	if($this->image_lib->resize()){
		return $resize_img_path = $config['new_image'];
	}else{
		return false;
	}
}