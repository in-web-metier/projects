<?php
define('AMOCRM_USER_LOGIN', 'es.kei@ya.ru');
define('AMOCRM_USER_HASH', 'e7cf6ea78b610c551fb182697dbd090b');
define('AMOCRM_SUBDOMAIN', 'mybi');


function get_clientid() {
	if (isset($_COOKIE['_ga'])) {
		list($version, $domainDepth, $cid1, $cid2) = split('[\.]', $_COOKIE["_ga"], 4);

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

function check_response_code($code) {
	$code = (int)$code;
	$errors = array(
		301 => 'Moved permanently',
		400 => 'Bad request',
		401 => 'Unauthorized',
		403 => 'Forbidden',
		404 => 'Not found',
		500 => 'Internal server error',
		502 => 'Bad gateway',
		503 => 'Service unavailable'
	);
	try {
		if($code != 200 && $code != 204)
			throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error', $code);
	} catch(Exception $E) {
		die('Ошибка: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
	}
}

function make_request($method, $link, $data=array()) {
	$curl = curl_init();

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
	curl_setopt($curl, CURLOPT_URL, $link);

	if ($method == 'POST') {
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	}

	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

	$out = curl_exec($curl);
	$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);

	check_response_code($code);
	return $out;
}

function authorize() {
	$link='https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/auth.php?type=json';
	$user = array(
		'USER_LOGIN' => AMOCRM_USER_LOGIN,
		'USER_HASH' => AMOCRM_USER_HASH
	);

	$response = json_decode(make_request('POST', $link, $user), true);
	$response = $response['response'];

	return isset($response['auth']);
}

function get_account() {
	$link='https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/accounts/current';

	$response = json_decode(make_request('GET', $link), true);
	$response = $response['response'];

	return $response['account'];
}

function get_fields($account) {
	$total_fields = array();

	if (isset($account['custom_fields'])) {
		if (isset($account['custom_fields']['contacts'])) {
			$need = array_flip(array('PHONE', 'EMAIL', 'Источник', 'Форма'));
			$fields = array();

			do {
				foreach($account['custom_fields']['contacts'] as $field)
					if (is_array($field) && isset($field['id'])) {
						if (isset($field['code']) && isset($need[$field['code']])) {
							$total_fields[$field['code']] = (int)$field['id'];
							$fields[$field['code']] = (int)$field['id'];
						} else if (isset($field['name']) && isset($need[$field['name']])) {
							$total_fields[$field['name']] = (int)$field['id'];
							$fields[$field['name']] = (int)$field['id'];
						}
						$diff = array_diff_key($need, $fields);
						if (empty($diff))
							break 2;
					}

				if (isset($diff))
					die('В amoCRM отсутствуют следующие поля'.': '.join(', ', $diff));
				else
					die('Невозможно получить дополнительные поля');
			} while(false);
		}

		if (isset($account['custom_fields']['leads'])) {
			$need = array_flip(array('clientId', 'requestId'));
			$fields = array();

			do {
				foreach($account['custom_fields']['leads'] as $field)
					if (is_array($field) && isset($field['id'])) {
						if (isset($field['name']) && isset($need[$field['name']])) {
							$total_fields[$field['name']] = (int)$field['id'];
							$fields[$field['name']] = (int)$field['id'];
						}
						$diff = array_diff_key($need, $fields);
						if (empty($diff))
							break 2;
					}

				if (isset($diff))
					die('В amoCRM отсутствуют следующие поля'.': '.join(', ', $diff));
				else
					die('Невозможно получить дополнительные поля');
			} while(false);
		}
	} else {
		die('Невозможно получить дополнительные поля');
	}

	$custom_fields = empty($total_fields) ? false : $total_fields;
	return $custom_fields;
}

function get_users($account) {
	$fields = array();

	if (isset($account['users'])) {
		foreach($account['users'] as $field)
			if (is_array($field) && isset($field['id'])) {
				$fields[$field['login']] = (int)$field['id'];
			}
	} else {
		die('Невозможно получить информацию о пользователях');
	}

	$users = empty($fields) ? false : $fields;
	return $users;
}

function get_lead_statuses($account) {
	$fields = array();

	if (isset($account['leads_statuses'])) {
		foreach($account['leads_statuses'] as $field)
			if (is_array($field) && isset($field['id'])) {
				if (isset($field['name']))
					$fields[$field['name']] = (int)$field['id'];
			}
	} else {
		die('Невозможно получить информацию по статусам сделки');
	}

	$statuses = empty($fields) ? false : $fields;
	return $statuses;
}

function get_task_types($account) {
	$fields = array();

	if (isset($account['task_types'])) {
		foreach($account['task_types'] as $field)
			if (is_array($field) && isset($field['id'])) {
				if (isset($field['name']))
					$fields[$field['name']] = (int)$field['id'];
			}
	} else {
		die('Невозможно получить информацию по типам задач');
	}

	$statuses = empty($fields) ? false : $fields;
	return $statuses;
}

function get_lead($lead_id) {
    $link='https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/leads/list?id='.$lead_id;

    $response = json_decode(make_request('GET', $link), true);
    if ($response)
        if (isset($response['response'], $response['response']['leads']))
            return $response['response']['leads'][0];

    return array();
}

function get_contact($data) {
	$queries = array();

	if (!empty($data['email']))
		$queries[] = $data['email'];

	foreach($queries as $query) {
		$link = 'https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/contacts/list?query='.$query;

		$response = json_decode(make_request('GET', $link), true);
		if ($response) {
			if (isset($response['response'], $response['response']['contacts']))
				foreach($response['response']['contacts'] as $contact)
					if (is_array($contact) && isset($contact['id'])) {
						return $contact;
					}
		}
	}

	return array();
}

function get_company($data) {
	$link='https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/company/list?query='.$data['company'];

	$response = json_decode(make_request('GET', $link), true);
	if ($response) {
		if (isset($response['response'], $response['response']['contacts']))
			foreach($response['response']['contacts'] as $company)
				if (is_array($company) && isset($company['id'], $company['name']) && $company['name'] == $data['company']) {
					return $company;
				}
	}

	return array();
}

function add_contact($data, $custom_fields) {
	$contact = array(
		'name' => $data['name'],
		'linked_leads_id'=> array('0' => $data['linked_leads_id']),
		'custom_fields' => array(
			array(
				'id' => $custom_fields['PHONE'],
				'values' => array(
					array(
						'value' => $data['phone'],
						'enum' => 'WORK'
					)
				)
			)
		)
	);

	if (!empty($data['email']))
		$contact['custom_fields'][] = array(
			'id' => $custom_fields['EMAIL'],
			'values' => array(
				array(
					'value' => $data['email'],
					'enum' => 'WORK'
				)
			)
		);

	if (!empty($data['form_name']))
		$contact['custom_fields'][] = array(
			'id' => $custom_fields['Форма'],
			'values' => array(
				array(
					'value' => $data['form_name']
				)
			)
		);

	$contact['custom_fields'][] = array(
		'id' => $custom_fields['Источник'],
		'values' => array(
			array(
				'value' => 493189
			)
		)
	);

	if (!empty($data['responsible_user_id']))
		$contact['responsible_user_id'] = $data['responsible_user_id'];

	$set['request']['contacts']['add'][] = $contact;
	$link = 'https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/contacts/set';

	$response = json_decode(make_request('POST', $link, $set), true);
	$response = $response['response']['contacts']['add'];

	$output = '';
	foreach ($response as $v)
		if (is_array($v))
			$output = $v['id'];

	return $output;
}

function update_contact($contact, $data, $custom_fields) {
	if (!empty($data['phone']) || !empty($data['email'])) {
		$contact_update = array(
			'id' => $contact['id'],
			'last_modified' => time()
		);

		if (!empty($data['phone']))
			$contact_update['custom_fields'][] = array(
				'id' => $custom_fields['PHONE'],
				'values' => array(
					array(
						'value' => $data['phone'],
						'enum' => 'WORK'
					)
				)
			);

		if (!empty($data['email']))
			$contact_update['custom_fields'][] = array(
				'id' => $custom_fields['EMAIL'],
				'values' => array(
					array(
						'value' => $data['email'],
						'enum' => 'WORK'
					)
				)
			);

		$set['request']['contacts']['update'][] = $contact_update;
		$link = 'https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/contacts/set';

		$response = json_decode(make_request('POST', $link, $set), true);
		$response = $response['response']['contacts']['update'];
	}

	return $contact['id'];
}

function update_lead($lead, $data, $custom_fields) {
	$status_hierarchy = array(
		142 => 1,
		143 => 1,
	    13612992 => 10,
	    11445925 => 20,
	    11688616 => 40,
	    13900941 => 40
	);

	$current_status = (int)$lead['status_id'];
	$new_status = (int)$data['status_id'];

	if (array_key_exists($current_status, $status_hierarchy) && array_key_exists($new_status, $status_hierarchy)) {
		if ($status_hierarchy[$new_status] > $status_hierarchy[$current_status]) {
			$lead_update = array(
				'id' => $lead['id'],
				'pipeline_id' => $data['pipeline_id'],
				'status_id' => $data['status_id'],
				'responsible_user_id' => $data['responsible_user_id'],
				'last_modified' => time()
			);

			$set['request']['leads']['update'][] = $lead_update;
			$link = 'https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/leads/set';

			$response = json_decode(make_request('POST', $link, $set), true);
			$response = $response['response']['leads']['update'];
		}
	}

	return $lead['id'];
}

function append_lead($contact, $data, $custom_fields) {
	$leads = array();

	foreach ($contact['linked_leads_id'] as $key => $value)
		array_push($leads, $value);

	if (in_array($data['linked_leads_id'], $leads) === false) {
		array_push($leads, $data['linked_leads_id']);

		$linked_leads = array();
		foreach($leads as $key=>$value) {
			$linked_leads[$key] = $value;
		}

		$contact_update = array(
			'id' => $contact['id'],
			'linked_leads_id' => $linked_leads,
			'last_modified' => time()
		);

		if (!empty($data['phone']))
			$contact_update['custom_fields'][] = array(
				'id' => $custom_fields['PHONE'],
				'values' => array(
					array(
						'value' => $data['phone'],
						'enum' => 'WORK'
					)
				)
			);

		if (!empty($data['email']))
			$contact_update['custom_fields'][] = array(
				'id' => $custom_fields['EMAIL'],
				'values' => array(
					array(
						'value' => $data['email'],
						'enum' => 'WORK'
					)
				)
			);

		$set['request']['contacts']['update'][] = $contact_update;
		$link = 'https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/contacts/set';

		$response = json_decode(make_request('POST', $link, $set), true);
		$response = $response['response']['contacts']['update'];
	}

	return $contact['id'];
}

function add_note($lead_id, $text) {
	$note = array(
		'element_id' => $lead_id,
		'element_type' => 2,
		'note_type' => 4,
		'text' => $text,
	);

	$set['request']['notes']['add'][] = $note;
	$link = 'https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/notes/set';

	$response = json_decode(make_request('POST', $link, $set), true);
	$response = $response['response']['notes']['add'];

	$output = '';
	foreach ($response as $v)
		if (is_array($v))
			$output = $v['id'];

	return $output;
}

function add_task($task) {
	$set['request']['tasks']['add'][] = $task;
	$link = 'https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/tasks/set';

	$response = json_decode(make_request('POST', $link, $set), true);
	$response = $response['response']['tasks']['add'];

	$output = '';
	foreach ($response as $v)
		if (is_array($v))
			$output = $v['id'];

	return $output;
}

function add_lead($data, $custom_fields) {
	$lead = array(
		'name' => $data['name'],
		'pipeline_id' => $data['pipeline_id'],
		'status_id' => $data['status_id'],
		'responsible_user_id' => $data['responsible_user_id']
	);

	if (!empty($data['clientid']))
		$lead['custom_fields'][] = array(
			'id' => $custom_fields['clientId'],
			'values' => array(
				array(
					'value' => $data['clientid']
				)
			)
		);

	if (!empty($data['requestid']))
		$lead['custom_fields'][] = array(
			'id' => $custom_fields['requestId'],
			'values' => array(
				array(
					'value' => $data['requestid']
				)
			)
		);

	$set['request']['leads']['add'][] = $lead;
	$link = 'https://'.AMOCRM_SUBDOMAIN.'.amocrm.ru/private/api/v2/json/leads/set';

	$response = json_decode(make_request('POST', $link, $set), true);
	$response = $response['response']['leads']['add'];

	$output = '';
	foreach ($response as $v)
		if (is_array($v))
			$output = $v['id'];

	return $output;
}

function clean_string($string) {
	$bad = array("content-type", "bcc:", "to:", "cc:", "href");
	return str_replace($bad, "", $string);
}


function get_user_from_queue($users) {
	$queue = array(
		'olga.n@mybi.ru',
		'danila.g@mybi.ru'
	);

	$content = file_get_contents(dirname(__FILE__).'/user.txt');
	$index = (int)$content + 1;

	if ($index >= count($queue)) {
		$index = 0;
	}
	file_put_contents(dirname(__FILE__).'/user.txt', (string)$index);

	return $users[$queue[$index]];
}


$data = array(
	'lead_type' => isset($_REQUEST['form_name']) ? clean_string($_REQUEST['form_name']) : 'Заявка с сайта',
	'name' => isset($_REQUEST['name']) ? clean_string($_REQUEST['name']) : '',
	'email' => isset($_REQUEST['email']) ? clean_string($_REQUEST['email']) : '',
	'phone' => isset($_REQUEST['tel']) ? clean_string($_REQUEST['tel']) : '',
	'message' => isset($_REQUEST['comment']) ? clean_string($_REQUEST['comment']) : '',
	'form_name' => isset($_REQUEST['form_name']) ? clean_string($_REQUEST['form_name']) : 'Заявка с сайта',
	'clientid' => isset($_REQUEST['clientid']) ? clean_string($_REQUEST['clientid']) : get_clientid(),
	'requestid' => isset($request_id) ? $request_id : md5(uniqid(rand(), true))
);
if (!(empty($data['phone']) && empty($data['email'])) && authorize()) {
	$account = get_account();
	$users = get_users($account);
	$custom_fields = get_fields($account);
	$lead_statuses = get_lead_statuses($account);
	$task_types = get_task_types($account);

	$data['responsible_user'] = $users['alex@mybi.ru'];

	if (($data['form_name'] == 'Регистрация на вебинар') || ($data['form_name'] == 'Вход в демо')) {
		$data['responsible_user'] = get_user_from_queue($users);
	}

	$lead_data = array(
		'name' => $data['lead_type'].', '.$data['name'],
		'pipeline_id' => 221704,
		'status_id' => $lead_statuses['Вход в демо'],
		'responsible_user_id' => $data['responsible_user'],
		'clientid' => $data['clientid'],
		'requestid' => $data['requestid']
	);

	if ($data['form_name'] == 'Регистрация на вебинар') {
		$lead_data['status_id'] = $lead_statuses['Регистрация на Вебинар'];
	}

	if ($data['form_name'] == 'Регистрация на семинар') {
		$lead_data['pipeline_id'] = 479436;
		$lead_data['status_id'] = 13900941;
	}

	if ($data['form_name'] == 'Регистрация в сервисе') {
		$lead_data['pipeline_id'] = 531544;
		$lead_data['status_id'] = 14317081;
	}

	if (($data['form_name'] == 'Заказ звонка') || ($data['form_name'] == 'Заявка с сайта')) {
		$lead_data['status_id'] = $lead_statuses['Заявка/Интерес'];
		$lead_data['responsible_user_id'] = $data['responsible_user'];
	}

	$contact_data = array(
		'name' => $data['name'],
		'email' => $data['email'],
		'phone' => $data['phone'],
		'form_name' => $data['form_name'],
		'responsible_user_id' => $data['responsible_user']
	);

	$contact = get_contact($contact_data);

	if (!empty($contact)) {
		foreach ($contact['linked_leads_id'] as $value) {
			$lead = get_lead($value);

			if (!empty($lead)) {
				if ($data['responsible_user'] != $users['alex@mybi.ru']) {
					$data['responsible_user'] = $lead['responsible_user_id'];
					$lead_data['responsible_user_id'] = $lead['responsible_user_id'];
					$contact_data['responsible_user_id'] = $lead['responsible_user_id'];
				}

				$contact_id = update_contact($contact, $contact_data, $custom_fields);
				$lead_id = update_lead($lead, $lead_data, $custom_fields);

				break;
			}
		}
	}

	if (empty($contact_id) || empty($lead_id)) {
		$lead_id = add_lead($lead_data, $custom_fields);
		$contact_data['linked_leads_id'] = $lead_id;

		if (empty($contact)) {
			$contact_id = add_contact($contact_data, $custom_fields);
		} else {
			$contact_id = append_lead($contact, $contact_data, $custom_fields);
		}
	}

	if (!empty($data['message'])) {
		$note_id = add_note($lead_id, $data['message']);
	}

	$task = array(
		'element_id' => $lead_id,
		'element_type' => 2,
		'task_type' => $task_types['Связаться с клиентом'],
		'responsible_user_id' => $data['responsible_user'],
		'text' => 'Звонок клиенту',
		'complete_till' => strtotime(date('d-m-Y').'23:59:00')
	);
	if ($data['form_name'] == 'Регистрация на вебинар') {
		$task['text'] = 'Повторное приглашение на вебинар';
	} else if ($data['form_name'] == 'Вход в демо') {
		$task['text'] = 'Выслать приветственное письмо';
	}
	$task_id = add_task($task);
}
