<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function print_data( $data = array() ){
	echo "<pre>",htmlspecialchars(print_r($data,true)),"</pre>";exit;
}
function test(){
    return 1;
}

function send_email($to,$msg,$sub){
    
     $from_email = "info@starsboard.in"; 
     $config = Array(
     'mailtype'  => 'html', 
     'charset'   => 'iso-8859-1'
     );
         $this->load->library('email', $config);
         $this->email->from($from_email, 'Starsboard'); 
         $this->email->to($to);
         $this->email->subject($sub);
         $this->email->message($msg); 
         if($this->email->send()){
            return '1';
             }else{
               return '0';
            }
}
























   
    function number_format_custom($number, $precision = 1, $decimal='.', $seperator=','){
		//print_data($number);
		setlocale(LC_MONETARY, 'en_IN');
		$number = money_format('%!i', $number);
        $x=explode('.',$number);
		return $x[0];
	}


   	/// user role helper

  	function RoleAccessPanel($pageName){
	
		//if($pageName='Home-Configuration'){ echo "testtttttttttttttttttt"; die; }
		$CI =& get_instance();
		$user_role_id=$CI->session->userdata('admin_id');
		  
		if($user_role_id=='1'){
			return true;
		}else{
			$dataList=$CI->CommonMdl->getResult('tbl_admin_user_roles','*',array('user_id'=>$user_role_id),$order_by='',$limit='');
			$accessPagesDb=array();
			foreach($dataList as $val){
				$accessPagesDb[]=trim($val->role_access);
			}
			
			if(in_array($pageName, $accessPagesDb)){
				return true;
			}else{
				return false;
			}
		}
  }

 function user_unread_notification_count($user_id){

$ci = & get_instance();

$ci->db->select('*')->from('tbl_user_notification');

$ci->db->where('notification_read',0);

if($user_id){

	$ci->db->where('user_id',$user_id);
}
$qry = $ci->db->get();

return  $qry->num_rows();

  }

	function notificationCount($user_id){
		$ci = & get_instance();
		$query = $ci->db->query("SELECT COUNT(tbl_notification_recipient.notification_id) as notis FROM tbl_notification_recipient
		WHERE  tbl_notification_recipient.user_id='".$user_id."' AND tbl_notification_recipient.read_status=0
		");
		$result = $query->result_array();
		//print_r($result);exit;
		return $result[0]['notis'];
	}









  

   function encrypt($string) {
	  return p_encrypt_decrypt('encrypt', $string);
	}
 function decrypt($string) {
	  return p_encrypt_decrypt('decrypt', $string);
	}
   function p_encrypt_decrypt($action, $string) {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'sessionID' ;//'This is my secret key';
        $secret_iv = 'sessionUID; ';//'This is my secret iv';
        // hash
        $key = hash('sha256', $secret_key);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if( $action == 'encrypt' ) {
          $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
          $output = base64_encode($output);
        }
        else if( $action == 'decrypt' ){
          $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
        return $output;
      }


function getDaysBetween2Dates($startDate,$endDate)
{
	$endDate = date('Y-m-d', strtotime($endDate . ' +1 day'));
	$date1 = new \DateTime($endDate);
	$date2 = new \DateTime($startDate);
    $interval = $date2->diff($date1)->format("%r%a");
    return $interval;
}
function isUserLoggedIn(){
	$current_date = date('Y-m-d H:i:s');
	$ci = & get_instance();
	$data['user'] = $ci->session->userdata();
  	$cond = array('user_id' => $data['user']['user_id']);
	$userdata = $ci->CommonMdl->getRow('tbl_users','*',$cond);
	$currentTime = strtotime($current_date);
	$loginTime = strtotime($userdata->login_time);
	$diffrenceInMinutes = ($currentTime - $loginTime) / 60;
	if($diffrenceInMinutes>5){
		$ci->CommonMdl->updateData(['login_time' => date('Y-m-d H:i:s'), 'is_login' => 'yes'],['user_id' => $userdata->user_id], 'tbl_users' );
	}
	
}
