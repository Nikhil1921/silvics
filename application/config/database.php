<?php defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

switch ($_SERVER['SERVER_NAME']) {
    case 'www.silvicswoodveneers.com':
    case 'silvicswoodveneers.com':
    case 'https://www.silvicswoodveneers.com':
    case 'https://silvicswoodveneers.com':
        $db['default'] = array(
            'dsn'   => '',
            'hostname' => 'localhost',
            'username' => 'densehwm_demo',
            'password' => 'Densetek@2018',
            'database' => 'densehwm_silvic',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => (ENVIRONMENT !== 'production'),
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );
        break;
    case 'www.densetek.gq':
    case 'densetek.gq':
    case 'https://www.densetek.gq':
    case 'https://densetek.gq':
        $db['default'] = array(
            'dsn'   => '',
            'hostname' => 'localhost',
            'username' => 'densehwm_demo',
            'password' => 'Densetek@2018',
            'database' => 'densehwm_silvic',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => (ENVIRONMENT !== 'production'),
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );
        break;
    
    default:
        $db['default'] = array(
            'dsn'   => '',
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'silvic',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => (ENVIRONMENT !== 'production'),
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );
        break;
}