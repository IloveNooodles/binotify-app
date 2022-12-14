<?php
function response_json($data, $status_code = 200) {
    if (!isset($data)) {
        $data = array();
    }

    $response_data = array(
        'status' => $status_code,
        'data' => $data
    );

    header('Content-Type: application/json', true, $status_code);
    $json = json_encode($response_data);
    echo $json;
}

function response_not_allowed_method() {
    response_json(["status_message" => METHOD_NOT_ALLOWED], 405);
}