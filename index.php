<?php /*

          .___.    .   ,    ,      .__           
          [__ |* _ |_ -+-  -+- _   [__) _.._.* __
          |   ||(_][ ) |    | (_)  |   (_][  |_) 
                ._|                              

          Flight - Mike Cao // http://flightphp.com MIT
    Paris&Idiorm - Jamie Matthews // http://j4mie.github.com/idiormandparis BSD
 Flight to Paris - Aza // http://esfriki.com GPLv3

*/
define ( 'APP_PATH', realpath ( dirname ( __FILE__ ) . '/app' ) );
define ( 'LIB_PATH', realpath ( dirname ( __FILE__ ) . '/lib' ) );

define ( 'FLIGHT_PATH', LIB_PATH . '/flight' );
define ( 'PARIS_PATH', LIB_PATH . '/paris' );
define ( 'MAILER_PATH', LIB_PATH . '/phpmailer' );

require FLIGHT_PATH.'/Flight.php';
require PARIS_PATH.'/paris.php';

set_include_path(get_include_path() . PATH_SEPARATOR . FLIGHT_PATH);
set_include_path(get_include_path() . PATH_SEPARATOR . LIB_PATH);
set_include_path(get_include_path() . PATH_SEPARATOR . APP_PATH);
set_include_path(get_include_path() . PATH_SEPARATOR . APP_PATH . '/model');

Flight::set('flight.lib.path', APP_PATH);
Flight::set('flight.views.path', APP_PATH.'/view');


/****  CONFIGURE YOUR DOMAIN AND DB HERE  ****/ 
define ( 'DOMAIN', 'barricada.localhost' );
define ( 'SITE', 'Barricada' );

ORM::configure('mysql:host=localhost;dbname=barricada');
ORM::configure('username', 'root');
ORM::configure('password', '');

date_default_timezone_set('America/Argentina/Buenos_Aires');
/****  AND DOWN THE RABBIT HOLE  ****/


require APP_PATH.'/model/auth.php';
$auth = new auth;

Flight::route('GET /',array('controller_barricada','home'));

Flight::route('POST /agregar',array('controller_barricada','nuevo'));

Flight::start();
