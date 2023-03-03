<?php


include_once 'functions.php';

br( date_default_timezone_get() );

$currentTime = time();
$fiveDaysFromNow = $currentTime + 5 * 24 * 60 * 60;
$yesterday = $currentTime - 24 * 60 * 60;
br( $currentTime );
br( $fiveDaysFromNow );
br( $yesterday );

br(date( 'd/m/Y g:ia' ));
br(date( 'd/m/Y H:i:s' ));
br(date( 'd/m/Y H:i:s', $fiveDaysFromNow ));
br(date( 'd/m/Y H:i:s', $yesterday ));

br();
date_default_timezone_set('America/Bahia');
br( date_default_timezone_get() );

$currentTime = time();
$fiveDaysFromNow = $currentTime + 5 * 24 * 60 * 60;
$yesterday = $currentTime - 24 * 60 * 60;
br( $currentTime );
br( $fiveDaysFromNow );
br( $yesterday );

br(date( 'd/m/Y h:ia' ));
br(date( 'd/m/Y H:i:s' ));
br(date( 'd/m/Y H:i:s', $fiveDaysFromNow ));
br(date( 'd/m/Y H:i:s', $yesterday ));

br();
date_default_timezone_set('UTC');

br(date( 'd/m/Y H:i:s', mktime(0, 0, 0, 12, 26, null) ));

br(date( 'd/m/Y H:i:s', strtotime('2020-06-27 09:13:59') ));
br(date( 'd/m/Y H:i:s', strtotime('tomorrow') ));
br(date( 'd/m/Y H:i:s', strtotime('yesterday') ));
br(date( 'd/m/Y H:i:s', strtotime('last day of february') ));
br(date( 'd/m/Y H:i:s', strtotime('last day of february 2020') ));
br(date( 'd/m/Y H:i:s', strtotime('first day of november') ));
br(date( 'd/m/Y H:i:s', strtotime('second friday of this month') ));
br(date( 'd/m/Y H:i:s', strtotime('second friday of next month') ));
br(date( 'd/m/Y H:i:s', strtotime('second friday of april') ));

prearr(date_parse(date( 'd/m/Y H:i:s', $currentTime )));

prearr(date_parse_from_format('d/m/Y H:i:s', date( 'd/m/Y H:i:s', $currentTime )));
