<?php
include_once('api.php');
    
// Require an action parameter
if ( empty( $_REQUEST['action'] ) )
	die();
	
switch ($_REQUEST['action']) :
    case 'search':
        $search = ajax_api_search($_REQUEST['value']);
        
        echo json_encode( $search );
        break;
endswitch;
	
function ajax_api_search($string = '') {
    $api = new PHP_API();

    $results = $api->get('people', array('search' => $string));
    
    return $results;    
}