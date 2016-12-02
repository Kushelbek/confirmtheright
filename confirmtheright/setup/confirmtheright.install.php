<?php

/**
 * confirmtheright plugin
 *
 * @author  WebRomen
 * @copyright Copyright (c) 2015 - today: WebRomen | https://github.com/WebRomen/confirmtheright
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('users', 'module');
require_once cot_incfile('confirmtheright', 'plug');

global $db_users, $cfg;

cot_extrafield_add($db_users, 'CONFIRMTHERIGHT1', 'file', $R['input_file'], 'txt,html', '', '', '', $L['fileconfirmtheright_title'], './');
cot_extrafield_add($db_users, 'CONFIRMTHERIGHT2', 'file', $R['input_file'], 'txt,html', '', '', '', $L['fileconfirmtheright_title'], './');
