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
require 'config.php';
###############################################
#$            C0d3d by Amoskun               $#
#$  Recoding Tidak membuatmu menjadi Coder   $#
#$          Copyright 2019 MKATO             $#
###############################################

function color($color,$text,$mode){
    switch ($color) {
        case 'green':
            $warna = "\033[1;32m"; break;
        case 'greenbg':
            $warna = "\033[42m"; break;
        case 'blue':
            $warna = "\033[1;34m"; break;
        case 'purple':
            $warna = "\033[1;35m"; break;
        case 'cyan':
            $warna = "\033[1;36m"; break;
        case 'red':
            $warna = "\033[1;31m"; break;
        case 'redbg':
            $warna = "\033[41m"; break;
        case 'yellow':
            $warna = "\033[1;33m"; break;
        case 'yellowbg':
            $warna = "\e[43m"; break;
        default:
            $warna = "\033[0m";break;
    }
    if ($mode == true) {
        return $warna.$text."\033[0m";
    }else{
        return $text;
    }

}
###############################################
#$            C0d3d by Amoskun               $#
#$  Recoding Tidak membuatmu menjadi Coder   $#
#$          Copyright 2019 MKATO             $#
###############################################
function saverr($data, $name) {
    if (!is_dir('error_log')) {
    mkdir('error_log');
    }
    $file = @fopen('error_log/'.$name, "a+");
    @fwrite($file, $data . "\r\n");
    @fclose($file);
}
function slebew($d) {
    if (is_array($d)) {
        return (object) array_map(__FUNCTION__, $d);
    }
    else {
        return $d;
    }
}
function takeahh($ly,$lc = NULL){
    $ch = curl_init();
    if ($ly == FALSE) {
        curl_setopt($ch, CURLOPT_URL, 'http://server-mkato-aligamyway681833.codeanyapp.com/a.php');
    }else{
        curl_setopt($ch, CURLOPT_URL, 'http://steelmost.me/index.php/api/product/'.$lc['user']['license']);
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    $headers[] = 'Accept-Encoding: gzip, deflate';
    $headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
    if ($ly != FALSE) {
        $headers[] = 'Cookie: '.$lc['user']['cookie'];
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result);


}

###############################################
#$            C0d3d by Amoskun               $#
#$  Recoding Tidak membuatmu menjadi Coder   $#
#$          Copyright 2019 MKATO             $#
###############################################
function proses($total, $nomor) {
    if ($total > 0) {
        return round($nomor / ($total / 100), 2);
    } else {
        return 0;
    }
}
function isEmail($email) {
    if (!preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", $email)) return false;
    return true;
}
function scrn($msg, $mode) {
    echo "[".color("yellow", "MKATO", $mode)."] ".$msg;
    $answer = rtrim(fgets(STDIN));
    return $answer;
}
###############################################
#$            C0d3d by Amoskun               $#
#$  Recoding Tidak membuatmu menjadi Coder   $#
#$          Copyright 2019 MKATO             $#
###############################################
function getrandom($type){
    switch ($type) {
        case 'country':
           $data = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bonaire", "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Democratic Republic of the Congo", "Cook Islands", "Costa Rica", "Croatia", "Cuba", "CuraÃ§ao", "Cyprus", "Czech Republic", "CÃ´te d'Ivoire", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and Mcdonald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran, Islamic Republic of", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Macedonia, the Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Palestine, State of", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Romania", "Russian Federation", "Rwanda", "Reunion", "Saint Barthelemy", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia", "Saint Martin (French part)", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten (Dutch part)", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Svalbard and Jan Mayen", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "United Republic of Tanzania", "Thailand", "Timor-Leste", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Viet Nam", "British Virgin Islands", "US Virgin Islands", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe", "Aland Islands"); shuffle($data); $res = $data[array_rand($data)]; break;
        case 'useragent':
            $data = array("Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/".rand(38, 56).".0", "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/".rand(38, 56).".0.3071.115 Safari/537.36", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9) AppleWebKit/537.71 (KHTML, like Gecko) Version/7.0 Safari/537.71"); shuffle($data); $res = $data[array_rand($data)]; break;
        case 'ip':
            $res = "" . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255); break;
        case 'os':
            $data = array('Windows', 'Ubuntu', 'Mac OS', 'iOS', 'Android'); shuffle($data); $res = $data[array_rand($data)]; break;
        case 'device':
            $data = array('iPhone 6s', 'Samsung Galaxy S10+', 'Asus Zenfone 5z', 'Ipad Pro', 'iPhone 7+','iPhone 7', 'iPhone 8+', 'Macbook Retina Pro', 'Samsung Galaxy S9+', 'Samsung Galaxy Note 8','Samsung Galaxy S8','Samsung Galaxy S8+','Samsung Galaxy Note 8'); shuffle($data); $res = $data[array_rand($data)]; break;
        default:
            $res = ''; break;
    }
        return $res;
}
###############################################
#$            C0d3d by Amoskun               $#
#$  Recoding Tidak membuatmu menjadi Coder   $#
#$          Copyright 2019 MKATO             $#
###############################################
function generatestring($type, $length, $kind){
    switch ($type) {
        case 'number':
            $res = '0123456789'; break;
        case 'mix':
            $res = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; break;
        case 'text':
            $res = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; break;
        default:
            $res = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; break;
    }
    $strlen = strlen($res);
    $str = '';
    for ($i=0; $i < $length; $i++) {
        $str .= $res[rand(0, $strlen - 1)];
    }
    if ($kind == 'upper') {
        return strtoupper($str);
    }else if ($kind == 'lower') {
        return strtolower($str);
    }else if ($type == 'number'){
        return $str;
    }else{
        return $str;
    }
}

function replacementcustom($body, $array){
    foreach ($array as $key => $value) {
    $getisi = explode("|", $value);
    shuffle($getisi);
    $isinya = $getisi[array_rand($getisi)];
    $body = str_ireplace($key, $isinya, $body);
    }
    return $body;
}

function random($body){
    @preg_match_all("/##(.*?)##/", $body, $match);

    foreach ($match[1] as $key => $value) {
        if (preg_match("/(_)/", $value)) {
            $buff = explode("_", $value);
            $getrand = generatestring($buff[0],$buff[2],$buff[1]);
            $taik = "##".$value."##";
            $body = str_replace($taik, $getrand, $body);
        }
    }
    return $body;
}

$tempekhelp = [
    [
      'tag'         => "##type_mode_length##",
      'description' => "random function tag",
      'example'     => "##text_normal_4##",
      'result'      => "KsnP",
    ],
    [
      'tag'         => "##randua##",
      'description' => "random useragent tag (LETTER only)",
      'example'     => "##randua##",
      'result'      => "Mozilla/5.0 (Windows NT 10.0 dst..",
    ],
    [
      'tag'         => "##randip##",
      'description' => "random IP tag (LETTER only)",
      'example'     => "##randip##",
      'result'      => getrandom('ip'),
    ],
    [
      'tag'         => "##randcountry##",
      'description' => "random country tag (LETTER only)",
      'example'     => "##randcountry##",
      'result'      => getrandom('country'),
    ],
    [
      'tag'         => "##randos##",
      'description' => "random OS tag (LETTER only)",
      'example'     => "##randos##",
      'result'      => getrandom('os'),
    ],
    [
      'tag'         => "##device##",
      'description' => "random device tag (LETTER only)",
      'example'     => "##randos##",
      'result'      => getrandom('device'),
    ],
    [
      'tag'         => "##date##",
      'description' => "date tag versi 1 (SUBJEK & LETTER)",
      'example'     => "##date##",
      'result'      => date('D, F d, Y  g:i A'),
    ],
    [
      'tag'         => "##date2##",
      'description' => "date tag versi 2 (SUBJEK & LETTER)",
      'example'     => "##date2##",
      'result'      => date('D, F d, Y'),
    ],
    [
      'tag'         => "##date3##",
      'description' => "date tag versi 3 (SUBJEK & LETTER)",
      'example'     => "##date3##",
      'result'      => date('F d, Y  g:i A'),
    ],
    [
      'tag'         => "##date4##",
      'description' => "date tag versi 4 (SUBJEK & LETTER)",
      'example'     => "##date4##",
      'result'      => date('F d, Y'),
    ],

];
?>