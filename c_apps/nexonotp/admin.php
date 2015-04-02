<?php

namespace OCA\NEXONOTP;

$appId = 'nexonotp';
\OCP\Util::addScript($appId, 'admin');
\OCP\Util::addStyle($appId, 'admin');

$tmpl = new \OCP\Template($appId, 'admin');

$tmpl->assign('internal_ip', Nexonotp::getinternalIPs());
$tmpl->assign('settings', Nexonotp::getSettings());
$tmpl->assign('content', Nexonotp::getAppValue('content',''));
$tmpl->assign('secureAlarm', Nexonotp::getAppValue('secureAlarm',''));

return $tmpl->fetchPage();
