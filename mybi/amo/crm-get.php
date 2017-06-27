<?php
define('AMOCRM_REQUIRED_PIPELINE_ID', '221704');
define('AMOCRM_FINAL_STATUS_ID', '142');
define('AMOCRM_CID_FIELD_ID', '213449');
define('TRACKER_ID', 'UA-60139107-2');


$metrics = array(
    11445925 => 'cm1',
    11445928 => 'cm2',
    11445931 => 'cm3',
    11445934 => 'cm4',
    142 => 'cm5'
);

$leads = NULL;

if (checkParams('leads'))
    $leads = $_POST['leads'];

if ($leads != NULL) {
    $amocrm_leads = array();
    $result = file_get_contents('amocrm.json');

    if (!empty($result)) {
        $amocrm_leads = json_decode($result, 1);
    }

    if (array_key_exists('add', $leads)) {
        $leads = $leads['add'][0];
    } else {
        $leads = $leads['status'][0];
    }

    $lead_id = $leads['id'];
    $lead_name = $leads['name'];
    $lead_status = $leads['status_id'];
    $pipeline_id = $leads['pipeline_id'];
    $price = $leads['price'];

    if (empty($price) || strlen((string)$price) === 0)
        $price = 0;

    if ($pipeline_id == AMOCRM_REQUIRED_PIPELINE_ID && array_key_exists($lead_status, $metrics)) {
        $cid = getLeadField($leads, AMOCRM_CID_FIELD_ID);

        logArray(array(
            '$lead_id' => $lead_id,
            '$lead_name' => $lead_name,
            '$lead_status' => $lead_status,
            '$price' => $price,
            '$cid' => $cid
        ), 'Получили такие данные');

        if (!(isset($amocrm_leads[$lead_id]) && in_array($lead_status, $amocrm_leads[$lead_id]))) {
            if ($cid != NULL) {
                $params = array(
                    'v' => '1',
                    'tid' => TRACKER_ID,
                    'cid' => $cid,
                    't' => 'event',
                    'ec' => 'deal status',
                    'ea' => 'changed',
                    'cd2' => $lead_name,
                    'cd3' => $lead_id,
                    'ni' => 1,
                    $metrics[$lead_status] => 1
                );
                if ($lead_status == AMOCRM_FINAL_STATUS_ID && $price != 0) {
                    $params['cm6'] = $price;
                }
                query('http://www.google-analytics.com/collect', $params);

                if ($lead_status == AMOCRM_FINAL_STATUS_ID && $price != 0) {
                    $params = array(
                        'v' => '1',
                        'tid' => TRACKER_ID,
                        'cid' => $cid,
                        't' => 'transaction',
                        'ti' => $lead_id,
                        'tr' => $price,
                        'ni' => 1
                    );
                    query('http://www.google-analytics.com/collect', $params);
                }

                $amocrm_leads[$lead_id][] = $lead_status;
                file_put_contents('amocrm.json', json_encode($amocrm_leads));
            }
        }
    }
}

function checkParams($name) {
    if (!isset($_POST[$name]) || empty($_POST[$name]) || strlen((string)$_POST[$name]) === 0) {
        return false;
    }

    return true;
}

function getLeadField($lead, $field) {
    if (!empty($lead)) {
        foreach ($lead['custom_fields'] AS $item) {
            if ($item['id'] == $field) {
                $result = htmlspecialchars_decode($item['values'][0]['value']);
            }
        }
    }

    return $result;
}

function query($url, $data = null)
{
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
    $logFile = 'amocrm.log';
    file_put_contents($logFile, "\n".date("Y-m-d H:i:s").": ".$text, FILE_APPEND | LOCK_EX);
}
