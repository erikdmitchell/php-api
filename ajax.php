<?php
include_once('api.php');
    
// Require an action parameter
if ( empty( $_REQUEST['action'] ) )
	die();
	
switch ($_REQUEST['action']) :
    case 'search':
        $html = ajax_api_search($_REQUEST['value']);
        
        echo $html;
        break;
endswitch;
	
function ajax_api_search($string = '') {
    $html = '';
    $api = new PHP_API();

    $search = $api->get('people', array('search' => $string));
    
    $html .= '<div class="container">';
    
        foreach ($search['results'] as $result) :
            $html .= '<div class="row person">';
                $html .= '<div class="col-12 col-sm-12">';
                    $html.=$result['name'];
                $html.='</div>';
                $html .= '<div class="col-6 col-sm-6">';
                    $html.='Height: '.$result['height'];
                $html.='</div>';  
                $html .= '<div class="col-6 col-sm-6">';
                    $html.='Mass: '.$result['mass'];
                $html.='</div>';                                
                $html .= '<div class="col-6 col-sm-6">';
                    $html.='Hair Color: '.$result['hair_color'];
                $html.='</div>'; 
                $html .= '<div class="col-6 col-sm-6">';
                    $html.='Skin Color: '.$result['skin_color'];
                $html.='</div>'; 
                $html .= '<div class="col-6 col-sm-6">';
                    $html.='Birth Year: '.$result['birth_year'];
                $html.='</div>';
                $html .= '<div class="col-6 col-sm-6">';
                    $html.='Gender: '.$result['gender'];
                $html.='</div>'; 
                
            $html .= '</div>';
        endforeach;
    
    $html .= '</div>';
    
    return $html;    
}