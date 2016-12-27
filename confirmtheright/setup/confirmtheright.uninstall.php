<?php
/**
 * confirmtheright plugin
 *
 * @author Roffun
 * @copyright Copyright (c) 2015 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('users','module');
require_once cot_incfile('confirmtheright','plug');

global $db_users,$cfg;

cot_extrafield_remove($db_users,'CONFIRMTHERIGHT1');
cot_extrafield_remove($db_users,'CONFIRMTHERIGHT2');
