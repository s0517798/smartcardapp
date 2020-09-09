<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['/'] = 'Welcome';
$route['login'] = 'Welcome/loginview';
$route['login-form'] = 'Welcome/loginform';

$route['shop-detail'] = 'Welcome/shopdetail';

$route['after-login'] = 'Welcome/afterlogin';

$route['logout'] = 'Welcome/logout';

$route['activate-card'] = 'Welcome/activatecard';
$route['activate-card-form'] = 'Welcome/activatecardform';

$route['issue-cards'] = 'Welcome/issuecards';

$route['validity-check'] = 'Welcome/validitycheck';
$route['validity-check-form'] = 'Welcome/validitycheckform';