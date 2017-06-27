<?php
    define('TRACKER_ID', 'UA-60139107-2');
    define('WEBHOOK_URL', 'https://app.mybi.ru/leadgen/webhook/328');


    $data_to_post = array(
        'domain' => 'mybi.ru',
        'lead_type' => isset($_POST['form_name']) ? $_POST['form_name'] : 'Заявка с сайта',
        'name' => isset($_POST['name']) ? $_POST['name'] : '',
        'email' => isset($_POST['email']) ? $_POST['email'] : '',
        'phone' => isset($_POST['tel']) ? $_POST['tel'] : '',
        'comments' => isset($_POST['comment']) ? $_POST['comment'] : '',
        'page_url' => getenv('HTTP_REFERER'),
        'ip' => get_client_ip(),
        'request_id' => isset($request_id) ? $request_id : md5(uniqid(rand(), true)),
        'clientid' => get_client_id()
    );

    if (isset($_COOKIE['refffa']) && !empty($_COOKIE['refffa'])) {
        $data_to_post['referer'] = $_COOKIE['refffa'];
    }
    if (isset($_COOKIE['utm_source']) && !empty($_COOKIE['utm_source'])) {
        $data_to_post['utm_source'] = $_COOKIE['utm_source'];
    }
    if (isset($_COOKIE['utm_medium']) && !empty($_COOKIE['utm_medium'])) {
        $data_to_post['utm_medium'] = $_COOKIE['utm_medium'];
    }
    if (isset($_COOKIE['utm_campaign']) && !empty($_COOKIE['utm_campaign'])) {
        $data_to_post['utm_campaign'] = $_COOKIE['utm_campaign'];
    }
    if (isset($_COOKIE['utm_content']) && !empty($_COOKIE['utm_content'])) {
        $data_to_post['utm_content'] = $_COOKIE['utm_content'];
    }
    if (isset($_COOKIE['utm_term']) && !empty($_COOKIE['utm_term'])) {
        $data_to_post['utm_term'] = $_COOKIE['utm_term'];
    }

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, WEBHOOK_URL);
    curl_setopt($curl, CURLOPT_POST, sizeof($data_to_post));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_to_post);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($curl);
    curl_close($curl);


    if (array_key_exists('clientid', $data_to_post)) {
        $params = array(
            'v' => '1',
            'tid' => TRACKER_ID,
            'cid' => $data_to_post['clientid'],
            't' => 'event',
            'ec' => 'Lead',
            'ea' => 'Contact',
            'el' => $data_to_post['request_id'],
            'ni' => 1
        );
        query('http://www.google-analytics.com/collect', $params);
    }


    function get_client_ip() {
        $ipaddress = '';

        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }


    function get_client_id() {
        if (isset($_COOKIE['_ga'])) {
            list($version, $domainDepth, $cid1, $cid2) = preg_split('[\.]', $_COOKIE["_ga"], 4);
            $contents = array(
                'version' => $version,
                'domainDepth' => $domainDepth,
                'cid' => $cid1.'.'.$cid2
            );
            $cid = $contents['cid'];
        } else {
            $cid = '';
        }

        return $cid;
    }


    function query($url, $data = null) {
        if (!empty($data)) {
            $url .= strpos($url, "?") > 0 ? "&" : "?";
            $url .= http_build_query($data);
        }

        file_get_contents($url);
        logString('Отправили HTTP запрос на адрес '.$url);
    }


    function logArray($arr, $text) {
        logString($text."\n".print_r($arr, true));
    }


    function logString($text) {
        $logFile = 'query.log';
        file_put_contents($logFile, "\n".date("Y-m-d H:i:s").": ".$text, FILE_APPEND | LOCK_EX);
    }
