<?php

/* ====================
[BEGIN_COT_EXT]
Code=confirmtheright
Hooks=extrafields.import.file.first
[END_COT_EXT]
==================== */
/**
 * confirmtheright plugin
 *
 * @author Roffun
 * @copyright Copyright (c) 2015 - today: Roffun | https://webcot.net/cotonti/extensions/confirmtheright-plugin
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

require_once cot_langfile('confirmtheright', 'plug');
global $usr;
if (in_array($inputname, array('ruserCONFIRMTHERIGHT1', 'ruserCONFIRMTHERIGHT2')) && !$usr['isadmin'])
{
        cot_error($L['fileconfirmtheright_norights'], $inputname);
        unset($import);
}
