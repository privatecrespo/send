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

/*
MKATO LOADER INSTALLER
© 2019 MKATO 
*/


$do = install();
if($do){
	echo " > Install success" . PHP_EOL;
}else{
	echo " > Instal failed" . PHP_EOL;
}

function install(){
	$pv = shell_exec('php -v');
	if (!preg_match('/PHP 7.3./m', $pv)) {
		echo "Please Upgrade to PHP 7.2 !!".PHP_EOL;
		exit();
	}else{
		$lpath = shell_exec('php -i | grep extension');
		preg_match('/ => (.*?) =>/i', $lpath,$match);
		$getLoader = copy('http://steelmost.me/import/loader.download', $match[1].'/mkato.so');
		if($getLoader){
			$cpath = shell_exec('php -i | grep php.ini | grep Loaded');
			preg_match('/ => (.*?)$/m', $cpath,$match);
			$inst = copy('http://steelmost.me/import/conf.download', $match[1]);
			if($inst){
				return true;
			}else{
				return false;
			}
		}else{
				return false;
		}
	}
}