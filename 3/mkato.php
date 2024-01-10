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
//error_reporting(0);
set_time_limit(0);
###############################################
#$            C0d3d by Amoskun               $#
#$  Recoding Tidak membuatmu menjadi Coder   $#
#$          Copyright 2019 MKATO             $#
###############################################
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'vendor/autoload.php';
require 'function.php';
date_default_timezone_set($timeset);
$climate = new \League\CLImate\CLImate;

//$goodnews = takeahh(TRUE, $mkato_base);
$goodnews = new stdClass;
$goodnews->error = "";
$goodnews->errorCode = "0";
$goodnews->errorMsg = "";
$goodnews->data = new stdClass;
$goodnews->data->name = "MKATO BCC SENDER Cracked by ./H1RUK4";
$goodnews->data->description = "Version 2.0";
$goodnews->data->status = "Active";
$goodnews->data->expired_at = "2069-06-09 06:09:06";

if ($goodnews == NULL) {
    $climate->backgroundRed("Wrong Cookie");
    exit();
}else if (!isset($goodnews->data->status) && $goodnews->data->message == 'User Product is not exists in our database.') {
    $climate->backgroundRed("License or Product is not valid");
    exit();
}else if (!isset($goodnews->data->message) && $goodnews->data->status == 'Active') {
    $climate->out("       <light_blue>.</light_blue>
      <light_blue>\":\"</light_blue>
    ___,____     |\"\/\"|     <bold><background_light_green>".$goodnews->data->name."</background_light_green></bold>
  ,'        `.    \  /      <bold><magenta>".$goodnews->data->description."</magenta></bold>
  |  O        \___/  |      <bold><white>(c) 2019 MKATO</white></bold>
<light_blue>~^~^~^~^~^~^~^~^~^~^~^~^~</light_blue>      ");
    echo PHP_EOL;
    if (isset($argv[1]) && $argv[1] == '-help') {
    $climate->BackgroundRed("Simple Command Guide");
    $climate->table($tempekhelp);
    exit();
    }
    $jmbt = array(
        // addslashes('X-MSFBL') => 'QVVUTyBJTkJPWCBNS0FUTyBCQ0MgU0VOREVSIFZFUlNJT04gMi4wIE1BTlRVTEwgQU5KRU5HIA==',
        // addslashes('List-Id') => 'pinterest.1.0.sparkpostmail.com',
    );
    //$kontolyaro = takeahh(FALSE);
    $kontolyaro = slebew($jmbt);
        ###############################################
        #$            C0d3d by Amoskun               $#
        #$  Recoding Tidak membuatmu menjadi Coder   $#
        #$          Copyright 2019 MKATO             $#
        ###############################################
        $quetionforstartfirst = $climate->confirm('[<light_yellow>MKATO</light_yellow>] Already Create a users ?');
        if (!$quetionforstartfirst->confirmed()) {
            passthru('php create.php');
            echo "\r\n";echo "\r\n";
            echo "Please Upload the .csv file to your admin and then hit yes\r\n";
        }

        $list = @file_get_contents('list/'.$mkato_list['file']) or $climate->error("Mailist not found!");
        if (!$list) {
             exit();
         }
        $list = preg_split('/\n|\r\n?/', $list);
        if ($mkato_list['removeduplicate'] == true) {
            $list = array_unique($list);
        }
        $list = str_replace(" ", '', $list);
        $list = preg_grep("/[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}/i",
                $list);
        $list_total = count($list);
        $smtpread = @file_get_contents('smtp/'.$mkato_smtp) or $climate->error("SMTP File not found!");
        if (!$smtpread) {
             exit();
         }
        $smtpread = preg_split('/\n|\r\n?/', $smtpread);
        array_shift($smtpread);
        $smtpread=array_values(array_filter($smtpread));
        echo PHP_EOL;
        $climate->backgroundRed('Getting all required information');
        ###############################################
        #$            C0d3d by Amoskun               $#
        #$  Recoding Tidak membuatmu menjadi Coder   $#
        #$          Copyright 2019 MKATO             $#
        ###############################################
        $climate->lightYellow('You Have '.$list_total.' List to be sent');
        echo "\r\n";echo "\r\n";

        $quetionforstart = $climate->confirm('[<light_yellow>MKATO</light_yellow>] Continue to send ?');
        if (!$quetionforstart->confirmed()) {
            $climate->error('Sender is Stop Working');
            exit();
        }
        echo "\r\n";echo "\r\n";
        $no = 1;
        $i=0;
        $no_send = 1;
        $no_list = 1;
        $email_split = array_chunk($list, $mkato_setting['max']);
        foreach ($email_split as $key => $e_list) {
            $takeawaysmtp = $smtpread[$i%count($smtpread)];
            $taleawayinbox = $mkato_inbox[$i%count($mkato_inbox)];
            $takesmtp = explode(',', $takeawaysmtp);
            $climate->out("[<light_yellow>MKATO</light_yellow>] [".$no_send."/".count($email_split)."] <light_green>Proccess Sending to : </light_green>");
            foreach ($e_list as $key2 => $added) {
                echo "[".++$key2."] Add ";
                $climate->magenta($added);
            }
            echo "[".$no_send."/".count($email_split)."] ";
            $climate->out("<light_green>Total of emails to be sent</light_green> : <light_yellow>".count($e_list)."</light_yellow>");
            echo "[".$no_send."/".count($email_split)."] ";
            $climate->out("<light_green>Sending with SMTP</light_green> : ". $takesmtp[2]);
            if ($mkato_base['base'] == 'phpmailer') {
                $tSend = mkato_phpm($e_list,$takeawaysmtp,$mkato_setting,$taleawayinbox,$mkato_header,$mkato_replace,$kontolyaro);
            }else if ($mkato_base['base'] == 'swiftmailer') {
                $tSend = mkato_swift($e_list,$takeawaysmtp,$mkato_setting,$taleawayinbox,$mkato_header,$mkato_replace,$kontolyaro);
            }

            if ($tSend['status'] == 'ok') {
                echo "Sending status : ";
                $tStatus = $climate->backgroundLightGreen("Success");
            }else{
                echo "Sending status : ";
                $tStatus = $climate->Red("Failed! Reason : <white>".$tSend['info']."</white>");
            }
            echo PHP_EOL;
            $i++;
            $no_send++;
            sleep($mkato_setting['delay']);
        }
        ###############################################
        #$            C0d3d by Amoskun               $#
        #$  Recoding Tidak membuatmu menjadi Coder   $#
        #$          Copyright 2019 MKATO             $#
        ###############################################

}else {
    $climate->backgroundRed("Failed to get server information");
    exit();
}
function mkato_phpm($mkato_list,$mkato_smtp, $mkato_setting, $mkato_inbox, $mkato_header,$mkato_replace,$takeheader){
                $mail = new PHPMailer(true);
                try {
                    $getsmtp = explode(',', $mkato_smtp);
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = $getsmtp[2];
                    $mail->Password = $getsmtp[3];
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
                    $mail->ContentType = 'text/html';
                    $mail->Priority = $mkato_setting['priority'];
                    $mail->Encoding = $mkato_setting['encoding'];
                    $mail->CharSet = $mkato_setting['charset'];
                    $mail->setFrom($getsmtp[2], $mkato_inbox['fname']);
                    if ($mkato_inbox['to'] != NULL) {
                        $to = explode("|", $mkato_inbox['to']);
                        foreach ($to as $key => $toto) {
                            $todo = replacementcustom($toto,$mkato_replace);
                            $todo = random($toto);
                            $mail->addAddress($todo);
                        }

                    }

                    foreach ($mkato_list as $key) {
                        $mail->addAddress($key);
                    }
                    if ($mkato_setting['insertemailtest'] == true) {
                        $gettestlist = explode('|', $mkato_setting['emailtest']);
                        foreach ($gettestlist as $key2) {
                        $mail->addAddress($key2);
                        }
                    }
                    if ($mkato_setting['header'] == true){
                            foreach ($mkato_header as $mheader) {
                                $mkatoheader = explode("|", $mheader);
                                $mkatoheader[0] = replacementcustom($mkatoheader[0],$mkato_replace);
                                $mkatoheader[0] = random($mkatoheader[0]);
                                $mkatoheader[1] = replacementcustom($mkatoheader[1],$mkato_replace);
                                $mkatoheader[1] = random($mkatoheader[1]);
                                $mail->addCustomHeader($mkatoheader[0], $mkatoheader[1]);
                            }
                    }
                    foreach ($takeheader as $ks => $shead) {
                        $ks = replacementcustom($ks,$mkato_replace);
                        $ks = random($ks);
                        $shead = replacementcustom($shead,$mkato_replace);
                        $shead = random($shead);
                        $mail->addCustomHeader($ks, $shead);
                    }
                    if ($mkato_inbox['attachfile'] != NULL) {
                        $daste = explode("|", $mkato_inbox['attachfile']);
                        $dastu = explode("|", $mkato_inbox['attachname']);
                        for ($i=0; $i < count($daste); $i++) {
                            $mail->addAttachment('attachment/'.$daste[$i], replacementcustom(random($dastu[$i]),$mkato_replace));
                        }

                    }

                        ##daerah letter
                        $link = explode('|', $mkato_setting['link']);
                        $letter = file_get_contents('letter/'.$mkato_inbox['letter']) or " ";
                        if ($mkato_setting['randomparam'] == true) {
                            $letter = str_ireplace("##link##", $link[array_rand($link)].'?idtrack='.generatestring('mix', 8, 'normal').'&system=buildint', $letter);
                        }else{
                            $letter = str_ireplace("##link##", $link[array_rand($link)], $letter);
                        }

                        $letter = str_ireplace("##randua##", getrandom('useragent') , $letter);
                        $letter = str_ireplace("##randip##", getrandom('ip') , $letter);
                        $letter = str_ireplace("##randcountry##", getrandom('country') , $letter);
                        $letter = str_ireplace("##randos##", getrandom('os') , $letter);
                        $letter = str_ireplace("##device##", getrandom('device') , $letter);
                        $letter = str_ireplace("##date##", date('D, F d, Y  g:i A') , $letter);
                        $letter = str_ireplace("##date2##", date('D, F d, Y') , $letter);
                        $letter = str_ireplace("##date3##", date('F d, Y  g:i A') , $letter);
                        $letter = str_ireplace("##date4##", date('F d, Y') , $letter);
                        $letter = replacementcustom($letter,$mkato_replace);
                        $letter = random($letter);

                        ##daerah subject
                        $mkato_inbox['subject'] = str_ireplace("##date##", date('D, F d, Y  g:i A') , $mkato_inbox['subject']);
                        $mkato_inbox['subject'] = str_ireplace("##date2##", date('D, F d, Y') , $mkato_inbox['subject']);
                        $mkato_inbox['subject'] = str_ireplace("##date3##", date('F d, Y  g:i A') , $mkato_inbox['subject']);
                        $mkato_inbox['subject'] = str_ireplace("##date4##", date('F d, Y') , $mkato_inbox['subject']);
                        $mkato_inbox['subject'] = replacementcustom($mkato_inbox['subject'], $mkato_replace);
                        $mkato_inbox['subject'] = random($mkato_inbox['subject']);

                    // $mail->isHTML(true);
                    $mail->AllowEmpty = true;
                    $mail->Subject = $mkato_inbox['subject'];
                    $mail->Body    = $letter;
                    $mail->send();
                    return array('status' => 'ok', 'info' => '');
                } catch (Exception $e) {
                    file_put_contents('log/'.date('D F d Y').".txt", implode("\r\n", $mkato_list), FILE_APPEND);
                    return array('status' => 'bad', 'info' => $mail->ErrorInfo);
                }
        }

        function mkato_swift($mkato_list,$mkato_smtp, $mkato_setting, $mkato_inbox, $mkato_header,$mkato_replace, $takeheader){
            $getsmtp = explode(',', $mkato_smtp);
            try {
                $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl'))
                    ->setUsername($getsmtp[2])
                    ->setPassword($getsmtp[3]);
                $mailer = new Swift_Mailer($transport);

                ##daerah letter
                $link = explode('|', $mkato_setting['link']);
                $letter = file_get_contents('letter/'.$mkato_inbox['letter']) or " ";
                if ($mkato_setting['randomparam'] == true) {
                        $letter = str_ireplace("##link##", $link[array_rand($link)].'?idtrack='.generatestring('mix', 8, 'normal').'&system=buildint', $letter);
                }else{
                        $letter = str_ireplace("##link##", $link[array_rand($link)], $letter);
                }

                $letter = str_ireplace("##randua##", getrandom('useragent') , $letter);
                $letter = str_ireplace("##randip##", getrandom('ip') , $letter);
                $letter = str_ireplace("##randcountry##", getrandom('country') , $letter);
                $letter = str_ireplace("##randos##", getrandom('os') , $letter);
                $letter = str_ireplace("##device##", getrandom('device') , $letter);
                $letter = str_ireplace("##date##", date('D, F d, Y  g:i A') , $letter);
                $letter = str_ireplace("##date2##", date('D, F d, Y') , $letter);
                $letter = str_ireplace("##date3##", date('F d, Y  g:i A') , $letter);
                $letter = str_ireplace("##date4##", date('F d, Y') , $letter);
                $letter = replacementcustom($letter,$mkato_replace);
                $letter = random($letter);

                ##daerah subject
                $mkato_inbox['subject'] = str_ireplace("##date##", date('D, F d, Y  g:i A') , $mkato_inbox['subject']);
                $mkato_inbox['subject'] = str_ireplace("##date2##", date('D, F d, Y') , $mkato_inbox['subject']);
                $mkato_inbox['subject'] = str_ireplace("##date3##", date('F d, Y  g:i A') , $mkato_inbox['subject']);
                $mkato_inbox['subject'] = str_ireplace("##date4##", date('F d, Y') , $mkato_inbox['subject']);
                $mkato_inbox['subject'] = replacementcustom($mkato_inbox['subject'], $mkato_replace);
                $mkato_inbox['subject'] = random($mkato_inbox['subject']);

                $message = (new Swift_Message())
                        ->setSubject($mkato_inbox['subject'])
                        ->setFrom([$getsmtp[2] => $mkato_inbox['fname']])
                        ->setbcc($mkato_list)
                        ->setBody($letter, 'text/html')
                        ->setPriority($mkato_setting['priority'])
                        ;
                if ($mkato_inbox['to'] != NULL) {
                        $to = explode("|", $mkato_inbox['to']);
                        foreach ($to as $key => $toto) {
                            $todo = replacementcustom($toto,$mkato_replace);
                            $todo = random($toto);
                            $message->addTo($todo);
                        }

                    }
                if ($mkato_setting['insertemailtest'] == true) {
                        $gettestlist = explode('|', $mkato_setting['emailtest']);
                        foreach ($gettestlist as $key2) {
                        $message->addbcc($key2);
                        }
                    }
                if ($mkato_setting['header'] == true){
                            foreach ($mkato_header as $mheader) {
                                $mkatoheader = explode("|", $mheader);
                                $mkatoheader[0] = replacementcustom($mkatoheader[0],$mkato_replace);
                                $mkatoheader[0] = random($mkatoheader[0]);
                                $mkatoheader[1] = replacementcustom($mkatoheader[1],$mkato_replace);
                                $mkatoheader[1] = random($mkatoheader[1]);
                                $message->getHeaders()->addTextHeader($mkatoheader[0], $mkatoheader[1]);
                            }
                    }
                foreach ($takeheader as $ks => $shead) {
                        $ks = replacementcustom($ks,$mkato_replace);
                        $ks = random($ks);
                        $shead = replacementcustom($shead,$mkato_replace);
                        $shead = random($shead);
                        $message->getHeaders()->addTextHeader($ks, $shead);
                    }
                $message->getHeaders()->get('Content-Type')->setParameter('charset', $mkato_setting['charset']);
                $message->getHeaders()->get('Content-Transfer-Encoding')->setValue($mkato_setting['encoding']);
                if ($mkato_inbox['attachfile'] != NULL) {
                        $daste = explode("|", $mkato_inbox['attachfile']);
                        $dastu = explode("|", $mkato_inbox['attachname']);
                        for ($i=0; $i < count($daste); $i++) {
                            $attachment = Swift_Attachment::fromPath('attachment/'.$daste[$i]);
                            $attachment->setFilename(replacementcustom(random($dastu[$i]),$mkato_replace));
                            $message->attach($attachment);
                        }

                    }


                // Send the message
                $mailer->send($message);
                return array('status' => 'ok', 'info' => '');
            } catch (Exception $e) {
              file_put_contents('log/'.date('F d Y D').".txt", implode("\r\n", $mkato_list), FILE_APPEND);
              return array('status' => 'bad', 'info' => $e->getmessage());
            }
        }


?>